<?php
/* ===================================================================================================================================================================================================================
 *                                                                                          TODO - Process page of API's
  ================================================================================================================================================================================================================= */
//  TODO - Feedback API Full.

//  TODO - Send mail what are all completed.
//  TODO - Integrate mailer - 1.Signup API verification link 2.Forget password API random password send.
//  TODO - Vefiy account API - Display pages -1.Verify email success, verfiy email failed, verify email link not valid.
//  TODO - Message conetnt get Arabic and English 1.User not registered 2.User already registered 3.Users account not activated.
//  TODO - Create list and give to Vinod , Display pages make fine with Content, Messages with content , Integrate Emailer

//  TODO - Edit profile API Test , make Fine.
//  TODO - Hot mail issue Fix.
//  TODO - Shift everything to NESTLE Server ASAP , check Storage server is working fine from NESTLE Server , send Email

//  Get JSON and KEY Validation make as a Function - Later only - IMP

/* ===================================================================================================================================================================================================================
 *                                                                                              API Functions.
  ================================================================================================================================================================================================================= */

/**
 * API Function Performs Registration / Sign Up of NESTLE User to the HR App.
 * An account activation link will be generated and send to Users Email when registration completed Successfully.
 * Account activation link = md5(email+created_user_id)
 * Default account status will be inactive and it will be activated when user clicks on activation Link.
 * Activation link will be validated from Server using account-status-change API.
 * INFO : API-1 | Status:Completed | Others: TODO-Emailer integration
 */
function doSignUP()
{
    # Getting full contents in the current file and parsing/decoding all to JSON.
    $JSON = json_decode(file_get_contents('php://input'));
    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $JSON->nestle->key;
    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {

        # Registration details Reading from JSON.
        $employeeName = $JSON->nestle->name;
        $nestleEmailID = $JSON->nestle->email;
        $department = $JSON->nestle->department;
        $password = $JSON->nestle->password;
        $os = $JSON->nestle->os;
        $lang = $JSON->nestle->lang;

        # Other Request details Reading which need to be stored in database.
        $clientIP = $_SERVER['REMOTE_ADDR'];
        $clientHostName = $_SERVER['REMOTE_HOST'];
        $clientPort = $_SERVER['REMOTE_PORT'];
        $deviceType = $_SERVER["HTTP_USER_AGENT"];

        # Custom details creation which also need to be stored in database.
        $dateStamp = time();

        # Finding If user already registered or not , and continuing the Process accordingly.
        $userAlreadyRegisteredStatus = isUserAlreadyExist($nestleEmailID);
        if ($userAlreadyRegisteredStatus == false) { # If user not registered DO THIS
            # Save all user information's to database , When done it will send JSON Response which is success or failure.
            saveUserInfo($employeeName, $nestleEmailID, $department, $password, $os, $lang, $clientIP, $clientHostName, $clientPort, $deviceType, $dateStamp);
        } else { # If user registered DO THIS
            # Sending User already Registered JSON Response to application.
            $json = array("key" => REQUEST_SIGN_UP, "response" => RESPONSE_PARTIALLY_SUCCESS_SHOW_MESSAGE, "message" => getMessageUserAlreadyRegsitered($lang));
            sendResponseToAppAndExitAPI($json);
        }

    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_SIGN_UP, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * Performs Activation link verification and Activation of Newly created account.
 * User will click on the Link from which he/she got as Email.
 * When user clicks , It will go to a Page where he/she can see the Account activation status
 * (but can be improved , if one char change in ends will not give 'Link not valid' , but OK for current Operation.).
 * INFO : API-2 | Status:Completed | Others: TODO-display page integration.
 */
function  doVerifyAccount()
{
    $encryptedReferenceURL = $_GET['ref'];
    $decryptedReferenceURL = doMcryptDecryption($encryptedReferenceURL);
    $pieces = explode(VERIFICATION_URL_SEPERATOR, $decryptedReferenceURL);
    //printToFirePHPConsole($pieces); Tested works fine.
    if (count($pieces) == 2) {
        $email = $pieces[0];
        $userID = $pieces[1]; # We don't want this , just used for creating the Verify account link. Using ID or EMAIL we can activate users account. But here i am using Email.
        $statusAccountActivated = activateUserAccount($email);
        if ($statusAccountActivated) {
            displayPage("verify-email-success");
        } else {
            displayPage("verify-email-failed");
        }
    } else {
        displayPage("verify-email-link-not-valid");
    }
}

/**
 * API Function Performs Login Authentication of User.
 * INFO : API-3 | Status:Completed | Others: TODO-Messages integration.
 */
function doUserLogin()
{
    # Getting full contents in the current file and parsing/decoding all to JSON.
    $JSON = json_decode(file_get_contents('php://input'));
    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $JSON->nestle->key;
    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {

        # Login details Reading from JSON.
        $nestleEmailID = $JSON->nestle->email;
        $password = $JSON->nestle->password;
        $os = $JSON->nestle->os;
        $lang = $JSON->nestle->lang;


        # Save all user informations to database , When done it will send JSON Response which is success or failure.
        $userRegistrationStatus = isUserAlreadyExist($nestleEmailID);
        if ($userRegistrationStatus == true) {

            $statusOfUsersAccountActivation = isUsersAccountActivated($nestleEmailID);
            if ($statusOfUsersAccountActivation) {
                $loginValidationStatus = getUserAuthenticationStatus($nestleEmailID, $password);
                if ($loginValidationStatus == true) {
                    $json = array("key" => REQUEST_LOG_IN, "response" => RESPONSE_SUCCESS, "message" => "Login success.");
                    sendResponseToAppAndExitAPI($json);
                } else {
                    $json = array("key" => REQUEST_LOG_IN, "response" => RESPONSE_FAILED, "message" => "Login failed ! Password incorrect.");
                    sendResponseToAppAndExitAPI($json);
                }
            } else {
                $json = array("key" => REQUEST_LOG_IN, "response" => RESPONSE_PARTIALLY_SUCCESS_SHOW_MESSAGE, "message" => getMessageUserAccountNotActivated($lang));
                sendResponseToAppAndExitAPI($json);
            }


        } else {
            $json = array("key" => REQUEST_LOG_IN, "response" => RESPONSE_PARTIALLY_SUCCESS_SHOW_MESSAGE, "message" => getMessageUserNotRegsitered($lang));
            sendResponseToAppAndExitAPI($json);
        }


    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_LOG_IN, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * API Function performs Forget password action.
 * Will create a random new password , update in User info database table
 * and send the newly created password to email of user.
 * INFO : API-4 | Status:Completed | Others: TODO-Emailer integration.
 */
function doSendGeneatedPasswordToEmail()
{
    # Getting full contents in the current file and parsing/decoding all to JSON.
    $JSON = json_decode(file_get_contents('php://input'));

    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $JSON->nestle->key;

    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {

        # Login details Reading from JSON.
        $nestleEmailID = $JSON->nestle->email;
        $sentPasswordResetLinkEmailStatus = createPasswordAndSendEmail($nestleEmailID);


        if ($sentPasswordResetLinkEmailStatus == true) {
            $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_SUCCESS, "message" => "Please Login using the new password we sent to your Email.");
            sendResponseToAppAndExitAPI($json);
        } else {
            $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_FAILED, "message" => "Email send Failed.");
            sendResponseToAppAndExitAPI($json);
        }

    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * Performs Get Profile of App Users and Send all details of particular user to application.
 * Details will be based on the email id of user which sent from the app.
 * INFO : API-5 | Status:Completed.
 */
function doGetProfile()
{
    # Getting full contents in the current file and parsing/decoding all to JSON.
    $JSON = json_decode(file_get_contents('php://input'));
    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $JSON->nestle->key;
    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {
        # Login details Reading from JSON.
        $nestleEmailID = $JSON->nestle->email;
        sendUsersDetailsToApp($nestleEmailID);
    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_EDIT_PROFILE, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * Performs Adding of session of user.
 * INFO : API-7 | Status:Completed .
 */
function doAddUsersSession()
{
//    echo "here";exit;

    # Getting full contents in the current file and parsing/decoding all to JSON.
    $JSON = json_decode(file_get_contents('php://input'));
    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $JSON->nestle->key;
    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {

        # Session update details reading from JSON.
        $nestleEmailID = $JSON->nestle->email;
        $sessionType = $JSON->nestle->session_type; # this may be empty , optional field.
        # default/common request parameters. (no need) , Just for reference.
        $os = $JSON->nestle->os;
        $lang = $JSON->nestle->lang;
        # Custom  fields creation.
        $userIDofUser = getUsersIDbyEmail($nestleEmailID);


        # Get the Exact date when the Session taken place.
        if($sessionType==SESSION_FEEDBACK || $sessionType==SESSION_COACHING){
            $exactDate= $JSON->nestle->answers[5]; # Date of Session in 5
            $exactDateInTimestamp=getUnixTimestampOfExactDate($exactDate);
        }else{
            $exactDate= $JSON->nestle->answers[4]; # Date of Session in 4 in Recognition
            $exactDateInTimestamp=getUnixTimestampOfExactDate($exactDate);
        }


        # Saving details to user user_sessions, user_answers Table.
        $createdSessionID = saveUserSessionDetails($nestleEmailID, $sessionType,$exactDateInTimestamp);
        $saveStatus = saveAnswerDetails($createdSessionID, $sessionType, $JSON);




        if ($saveStatus) {
            $json = array("key" => REQUEST_UPDATE_SESSION, "response" => RESPONSE_SUCCESS, "message" => "Session details Saved.");
            sendResponseToAppAndExitAPI($json);
        } else {
            $json = array("key" => REQUEST_UPDATE_SESSION, "response" => RESPONSE_FAILED, "message" => "Session details save Failed.");
            sendResponseToAppAndExitAPI($json);
        }

    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_UPDATE_SESSION, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/*
 * @param $exactDate Date in 'date-month-year' Format. example: 14-10-2015
 * @return int|string $timestamp
 */
function getUnixTimestampOfExactDate($exactDate){
    $exactDate=$exactDate." 07:00"; # Date 3 AM in DUbai.
    $dateTime = new DateTime($exactDate);
    return $dateTime->format('U');
}


/**
 * @param $nestleEmailID
 * @param $sessionType
 * @return int
 */
function saveUserSessionDetails($nestleEmailID, $sessionType,$exactSessionTakenPlaceDate)
{
    $userID = getUsersIDbyEmail($nestleEmailID);
    $dateStamp = time();
    $query = "INSERT INTO " . TABLE_USER_SESSIONS . "(user_id,session_type_id,date,session_attended_date) VALUES($userID,$sessionType,'$dateStamp','$exactSessionTakenPlaceDate')";
    $db = getDBConnectionObject();
    $result = $db->_query($query);
    return $db->_insertid();
}

/**
 * Saving session details of user to database.
 * @param $createdSessionID
 * @param $sessionType
 * @param $JSON
 * @return bool
 */
function saveAnswerDetails($createdSessionID, $sessionType, $JSON)
{

    # Default settings.
    $i = 0;
    $detailsSavedStatus = false;
    $queryToSave = "INSERT INTO " . TABLE_USER_ANSWERS . "(user_session_id,question_id,answer) VALUES";


    # Session type Processing and creation / Hard coding of questions based on sessions.
    if ($sessionType == SESSION_FEEDBACK) {
        $IDsOfQuestions = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "15"); # Total 11 including comments(15th)
    } else if ($sessionType == SESSION_COACHING) {
        $IDsOfQuestions = array("1", "2", "3", "4", "5", "6", "7", "11", "12", "10", "15"); # Total 11 including comments(15th)
    } else if ($sessionType == SESSION_RECOGNITION) {
        $IDsOfQuestions = array("1", "2", "4", "5", "6", "7", "13", "14", "10", "15"); # Total 10 including comments(15th)
    } else {
        $json = array("key" => REQUEST_UPDATE_SESSION, "response" => RESPONSE_FAILED, "message" => "Session type Invalid.");
        sendResponseToAppAndExitAPI($json);
    }


    # looping through ID's Of Questions array.
    foreach ($IDsOfQuestions as $id) {
        $answer = $JSON->nestle->answers[$i];
        $queryToSave .= "($createdSessionID,$id,'$answer'),";
        $i++;
    }
    $queryToSave = rtrim($queryToSave, ","); # to remove last comma.


    # Executing query and returns Query Failed or Successfully completed.
    $result = getDBConnectionObject()->_query($queryToSave);
    if ($result) {
        return true;
    } else {
        return false;
    }
}


/**
 * Performs Edit Profile of App Users.
 * Details will be Edited based on the email id of user which sent from the app.
 * Storage server : beta.tdcentral.com/nido-storage-server/
 * INFO : API-6 | Status:Completed .
 */
function  doEditProfile()
{

//    print_r($_REQUEST);
//    print_r($_FILES);exit;

    # Reading API KEY from JSON to validate the API Call.
    $apiKEY = $_REQUEST['key'];
    # Validation of API Key and after Processes.
    if ($apiKEY == API_KEY) {

        $email = $_POST['email'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $password = $_POST['password'];
        $profilePicture = "unset";


        # default/common request parameters. (no need) , Just for reference.
        $os = $_POST['os'];
        $lang = $_POST['lang'];


        # Reading image File , Sending to Storage server . If not set saving profile picture as default profile picture.
        if (isset($_FILES['profile_picture'])) {
            $originalFileName = $_FILES['profile_picture']['name'];
            $profilePicture = 'imatt' . md5(date('Y-m-d-H-i-s')) . uniqid() . '.' . pathinfo($originalFileName, PATHINFO_EXTENSION); # Creation of new unique file name.
            //print_r(get_defined_vars()); Super useful :)
            sendFileToStorageServer($profilePicture);
        } else if ($_REQUEST['profile_picture_url']) { # Don't want to do Anything. User not selected any New file to be updated or Save in Server
            $imageFullURL=$_REQUEST['profile_picture_url'];
            $array=explode('/', $imageFullURL);
            $profilePicture = $array[count($array)-1];
        }


        # Updating the details to database and Giving success or failure response to app.
        $statusUserInfoSaved = updateUserInfo($email, $name, $department, $password, $profilePicture);
        if ($statusUserInfoSaved) {
            $json = array("key" => REQUEST_EDIT_PROFILE, "response" => RESPONSE_SUCCESS, "message" => "Profile details updated.");
            sendResponseToAppAndExitAPI($json);
        } else {
            $json = array("key" => REQUEST_EDIT_PROFILE, "response" => RESPONSE_FAILED, "message" => "Profile details updation Failed.");
            sendResponseToAppAndExitAPI($json);
        }
    } else {
        # Sending API Key invalid JSON Response to application.
        $json = array("key" => REQUEST_EDIT_PROFILE, "response" => RESPONSE_FAILED, "message" => "API Key invalid");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * Performs Updating the Edited user information's to database.
 * @param $email Email of user which is used as identity of user to Update all other Infos.
 * @param $name Edited / Unedited Name of user
 * @param $department Edited / Unedited Department of user
 * @param $password Edited / Unedited password of user
 * @param $profilePicture Edited / Unedited profile Picture file name of user , which is saved in storage server.
 * @return resource which has '1' as value if query success , other wise not set.
 */
function updateUserInfo($email, $name, $department, $password, $profilePicture)
{
    if ($profilePicture == "unset") {
        $query = "UPDATE " . TABLE_USER_INFO . " SET employee_name='$name',department='$department',password='$password' WHERE nestle_email_id='$email'";
    } else {
        $query = "UPDATE " . TABLE_USER_INFO . " SET employee_name='$name',department='$department',password='$password',profile_picture='$profilePicture' WHERE nestle_email_id='$email'";
    }
    $result = getDBConnectionObject()->_query($query);
    return $result;
}

/* ==================================================================================================================================================================================================================
 *                                                                                  SUB FUNCTIONS which do Database Processes.
  ================================================================================================================================================================================================================= */


/**
 * Performs activation of a user account , when the Registration done every account will be in Inactive state. Time of Email verification it will come here , and will be Active.
 * @param $email Email used as ID for Activating the user account.
 * @return bool which will return true if account activated , otherwise false.
 */
function activateUserAccount($email)
{
    $query = "UPDATE " . TABLE_USER_INFO . " SET active_status=1 WHERE nestle_email_id='$email'";
    $result = getDBConnectionObject()->_query($query); # Executing QUERY => inserting data to table
    if ($result) { # If query executed. This can be changed to $dbase_affetctedRows > 0  but it will show false when 1 raw not affected means if Query success , but no row affected.
        return true;
    } else {
        return false;
    }
}

/**
 * Performs saving of all user information's to Database when the Time of Registration.
 * @param $employeeName Employee name of a user.
 * @param $nestleEmailID NESTLE's email ID of a user.
 * @param $department  Department of user.
 * @param $password Password of user.
 * @param $os Operating system from which the app is working (ex:android/ios)
 * @param $lang Langauge from which the user is using App (ex:english/arabic)
 * @param $clientIP IP of the network from which Registration request came to server.
 * @param $clientHostName  Hostname of the network system from which Registration request came to server.
 * @param $clientPort PORT of the network from which Registration request came to server.
 * @param $deviceType Browser type from which Registration request came to server.
 * @param $dateStamp
 */
function  saveUserInfo($employeeName, $nestleEmailID, $department, $password, $os, $lang, $clientIP, $clientHostName, $clientPort, $deviceType, $dateStamp)
{
    # default Settings of User
    $defaultStatus = 0;
    # Creating Query.
    $query = "INSERT INTO " . TABLE_USER_INFO . "(employee_name,nestle_email_id,department,password,os,lang,client_ip,client_host_name,client_port,device_type,date_stamp,active_status,profile_picture) VALUES('$employeeName','$nestleEmailID','$department','$password','$os','$lang','$clientIP','$clientHostName','$clientPort','$deviceType','$dateStamp',$defaultStatus,'" . DEFAULT_PROFILE_PICTURE . "')";
    $result = getDBConnectionObject()->_query($query); # Executing QUERY => inserting data to table
    # Based on the Query execution status Sending JSON Response to Mobile Application.
    if ($result == true) {
        $newlyCreatedUserID = getDBConnectionObject()->_insertid();
        $sentVerificationEmailStatus = sendVerificationEmail($nestleEmailID, $newlyCreatedUserID);
        if ($sentVerificationEmailStatus == true) {
            $json = array("key" => REQUEST_SIGN_UP, "response" => RESPONSE_SUCCESS, "message" => "Registration completed successfully.Please Log-in to your Email account Click Verification link , and Activate your account.");
        } else {
            $json = array("key" => REQUEST_SIGN_UP, "response" => RESPONSE_FAILED, "message" => "Verification email Send Failed.");
        }
    } else {
        $json = array("key" => REQUEST_SIGN_UP, "response" => RESPONSE_FAILED, "message" => "Insert Query error", "query" => $query);
    }
    sendResponseToAppAndExitAPI($json);
}

/**
 * Performs checking whether the user is already Registered or not.
 * This will be checked when the time of a users Registration process.
 * @param $uniqueID Email of user.
 * @return bool success if User already regsitered , false if not registered.
 */
function isUserAlreadyExist($uniqueID)
{
    $userAlreadyExistsStatus = false;
    $query = "SELECT * FROM " . TABLE_USER_INFO . " where nestle_email_id = '$uniqueID'";
    $result = getDBConnectionObject()->_query($query);



    if ($row = mysql_fetch_assoc($result)) {
        $userAlreadyExistsStatus = true;
    }
    return $userAlreadyExistsStatus;
}


/**
 * Performs ID of the user from database using Email.
 * @param $nestleEmailID Email id of user.
 * @return string ID of user which is got from database.
 */
function getUsersIDbyEmail($nestleEmailID)
{
    $usersID = "unset";
    $query = "SELECT id FROM " . TABLE_USER_INFO . " where nestle_email_id = '$nestleEmailID'";
    $result = getDBConnectionObject()->_query($query);
    if ($row = mysql_fetch_assoc($result)) {
        $usersID = $row['id'];
    }
    return $usersID;
}


/**
 * Performs checking whether the users account is activated or not.
 * by checking the 'active_status' column in database we can determine whether the user's account is activated or not.
 * @param $nestleEmailID Email id of a user.
 * @return bool success if user's account activated , false if not activated.
 */
function isUsersAccountActivated($nestleEmailID)
{
    $statusUsersAccountActivation = false;
    $query = "SELECT active_status FROM " . TABLE_USER_INFO . " WHERE nestle_email_id = '$nestleEmailID' LIMIT 1";
    $result = getDBConnectionObject()->_query($query);
    if ($row = mysql_fetch_assoc($result)) {
        $status = $row['active_status'];
        if ($status == "1") {
            $statusUsersAccountActivation = true;
        }
    }
    return $statusUsersAccountActivation;
}

/**
 * @param $nestleEmailID
 * @param $password
 * @return bool
 */
function getUserAuthenticationStatus($nestleEmailID, $password)
{
    $userAuthenticationStatus = false;
    $query = "SELECT * FROM " . TABLE_USER_INFO . " WHERE LOWER(nestle_email_id) = LOWER('$nestleEmailID') AND password='$password' LIMIT 1";     # Incase insensitive Select for Username/Email only.
    $result = getDBConnectionObject()->_query($query);
    if ($row = mysql_fetch_assoc($result)) {
        $userAuthenticationStatus = true;
    }
    return $userAuthenticationStatus;
}

/**
 * @param $nestleEmailID
 */
function sendUsersDetailsToApp($nestleEmailID)
{
    $db = getDBConnectionObject();
    $query = "SELECT * FROM " . TABLE_USER_INFO . " WHERE nestle_email_id = '$nestleEmailID' LIMIT 1";
    $result = $db->_query($query);
    if ($row = mysql_fetch_assoc($result)) { # If details of user got from database

        # Reading user details
        $name = $row['employee_name'];
        $profilePicture = PATH_PROFILE_PICTURE . "/" . $row['profile_picture'];
        $department = $row['department'];
        $password = $row['password'];

        # Creating JSON and Sending JSON to app.
        $json = array("key" => REQUEST_GET_PROFILE, "response" => RESPONSE_SUCCESS,
            "message" => "User details Read Success ! Encoded as JSON.",
            "name" => $name,
            "profile_picture" => $profilePicture,
            "department" => $department,
            "password" => $password,
        );
        sendResponseToAppAndExitAPI($json);
    } else { # If no user details fetched.
        # Creating JSON and Sending Failed JSON Response to app.
        $json = array("key" => REQUEST_GET_PROFILE, "response" => RESPONSE_FAILED, "message" => "User not registered.");
        sendResponseToAppAndExitAPI($json);
    }
}

/**
 * Performs updation of new password generated in user info of user.
 * @param $nestleEmailID Email id of the user to which the password to be updated.
 * @param $generatedPassword newly generated password.
 * @return bool if update query success TRUE else FALSE.
 */
function updateNewPasswordInDB($nestleEmailID, $generatedPassword)
{
    $query = "UPDATE " . TABLE_USER_INFO . " SET password='$generatedPassword' WHERE nestle_email_id='$nestleEmailID'";
    $db = getDBConnectionObject();
    $result = $db->_query($query);
    if ($db->_affectedrows() > 0) {
        return true;
    } else {
        return false;
    }
}

/* ==================================================================================================================================================================================================================
 *                                                                                      SUB FUNCTIONS of process functions.
  ================================================================================================================================================================================================================= */

/**
 * Saving values in Session with a Label/Key for each of them.
 */
function saveInSession($key, $value)
{
    $_SESSION[$key] = $value;
}

/**
 * @param $newUniqueFileName
 */
function  sendFileToStorageServer($newUniqueFileName)
{
    //return;
    // This will work in nido server , so no problem. bcz of version only this is not working from beta.tdcentral server.
    // Some times it will not work to beta.tdcentral , in that case i have to change this to beta.thampydigital storgae-server
    // let me try that now.

    /**
     * CURL Versions and Configs.
     * PHP Version 5.4.45 - "filedata" => curl_file_create($tmpfile, $_FILES['profile_picture']['type'], $filename) will not work.
     * PHP Version above 5 above statement will work.
     * So in Version 5.4.45 what we will do is  "filedata" => '@' .$tmpfile,
     */


    $STORAGE_SERVER_URL = STORAGE_SERVER;

    $filename = $_FILES['profile_picture']['name'];
    $tmpfile = $_FILES['profile_picture']['tmp_name'];
    $filesize = $_FILES['profile_picture']['size'];

    $headers = array("Content-Type:multipart/form-data"); // cURL headers for file uploading
    $postfields = array(
        "filedata" => curl_file_create($tmpfile, $_FILES['profile_picture']['type'], $filename),
        "filename" => $filename,
        "unique_file_name" => $newUniqueFileName,
        "act" => "imatter_profile_picture_upload"
    );


    $ch = curl_init();
    $options = array(
        CURLOPT_URL => $STORAGE_SERVER_URL,
        CURLOPT_HEADER => true,
        CURLOPT_POST => 1,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => $postfields,
        CURLOPT_INFILESIZE => $filesize,
        CURLOPT_RETURNTRANSFER => true,
        CURLINFO_HEADER_OUT => true, # Request header
        CURLOPT_SSL_VERIFYPEER => false, # Don't verify server certificate
    ); // cURL options
    curl_setopt_array($ch, $options);
    if (curl_exec($ch) === FALSE) {
        die("Curl Failed: " . curl_error($ch));
    }

    /*else { Debugging section (not needed now).
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200) {
            $resultFromServer = curl_exec($ch);
            print("Result from server:".$resultFromServer);
            $msg = "File uploaded successfully";
            echo $msg;
        }
    }*/
}

/**
     * Function used to get Random passwords.
 * Can be improved.
 * @param $length length of the password to be generated.
 * @return string generated random password.
 */
function getRandomPassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars), 0, $length);
}

/**
 * Sent Email to user with the new generated password.
 * @param $nestleEmailID Email of the user which new password generated.
 * @return bool whether the Email sent to user or not.
 */
function createPasswordAndSendEmail($nestleEmailID)
{
    $generatedPassword = getRandomPassword(16);
    $status = send_generated_password_mail($nestleEmailID, $generatedPassword);
    if ($status) {
        $statusUserInfoUpdate = updateNewPasswordInDB($nestleEmailID, $generatedPassword);
        if ($statusUserInfoUpdate == true) {
            $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_SUCCESS, "message" => "Please Login with the new password sent to your Email account.");
            sendResponseToAppAndExitAPI($json);
        } else {
            $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_FAILED, "message" => "Database update Failed , Query error.");
            sendResponseToAppAndExitAPI($json);
        }
    } else {
        $json = array("key" => REQUEST_FORGOT_PASSWORD, "response" => RESPONSE_FAILED, "message" => "Email send Failed.");
        sendResponseToAppAndExitAPI($json);
    }
    return true;
}


/**
 * @param $nestleEmailID
 * @return bool
 * Performs send Verfication URL to users's Registered Email account.
 * When user clicks on the Verification link , his/her account will be activated.
 */
function sendVerificationEmail($nestleEmailID, $idOfUser)
{
    $status = false;
    $verificationURL = DASHBOARD . "api.cgi?act=verify-account" . "&ref=" . urlencode(doMCryptEncryption($nestleEmailID . VERIFICATION_URL_SEPERATOR . $idOfUser));
    $status = send_verification_link_mail($nestleEmailID, $verificationURL);
    return $status;
}

/**
 * @param $json
 */
function sendResponseToAppAndExitAPI($json)
{
    sendJSONResponse($json);
    exit;
}

/* ==================================================================================================================================================================================================================
 *                                                                                      SUB FUNCTIONS Used for Encryption and Decryption
  ================================================================================================================================================================================================================= */
/**
 * @param $data
 * @return string
 */
function doMCryptEncryption($data)
{
    $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $data, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
    return ($qEncoded);
}

/**
 * @param $data
 * @return string
 */
function doMcryptDecryption($data)
{
    $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($data), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
    return ($qDecoded);
}

/* ==================================================================================================================================================================================================================
 *                                                                  SUB FUNCTIONS Used for  Messages display to user from Web / App
  ================================================================================================================================================================================================================= */
/**
 * @param $lang
 * @return string
 */
function getMessageUserAlreadyRegsitered($lang)
{
    $msg = "";
    if ($lang == "en") { # If language is English DO THIS
        $msg = "User already registered";
    } else if ($lang == "ar") { # If language is Arabic DO THIS
        $msg = "(Arabic language)User already registered";
    }
    return $msg;
}

/**
 * @param $lang
 * @return string
 */
function getMessageUserNotRegsitered($lang)
{
    $msg = "";
    if ($lang == "en") { # If language is English DO THIS
        $msg = "User not registered";
    } else if ($lang == "ar") { # If language is Arabic DO THIS
        $msg = "(Arabic language)User not registered";
    }
    return $msg;
}

/**
 * @param $lang
 * @return string
 */
function getMessageUserAccountNotActivated($lang)
{
    $msg = "";
    if ($lang == "en") { # If language is English DO THIS
        $msg = "Login Failed ! account not activated.";
    } else if ($lang == "ar") { # If language is Arabic DO THIS
        $msg = "(Arabic language)Login Failed ! account not activated.";
    }
    return $msg;
}

/**
 * @param $page
 */
function displayPage($page)
{
    switch ($page) {
        case "verify-email-success":
            echo "Accout activated ! Thank you.";
            break;
        case "verify-email-failed":
            echo "Accout activattion Failed";
            break;
        case "verify-email-link-not-valid":
            echo "Accout activattion Failed , Link not valid.";
            break;
        default:
            echo "Came to Default case - not went to any page.";
            break;
    }
}

/* ==================================================================================================================================================================================================================
 *                                                                                   SWITCH CASE Which control all the Processes.
  =================================================================================================================================================================================================================== */

#Debugging of Request.
//showFullRequestAndExit();

/**
 * Switch function which controls all the Process in this Page.
 * $_GET['act'] will have the current process which need to be executed.
 */
switch ($_GET['act']) {
    case REQUEST_TEST_API:
        doTestAPI();
        break;
    case REQUEST_TEST_EMAIL:
        doTestSendEmail();
        break;
    case REQUEST_SHOW_PHP_INFO:
        doShowPHPInfo();
        break;
    case REQUEST_LOG_IN:
        doUserLogin();
        break;
    case REQUEST_SIGN_UP:
        doSignUP();
        break;
    case REQUEST_VERIFY_ACCOUNT:
        doVerifyAccount();
        break;
    case REQUEST_FORGOT_PASSWORD:
        doSendGeneatedPasswordToEmail();
        break;
    case REQUEST_EDIT_PROFILE:
        doEditProfile();
        break;
    case REQUEST_GET_PROFILE:
        doGetProfile();
        break;
    case REQUEST_UPDATE_SESSION:
        doAddUsersSession();
        break;
    default:
        doEditProfile();
        break;
}
exit;

/* ==================================================================================================================================================================================================================
                     *                                                                                  OTHERS
  ===================================================================================================================================================================================================================*/

/**
 * Performs Testing of API.
 * Which can be used when any redirection error Problem happens.
 */
function  doTestAPI()
{
    $messageString = "Success : API works fine ! <br><span style='color: darkgreen'>Remember 'API KEY' Should be integrated for Other Requests !</span>";
    echo $messageString;
    exit;
}


/**
 * Performs Testing of Email Functionality ( Sendmail / SMTP Emailing Services )
 * Which can be used when any Emailing issues happens.
 */
function doTestSendEmail()
{
    //------------------------------------------------------------------------------------------
    // $emailToTest="dilvinriyo@gmail.com"; //Gone to SPAM
    $emailToTest = "dilvinriyo.personal@gmail.com"; // Gone to promotion / Inbox.
    // $emailToTest="riyodilvin@yahoo.com"; // Gone to Inbox.
    // $emailToTest="dilvinriyo@outlook.com"; // Went to Junk
    // $emailToTest="vinodpossible@yahoo.com";
    //------------------------------------------------------------------------------------------
    sendTestEmail($emailToTest);
}

/**
 * Performs Showing of All configs in Server.
 * Which can be used when version issues happens
 * Ex issues : Curl , File save.
 */
function  doShowPHPInfo()
{
    echo phpinfo();
}


?>
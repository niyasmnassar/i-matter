<?//<?php

// Start the session

//session_start();

//session_destroy();

?>





<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>imatter</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">

<link rel="stylesheet" type="text/css" href="../css/jquery-ui.custom.css">

<link rel="stylesheet" type="text/css" href="../css/style.css">

<script src="../js/jquery-1.10.2.js"></script>

<script src="../js/jquery-ui-1.10.4.js"></script>

<script src="../js/modernizr.custom.min.js"></script>

<script src="../js/bootstrap.min.js"></script>

<!-- <script src="../js/jquery.validate.js" type="text/javascript"></script> -->



<!--[if lt IE 9]>

<link rel="stylesheet" type="text/css" href="../css/ie8.css">

<script src="../js/ie.js"></script>

<![endif]-->



</head>

<body>

<section class="outer-wrapper clearfix">

    <header class="header-login">



    <!-- mobile header session -->



      <nav class="mobile">

           <a class="brand-logo pull-left" href="#">

              <img class="img-responsive" src="../images/logo.png">

           </a>

           <div class="nav-login-area pull-right">

                <!-- <ul>

                    <li class="signOut"><a href="index.html">Sign Out</a></li>

                </ul> -->

           </div> 

      </nav>



      <!-- mobile header session -->



      <nav class="navbar navbar-inverse">

        <div class="container">

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

              <span class="sr-only">Toggle Navigation</span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand navlogin" href="#">

               <img class="img-responsive" src="../images/logo.png">

            </a>

          </div>

          <!-- <div id="navbar" class="collapse navbar-collapse navbar-right">

            <div class="nav-login-area">

          

            </div> 

            <ul class="nav navbar-nav">

              <li class="star">

              <a href="star-model.php">STAR Model</a>

              </li>

              <li class="grow">

              <a href="grow-model.php">GROW Model</a>

              </li>

              <li class="nlf">

              <a href="nlf-model.php">NLF Model</a>

              </li>

              <li class="profile">

              <a href="profile.php">Profile</a>

              </li>

            </ul>

          </div> -->

          <!--/.nav-collapse -->

        </div>

      </nav>

    </header>



    <!-- content goes to this session -->

    <section class="info-mid-area cleaefix">

         <div class="home-page">

             <div class="container full-height">

                 <div class="row full-height">

                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full-height pos-rel">

                         <div class="user-log">

                             

                             <div id="tabs">

                                  <ul>

                                    <li><a href="#tabs-1">Sign In</a></li>

                                    <li><a href="#tabs-2">Sign Up</a></li>

                                  </ul>

                                  <div id="tabs-1">

                                      <div class="login">

                                      <form method="post" id="login">

                                      <div class="emailr"></div>

                                      <input class="custom-form-login" id="lemail" name="email" placeholder="Nestlé Email ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nestlé Email ID'">

                                      <div class="passwordr"></div>

                                      <input class="custom-form-login" type="password" id="upassword" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">

                                      <button type="button" class="login-submit" value="Login"></button>

                                      </form>

                                      <div class="forgot-session clearfix">

                                      <a class="forget-pass" href="#" data-toggle="modal" data-target=".for-pass">Forgot Password ?</a>

                                      </div>

                                      </div>

                                  </div>

                                  <div id="tabs-2">

                                      <div class="signup">

                                          <form class="cmxform" id="signupForm" method="post">

                                          <div class="emailf"></div>

                                          <input class="custom-form-login" type="text" id="semail" name="email" placeholder="Nestlé Email ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nestlé Email ID'">

                                          <div class="userf"></div>

                                          <input class="custom-form-login" type="text" id="suser" name="user" placeholder="Employee Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Employee Name'">

                                          <div class="department"></div>

                                          <input class="custom-form-login" type="text" id="sdepartment" name="department" placeholder="Department" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Department'">

                                          <div class="password"></div>

                                          <input class="custom-form-login" type="password" id="spassword" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">

                                          <div class="re_password"></div>

                                          <input class="custom-form-login" type="password" id="sre_password" name="password" placeholder="Re-enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Re-enter password'">

                                          <button type="button" value="" class="log-submit" value="submit here"></button>

                                          <button class="cancel" type="reset" value="reset">Cancel</button>

                                          </form>

                                          

                                      </div>

                                  </div> 

                             </div>                           

                         </div> 

                     </div>

                 </div>    

             </div>

         </div>

    </section>











    <div class="modal fade bs-example-modal-sm for-pass" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">

        <div class="modal-dialog modal-sm res-pop">

          <div class="modal-content">

               <div class="forget-pop">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                           <span aria-hidden="true">×</span>

                    </button>

                    <div class="back-button">

                      <a href="">Back</a>

                    </div>

                    <h3>Forgot Password</h3>

                    <form>

                    <div class="emailfor"></div>

                    <input class="forgot-txt" type="text" name="email" id="forgot-mail" placeholder="Please enter your Email ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your Email ID'"/>

                    <button class="forgot-btn" type="button">Send</button>

                    </form>

               </div> 

          </div>

        </div>

    </div>































    <!-- SIGNUP Completed -->

    <!-- Success -200 Message API-1(sign-up)  -->

    <div id="signup-200" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Registration Success</h4> 

          </div>

          <p>

             Please click on your verification link we sent to your Email to activate account!

          </p>

        </div>

      </div>

      </div>



      <!-- Failed -201 Message  API-1(sign-up) -->

      <div id="signup-201" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Registration Failed</h4>

          </div>

          <p>

            User already Registered!

          </p>

        </div>

      </div>

      </div>



      <!-- Failed -501 API-1(sign-up) -->

      <div id="signup-501" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Registration Failed</h4> 

          </div>

          <p>

              Password Does not match Nestle password Policy Criteria! (Info: Atleast 1 Capital, 1 Small, 1 Numeric, 1 Special character Must be there, and The length should be between 6 and 16)

          </p>

        </div>

      </div>

      </div>



    <!-- Failed -500 Message  API-1(sign-up) -->

    <div id="signup-500" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Registration Failed</h4>

                </div>

                <p>

                    Please Try Again!

                </p>

            </div>

        </div>

    </div>

    <!-- SIGNUP Completed -->











    <!-- LOGIN Completed -->

    <!-- Failed -500 API-3(log-in) -->

    <div id="login-201" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Login</h4>

                </div>

                <p>

                    User not Registered !

                </p>

            </div>

        </div>

    </div>

    <div id="login-202" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Login</h4>

                </div>

                <p>

                    User Account not activated !

                </p>

            </div>

        </div>

    </div>

    <div id="login-501" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Login</h4>

                </div>

                <p>

                    Your account is Either Deleted or Suspended , Please contact Admin for Further Updates!

                </p>

            </div>

        </div>

    </div>

    <div id="lFailed" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Login</h4>

                </div>

                <p>

                    Login Failed, Username or Passowrd Wrong!

                </p>

            </div>

        </div>

    </div>

    <!-- LOGIN Completed -->















    <!-- FORGOT PASSWORD Completed -->

    <div id="forgot-password-200" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Forgot Password</h4>

                </div>

                <p>

                    Please Follow the link we sent to your Email account to Reset the Password!

                </p>

            </div>

        </div>

    </div>

    <div id="forgot-password-501" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Forgot Password</h4>

                </div>

                <p>

                    Your account is Either Deleted or Suspended , Please contact Admin for Further Updates!

                </p>

            </div>

        </div>

    </div>

    <div id="forgot-password-500" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Forgot Password</h4>

                </div>

                <p>

                    Something went wrong! Please Try Again !

                </p>

            </div>

        </div>

    </div>

    <div id="forgot-password-502" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-sm alrt">

            <div class="modal-content alert-box">

                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <h4 class="modal-title">Forgot Password</h4>

                </div>

                <p>

                    User not Registered!

                </p>

            </div>

        </div>

    </div>

    <!-- FORGOT PASSWORD Completed -->



















    <!-- content session end here -->



    <!-- <footer>

      <div class="container">

          <ul>

          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p></li>

          <li><img class="img-responsive" src="../images/footer-logo.png"></li>

          </ul>

      </div>

    </footer> -->

</section>

<script type="text/javascript">

  $(document).ready(function(){

      $( "#tabs" ).tabs();    

  });



  if($(window).width()<768){

        h=$(window).height();

        h= (h<500)?500:h;

        $('.home-page').height(h);

    };

 

 



</script>

<script>



$(document).ready(function() {















/*sign up validation*/

$(".log-submit").click(function(){

  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  var nCheck = "nestle";

  var mEmail = $("#semail").val();

  $(".emailf").hide();

  $(".userf").hide();

  $(".depart").hide();

  if( $("#semail").val() == "" ) {

    $(".emailf").fadeIn();

    $(".emailf").html("Please enter your email!");

  } else if(!emailReg.test( $("#semail").val())) {

    $(".emailf").fadeIn();

    $(".emailf").html("Please enter a valid email id!");

  } else if(mEmail.search(nCheck) == -1) {

    $(".emailf").fadeIn();

    $(".emailf").html("please enter a nestle email id!");

  } else if( $("#suser").val() == "" ) {

    $(".userf").fadeIn();

    $(".userf").html("Please enter your username!");

  } else if( $("#sdepartment").val() == "" ) {

    $(".depart").fadeIn();

    $(".depart").html("Please enter your department!");

  } else if( $("#spassword").val() == "" ) {

    alert("Please enter your password!");

  } else if( $("#sre_password").val() == "" ) {

    alert("Please re-enter your password!");

  } else {

    doRegisterUser($("#semail").val(),$("#suser").val(), $("#sdepartment").val(),$("#spassword").val());

  }

});















/*sign in validation*/

    $(".login-submit").click(function(){

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var nCheck = "nestle";

        var lEmail = $("#lemail").val();

        $(".emailr").hide();

        $(".passwordr").hide();



        /*

        if( $("#lemail").val() == "" ) {

         $(".emailr").fadeIn();

         $(".emailr").html("Please enter your email!");

         } else if(!emailReg.test( $("#lemail").val())) {

         $(".emailr").fadeIn();

         $(".emailr").html("Please enter a valid email!");

         } else if(lEmail.search(nCheck) == -1) {

         $(".emailr").fadeIn();

         $(".emailr").html("Please enter a nestle email id!");

         } else if( $("#upassword").val() == "" ) {

         $(".passwordr").fadeIn();

         $(".passwordr").html("Please enter your password!");

         }

         else{  // All Data's are Valid, Ready for Login form Submission

         console.log("All Data's are Valid, Ready for Login form Submission");*/

        doLogin(lEmail,$("#upassword").val());

        //}

});













/* forgot password */

    $(".forgot-btn").click(function(){

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        var nCheck = "nestle";

        var mEmail = $("#forgot-mail").val();

        /*if( $("#forgot-mail").val() == "" ) {

         $(".emailfor").fadeIn();

         $(".emailfor").html("Please enter your email!");

         } else if (!emailReg.test( $("#forgot-mail").val())) {

         $(".emailfor").fadeIn();

         $(".emailfor").html("Please enter a valid email address!");

         }else if(mEmail.search(nCheck) == -1) {

         $(".emailfor").fadeIn();

         $(".emailfor").html("please enter a nestle email id!");

         } else {*/

        doForgotPassword($("#forgot-mail").val());

        $(".emailfor").fadeOut();

        $(".for-pass").modal("hide");

        //}

});

































    /* ====================================================================================================================================================================

                                                            Web services / API's Calling

     **********************************************************************************************************************************************************************/



/**

 * API-1

 * INFO : Status : Completed |

 * */

function doRegisterUser(email,name, department,password){



                var jsonData = {

                              key: "4a742fb6608414c8cbd11a6b80d91885f02f2550",

                              name:name,

                              email:email,

                              department: department,

                              password:password,

                              os: "website",

                              lang:"en"

                 };



                $.ajax({

                        cache: false,

                        type: "post",

                        url: "../../../dashboard/api.cgi?act=sign-up",

                        dataType: "json",

                        data: JSON.stringify({ nestle: jsonData }),

                        success: function (response) {

                            console.log(response);

                            if (response.response == "200") {

                                $("#signup-200").modal("show");

                            }else if(response.response == "201"){

                               $("#signup-201").modal("show");

                            }else if(response.response == "501"){

                                $("#signup-501").modal("show");

                            }else{

                                $("#signup-500").modal("show");

                            }

                        }

                  });

}







/**

 * API-3

* INFO : Status : Completed |

* */

function  doLogin(email,password){

            var jsonData =  {

                              key: "4a742fb6608414c8cbd11a6b80d91885f02f2550",

                              email:email,

                              password:password,

                              os: "website",

                              lang:"en"

                    };

            $.ajax ({

                        cache: false,

                        type: "post",

                        url: "../../../dashboard/api.cgi?act=log-in",

                        dataType: "json",

                        data: JSON.stringify({ nestle: jsonData }),

                        success: function (response) {

                            if (response.response == "200") {

                                goToHomePage(email);

                            }

                            else if (response.response == "201") {

                                $("#login-201").modal("show");

                            }

                            else if (response.response == "202") {

                                $("#login-202").modal("show");

                            }

                            else if (response.response == "501") {

                                $("#login-501").modal("show");

                            }

                            else{

                               $("#login-500").modal("show");

                            }



                        }

              });

 }









/**

* API-4

* INFO : Status : Completed |

* */

function  doForgotPassword(email){



        var jsonData =  {

            key: "4a742fb6608414c8cbd11a6b80d91885f02f2550",

            email:email,

            os: "website",

            lang:"en"

        };



        $.ajax({

            cache: false,

            type: "post",

            url: "../../../dashboard/api.cgi?act=forgot-password",

            dataType: "json",

            data: JSON.stringify({ nestle: jsonData }),

            success: function (response) {

                console.log(response);

                if (response.response == "200") {

                    $("#forgot-password-200").modal("show");

                }else if (response.response == "501") {

                    $("#forgot-password-501").modal("show");

                }

                else if (response.response == "502") {

                    $("#forgot-password-502").modal("show");

                }

                else{

                    $("#forgot-password-500").modal("show");

                }

            }

        });

}

























 function goToHomePage(email){

  //set email hidden input 1

  $('input[name="email"]').val(email);

  //submit form using jquery 2

  $("#form_submission").submit()

 }



































  

});



// Custom Javascripts

// global variables

// function windowFit(){

//   var windowHeight = $(window).height();

//   var headerHeight = $("header").height() + 20;

//   $(".info-mid-area, .pos-rel").height(windowHeight - headerHeight);

// }

// windowFit();

// $(window).resize(function(){

//   windowFit();

// })

function windowFit(){

  var windowHeight = $(window).height();

  var headerHeight = $("header").height() + 20;

  $(".info-mid-area, .pos-rel").height(windowHeight - headerHeight);

}



if ($(window).width()>767) {

  windowFit();

}else{

  

}



$(window).resize(function(){

  if ($(window).width()>767) {

    windowFit();

  }else{

    

  }

})

</script>











<!-- Submission Form -->

<form action="welcome.php" id="form_submission" method="POST">

  <input type="hidden" name="email" id="email" value=""></input>

</form>











</body>

</html>


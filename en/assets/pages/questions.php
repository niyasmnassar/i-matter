<?php



session_start();

if(!isset($_SESSION['email'])){

  echo "here";

  header("Location: index.php");exit;

}



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

<link rel="stylesheet" type="text/css" href="../css/font.css">

<link rel="stylesheet" type="text/css" href="../css/slick.css"/>

<link rel="stylesheet" type="text/css" href="../css/slick-theme.css"/>

<link rel="stylesheet" type="text/css" href="../css/build.css"/>

<link rel="stylesheet" type="text/css" href="../css/date-picker.css"/>

<style type="text/css">

.s-cus-bul {padding:0px;margin:0px;display: table;table-layout: fixed;width: 100%;}

.s-cus-bul li{display:table-cell;}

.s-cus-bul li span {border-radius: 50%;width:20px;height: 20px;background: #000;}

</style>

<script src="../js/jquery-1.10.2.js"></script>

<script src="../js/jquery-ui-1.10.4.js"></script>

<script src="../js/modernizr.custom.min.js"></script>

<script src="../js/easy-responsive-tabs.js"></script>

<script src="../js/jquery-rating.js"></script>

<script src="../js/bootstrap.min.js"></script>

<!--[if lt IE 9]>

<link rel="stylesheet" type="text/css" href="../css/ie8.css">

<script src="../js/ie.js"></script>

<![endif]-->



</head>

<body>

<section class="outer-wrapper clearfix">

    <header>

      <!-- mobile header session -->



      <nav class="mobile">

           <a class="brand-logo pull-left home-bt" href="welcome.php">

              <img class="img-responsive" src="../images/logo.png">

           </a>

           <div class="nav-login-area pull-right">

                <ul>

                    <li class="signOut"><a href="session_destroy.php">Sign Out<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>

                </ul>

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

            <a class="navbar-brand" href="welcome.php">

               <img class="img-responsive" src="../images/logo.png">

            </a>

          </div>

          <div id="navbar" class="collapse navbar-collapse navbar-right">

            <div class="nav-login-area">

               <ul>

                   <li class="signOut">

                   <a href="session_destroy.php">Sign Out<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

                   </li>

               </ul>

            </div> 

            <ul class="nav navbar-nav">

              <li class="home-bt">

                <a href="welcome.php">Home</a>

              </li>

              <li class="star">

              <a href="star-model.php" target="_blank">STAR Model</a>

              </li>

              <li class="grow">

              <a href="grow-model.php" target="_blank">GROW Model</a>

              </li>

              <li class="nlf">

              <a href="nlf-model.php" target="_blank">NLF Model</a>

              </li>

              <li class="profile">

              <a href="profile.php" target="_blank">Profile</a>

              </li>

            </ul>

          </div><!--/.nav-collapse -->

        </div>

      </nav>

    </header>



    <!-- content goes to this session -->

    <section class="info-mid-area clearfix">

  

                    <div class="inner-page qstn-blk text-center main-session full-height">

                        <div class="container pos-rel"> 

                            <div class="row qus-page-middle">

                            <h2 class="text-center">What type of session did you engage in today?</h2>



                            <div class="table sessions">



                            <div class="qst-blks col-3 clearfix">

                                <div class="img-block">

                                <img class="img-responsive" src="../images/feedback-vector.png">

                                </div>

                                <p>Feedback</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" name="optionsRadiosFeed" id="optionfeedback" value="1">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-3 clearfix">

                                <div class="img-block">

                                <img class="img-responsive" src="../images/coaching-vector.png">

                                </div>

                                <p>Coaching</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadiosCoach" id="optionsRadios2" value="2">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-3 clearfix">

                                <div class="img-block">

                                <img class="img-responsive" src="../images/recognition-vector.png">

                                </div>

                                <p>Recognition</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadiosRecognition" id="optionsRadios3" value="3">

                                        <label></label>

                                  </div>

                            </div>

							

							

							

							



                            </div>





                        </div>

                    </div>

                  </div>







    <!-- feedback slider start here -->



          <div class="question-slide feedback">

               

                <!-- slider one end here -->



               <div class="qstn session2">



                   <div class="inner-page qstn-blk text-center">

                      <div class="container"> 

                        <div class="back-button pull-left"><a class="link-back" href="questions.php">Back</a></div>

                        <div class="table qus-page-middle">

                          <h2 class="text-center">With whom?</h2>

                          <div class="qst-blks col-3 m-top clearfix">

                              <p>Line Manager</p>

                              <div class="radio radio-info radio-inline">

                                <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="Line Manager">

                                <label></label>

                              </div>

                          </div>

                          <div class="qst-blks col-3 m-top clearfix">

                              <p>Direct Report</p>

                              <div class="radio radio-info radio-inline">        

                                <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="Direct Report">

                                <label></label>

                              </div>

                          </div>



                          <div class="qst-blks col-3 m-top clearfix"> 

                            <p>Colleague</p>

                            <div class="radio radio-info radio-inline">    

                                  <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="Colleague">

                                  <label></label>

                            </div>

                          </div>

                        </div>

                      </div>

                  </div>

               </div>

                <!-- slider two end here -->

               <div class="qstn session3">

                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left"><button class="pp2">Back</button></div>

                            

                            <div class="table qus-page-middle">

                              <h2 class="text-center">Which department?</h2>

                              <div class="qst-blks col-5 clearfix">



                                  <p>Sales</p>



                                    <div class="radio radio-info radio-inline">

                                          <input type="radio" name="optionsRadios3" id="optionsRadios1" value="Sales">

                                          <label></label>

                                    </div>



                              </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>CCSD</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="CCSD">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>A &amp; P</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="A &amp; P">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>SC</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="SC">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>NP</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="NP">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>Medical team</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Medical team">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>FICO</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="FICO">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>HR</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="HR">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>IT</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="IT">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>Others</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Others">

                                        <label></label>

                                  </div>

                            </div>



                            </div>



                      

                    </div>

                  </div>

                 

               </div>



                <!-- slider three end here -->



                <div class="qstn session4">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Who asked for it?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Myself</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Myself">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>Him / Her</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Him / Her">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



                    

                        </div>

                    </div>           





                </div>



                <!-- slider four end here -->



                <div class="qstn session5">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 



                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                       

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Where you the Giver of the Receiver?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Giver</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Giver">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>Receiver</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Receiver">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



                           

                        </div>

                    </div>           





                </div>



                <!-- slider five end here -->



                <div class="qstn session6">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Was it Planned or Spontaneous?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Planned</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="Planned">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>Spontaneous</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="Spontaneous">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



          

                        </div>

                    </div>           





                </div>



                <!-- slider six end here -->



                <div class="qstn session7">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">When was the date of the session?</h2>

                                     <div class="qst-blks m-top">



                                         <div class="pick-date">

                                         <span>DD</span>-<span>MM</span>-<span>YYYY</span>

                                         <input type="text" id="datepicker">

                                         </div>

                                         <button class="continue-plain">CONTINUE</button>   

                                     </div>

                                </div>



                        </div>

                    </div>           





                </div>



                <!-- slider seven end here -->





                <div class="qstn session8">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">What was the duration of the session?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>< 1 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="< 1 min">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>1 -10 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="1 -10 min">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-5 m-top">

                                          <p>10 - 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="10 - 30 min">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-5 m-top">

                                          <p>> 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="> 30 min">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



                        </div>

                    </div>           





                </div>



                <!-- slider eight end here -->





                <div class="qstn session9">



                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                            </div>

                            



                            <div class="table qus-page-middle">

                              <h2 class="text-center">The feedback was related to an act that took place</h2>

                            <div class="qst-blks col-4 m-top clearfix">



                                <p>Today</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" name="optionsRadios9" id="optionsRadios1" value="Today">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-4 m-top clearfix">

                                

                                <p>In the past week</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadios9" id="optionsRadios2" value="In the past week">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 m-top clearfix">

                                

                                <p>In the past month</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="In the past month">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 m-top clearfix">

                                

                                <p>Long time ago</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Long time ago">

                                        <label></label>

                                  </div>

                            </div>



                            



                            



                            

                            



                            



                            </div>



                        

                    </div>

                  </div>

                 

               </div>



                <!-- slider nine end here -->





                <div class="qstn session10">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Was the feedback you recieved/gave specific ?</h2>

                                     

                                     







                                     <div class="qst-blks col-5 m-top">

                                          <p>Yes</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Yes">

                                                <label></label>

                                          </div>

                                          



                                     </div>



                                     <div class="qst-blks col-5 m-top">

                                         <p>No</p>

                                         <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="No">

                                                <label></label>

                                          </div>

                                          

                                          

                                     </div>



                                   



                                </div>



                           

                        </div>

                    </div>           





                </div>



                <!-- slider ten end here -->



                <div class="qstn session11">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

								 

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley1.png">

                                          </div>

                                          <p>Exceeded expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Exceeded expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley2.png">

                                          </div>

                                          <p><span>Met</span> expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Met expectations">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley3.png">

                                          </div>

                                          <p>Somewhat met expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Somewhat met expectations">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley4.png">

                                          </div>

                                          <p>Did not meet expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Did not meet expectations">

                                                <label></label>

                                          </div>

                                     </div>

									<!--<div class="pull-right">

										<button class="pp2">Submit</button>

									</div>-->



                                </div>



                             

                        </div>

                    </div>           





                </div>



                <!-- slider eleven end here --> 





                <div class="qstn recog-session11">



                    <div class="inner-page comment-session">

			             <div class="container">

			                 <div class="row">



			                     	<div class="back-button pull-left">

			                               <button class="pp2">Back</button>

			                        </div>



                                <div class="table qus-page-middle">

				                    <div class="col-md-6 col-md-offset-3 col-xs-12">



				                          <div class="comments">

				                              <h3>Comments <span>(optional)</span></h3>

				                              <fieldset class="form-group">

				                                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Write here.."></textarea>

				                              </fieldset>

											  <!--<div class="error-code"></div>-->

				                              <button type="submit" class="submit review-submit" value="submit" id="">SUBMIT REVIEW NOW</button>



				                          </div>

				                    </div>

			                    </div>



			                 </div>    

			             </div>

                    </div>



                </div>

              

                <!-- slider twelve end here --> 





              

          </div>



    <!-- coaching slider start here -->      

       <div class="question-slide coaching">

                <!-- slider one end here -->

              <div class="qstn coach-session1">

                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <a class="link-back" href="questions.php">Back</a>

                            </div>

                            



                            <div class="table qus-page-middle">

                              <h2 class="text-center">With whom?</h2>



                            <div class="qst-blks col-3 m-top clearfix">



                                <p>Line Manager</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="Line Manager">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-3 m-top clearfix">

                                

                                <p>Direct Report</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="Direct Report">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-3 m-top clearfix">

                                

                                <p>Colleague</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="Colleague">

                                        <label></label>

                                  </div>

                            </div>



                            </div>



                        

                    </div>

                  </div>

      </div>

<!-- slider two end here -->

               <div class="qstn coach-session2">

                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                            </div>

                            

                            <div class="table qus-page-middle">

                              <h2 class="text-center">Which department?</h2>

                            <div class="qst-blks col-5 clearfix">

                                <p>Sales</p>

                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="Sales">

                                        <label></label>

                                  </div>

                            </div>

                            <div class="qst-blks col-5 clearfix">

                                <p>CCSD</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="CCSD">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>A &amp; P</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="A &amp; P">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>SC</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="SC">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>NP</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="NP">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>Medical team</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Medical team">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>FICO</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="FICO">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>HR</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="HR">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>IT</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="IT">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>Others</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Others">

                                        <label></label>

                                  </div>

                            </div>



                            </div>



                      

                    </div>

                  </div>

                 

               </div>

<!-- slider three end here -->

                <div class="qstn coach-session3">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Who asked for it?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Myself</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Myself">

                                                <label></label>

                                          </div>

                                     </div>

                                    <div class="qst-blks col-5 m-top">

                                          <p>Him / Her</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Him / Her">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>

                        </div>

                    </div>           

                </div>

                <!-- slider four end here -->

                <div class="qstn coach-session4">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Where you the Giver of the Receiver?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Giver</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Giver">

                                                <label></label>

                                          </div>

                                     </div>

                                    <div class="qst-blks col-5 m-top">

                                          <p>Receiver</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Receiver">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>                         

                        </div>

                    </div>           

                </div>

                <!-- slider five end here -->

                <div class="qstn coach-session5">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Was it Planned or Spontaneous?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>Planned</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="Planned">

                                                <label></label>

                                          </div>

                                     </div>                                    

                                    <div class="qst-blks col-5 m-top">

                                          <p>Spontaneous</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="Spontaneous">

                                                <label></label>

                                          </div>

                                    </div>

                                </div>         

                        </div>

                    </div>           

                </div>

                <!-- slider six end here -->

                <div class="qstn coach-session6">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">When was the date of the session?</h2>

                                     <div class="qst-blks m-top">

                                         <div class="pick-date">

                                         <span>DD</span>-<span>MM</span>-<span>YYYY</span>

                                         <input type="text" id="coaching-datepicker">

                                         </div>

                                         <button class="continue-plain">CONTINUE</button>   

                                     </div>

                                </div>

                        </div>

                    </div>           

                </div>

                <!-- slider seven end here -->

                <div class="qstn coach-session7">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">What was the duration of the session?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>< 1 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="< 1 min">

                                                <label></label>

                                          </div>

                                     </div>                                    

                                    <div class="qst-blks col-5 m-top">

                                          <p>1 -10 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="1 -10 min">

                                                <label></label>

                                          </div>

                                     </div>

                                     <div class="qst-blks col-5 m-top">

                                          <p>10 - 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="10 - 30 min">

                                                <label></label>

                                          </div>

                                     </div>

                                     <div class="qst-blks col-5 m-top">

                                          <p>> 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="> 30 min">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>

                        </div>

                    </div>           

                </div>

                <!-- slider eight end here -->

                <div class="qstn coach-session8">

                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                            </div>

                            

                            <div class="table qus-page-middle">

                              <h2 class="text-center">Rate the Coach's use of the GROW Model</h2>

                            <div class="col-outer-list star-blk">

							<div class="qst-blks">

                                <div class="group1">

                                    <div class="jr-ratenode jr-nomal"></div>

                                    <div class="jr-ratenode jr-nomal "></div>

                                    <div class="jr-ratenode jr-nomal "></div>

                                    <div class="jr-ratenode jr-nomal "></div>

                                    <div class="jr-ratenode jr-nomal "></div>

                                </div>

                            </div>

                            </div>   

							<button class="continue-plain coaching">CONTINUE</button>

							</div>

                    </div>

                  </div>               

               </div>

                <!-- slider nine end here -->

                <div class="qstn coach-session9">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container">                               

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Rating the Coaching skills</h2>

                                     <div class="col-outer-list star-blk">

                                     <div class="qst-blks">

                                          <div class="group2">

                                              <div class="jr-ratenode jr-nomal"></div>

                                              <div class="jr-ratenode jr-nomal "></div>

                                              <div class="jr-ratenode jr-nomal "></div>

                                              <div class="jr-ratenode jr-nomal "></div>

                                              <div class="jr-ratenode jr-nomal "></div>

                                          </div>

                                     </div>

                                     </div>

									                   <button class="continue-plain coaching">CONTINUE</button>   

                                </div>

                        </div>

                    </div>           

                </div>

                <!-- slider ten end here -->

                <div class="qstn coach-session10">

                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley1.png">

                                          </div>

                                          <p>Exceeded expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Exceeded expectations">

                                                <label></label>

                                          </div>

                                     </div>                                     

                                    <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley2.png">

                                          </div>

                                          <p><span>Met</span> expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Met expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley3.png">

                                          </div>

                                          <p>Somewhat met expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Somewhat met expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley4.png">

                                          </div>

                                          <p>Did not meet expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Did not meet expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>                           

                        </div>

                    </div>           

                </div>

                <!-- slider eleven end here --> 



                <div class="qstn recog-session11">



                    <div class="inner-page comment-session">

			             <div class="container">

			                 <div class="row">



			                     	<div class="back-button pull-left">

			                               <button class="pp2">Back</button>

			                        </div>



                                <div class="table qus-page-middle">

				                    <div class="col-md-6 col-md-offset-3 col-xs-12">



				                          <div class="comments">

				                              <h3>Comments <span>(optional)</span></h3>

				                              <fieldset class="form-group">

				                                  <textarea class="form-control" id="exampleTextareaCoaching" rows="3" placeholder="Write here.."></textarea>

				                              </fieldset>

											  <!--<div class="error-code"></div>-->

				                              <button type="submit" class="submit review-submit" value="submit" id="">SUBMIT REVIEW NOW</button>



				                          </div>

				                    </div>

			                    </div>



			                 </div>    

			             </div>

                    </div>



                </div>

              

                <!-- slider twelve end here --> 



          </div>

    <!-- recognition slider start here -->  

    <div class="question-slide recognisation">

                <!-- slider one end here -->

               <div class="qstn recog-session1">

                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <a class="link-back" href="questions.php">Back</a>

                            </div>

                            

                            <div class="table qus-page-middle">

                              <h2 class="text-center">With whom?</h2>

                            <div class="qst-blks col-3 m-top clearfix">

                               <p>Line Manager</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="Line Manager">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-3 m-top clearfix">

                                

                                <p>Direct Report</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="Direct Report">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-3 m-top clearfix">

                                

                                <p>Colleague</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="Colleague">

                                        <label></label>

                                  </div>

                            </div>



                            </div>



                        

                    </div>

                  </div>

                 

               </div>



                <!-- slider two end here -->



               <div class="qstn recog-session2">



                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                            </div>

                            



                            <div class="table qus-page-middle">

                              <h2 class="text-center">Which department?</h2>



                            <div class="qst-blks col-5 clearfix">



                                <p>Sales</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="Sales">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>CCSD</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="CCSD">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>A &amp; P</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="A &amp; P">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>SC</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="SC">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>NP</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="NP">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>Medical team</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Medical team">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>FICO</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="FICO">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>HR</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="HR">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">

                                

                                <p>IT</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="IT">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-5 clearfix">                          

                                <p>Others</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="Others">

                                        <label></label>

                                  </div>

                            </div>

                            </div>

                    </div>

                  </div>

                 

               </div>



                <!-- slider three end here -->



                <div class="qstn recog-session3">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Were you the Giver or Reciever?</h2>



                                     <div class="qst-blks col-5 m-top">

                                          <p>Giver</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Giver">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>Reciever</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="Reciever">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



                    

                        </div>

                    </div>           





                </div>



                <!-- slider four end here -->



                <div class="qstn recog-session4">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Was it Planned or Spontaneous?</h2>



                                     <div class="qst-blks col-5 m-top">

                                          <p>Planned</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Planned">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>Spontaneous</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="Spontaneous">

                                                <label></label>

                                          </div>

                                     </div>



                                </div>



          

                        </div>

                    </div>           





                </div>



                <!-- slider five end here -->



                <div class="qstn recog-session5">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">When was the date of the session?</h2>

                                     <div class="qst-blks m-top">



                                         <div class="pick-date">

                                         <span>DD</span>-<span>MM</span>-<span>YYYY</span>

                                         <input type="text" id="recog-datepicker">

                                         </div>

                                         <button class="continue-plain">CONTINUE</button>   

                                     </div>

                                </div>



                        </div>

                    </div>           





                </div>



                <!-- slider seven end here -->





                <div class="qstn recog-session6">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">What was the duration of the session?</h2>

                                     <div class="qst-blks col-5 m-top">

                                          <p>< 1 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="< 1 min">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-5 m-top">

                                          <p>1 -10 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="1 -10 min">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-5 m-top">

                                          <p>10 - 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="10 - 30 min">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-5 m-top">

                                          <p>> 30 min</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="> 30 min">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>

                        </div>

                    </div>           

                </div>



                <!-- slider eight end here -->





                <div class="qstn recog-session7">



                   <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                            <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                            </div>

                            



                            <div class="table qus-page-middle">

                              <h2 class="text-center">How was the recognition performed?</h2>

                            <div class="qst-blks col-4 clearfix">



                                <p>Private - One on One</p>



                                  <div class="radio radio-info radio-inline">

                                        <input type="radio" name="optionsRadios9" id="optionsRadios1" value="Private - One on One">

                                        <label></label>

                                  </div>



                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Private Email</p>

                                  <div class="radio radio-info radio-inline">        

                                        <input type="radio" name="optionsRadios9" id="optionsRadios2" value="Private Email">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Private - Other</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Private - Other">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Public - Email</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Public - Email">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Public - Chatter</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Public - Chatter">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Public - Meeting</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Public - Meeting">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                

                                <p>Public - Event</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Public - Event">

                                        <label></label>

                                  </div>

                            </div>



                            <div class="qst-blks col-4 clearfix">

                                <p>Public - Other</p>

                                  <div class="radio radio-info radio-inline">    

                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="Public - Other">

                                        <label></label>

                                  </div>

                            </div>

                            </div>

                    </div>

                  </div>

               </div>



                <!-- slider nine end here -->





                <div class="qstn recog-session8">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                

                                <div class="table qus-page-middle">

                                  <h2 class="text-center">The recognition was related to a?</h2>

                                     <div class="qst-blks single-col m-top">

                                          <div class="radio radio-info radio-inline pull-left">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="What ( Achievement of an object, an initiative, a target, etc. )">

                                                <label></label>

                                          </div>

                                          <p>What<span> ( Achievement of an object, an initiative, a target, etc. )</span></p>

                                     </div>

                                     <div class="qst-blks single-col lt">

                                          <p>How</p>

                                     </div>

                                     <div class="clearfix"></div>



                                     <div class="col-outer-list">



                                     <div class="qst-blks col-2">

                                          <div class="pull-left radio radio-info radio-inline yellow">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Cooperate and connect externally">

                                                <label></label>

                                          </div>

                                          <p>Cooperate and connect externally</p>

                                          <div class="pull-left radio radio-info radio-inline">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Lead to Win">

                                                <label></label>

                                          </div>

                                          <p>Lead to Win</p>

                                          <div class="pull-left radio radio-info radio-inline orange">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Manage for Results">

                                                <label></label>

                                          </div>

                                          <p>Manage for Results</p>



                                     </div>



                                     <div class="qst-blks col-2">



                                         <div class="pull-left radio radio-info radio-inline green">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Grow Talent and Team">

                                                <label></label>

                                          </div>

                                          <p>Grow Talent and Team</p>



                                          <div class="pull-left radio radio-info radio-inline purple">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Collaborate Internally">

                                                <label></label>

                                          </div>

                                          <p>Collaborate Internally</p>



                                          <div class="pull-left radio radio-info radio-inline magento">    

                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="Make a Difference">

                                                <label></label>

                                          </div>

                                          <p>Make a Difference</p>

                                          

                                     </div>



                                     </div>



                                </div>



                           

                        </div>

                    </div>           





                </div>



                <!-- slider ten end here -->



                <div class="qstn recog-session9">



                    <div class="inner-page qstn-blk full-height text-center">

                        <div class="container"> 

                                <div class="back-button pull-left">

                                <button class="pp2">Back</button>

                                </div>

                                



                                <div class="table qus-page-middle">

                                  <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley1.png">

                                          </div>

                                          <p>Exceeded expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Exceeded expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                     

                                    <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley2.png">

                                          </div>

                                          <p><span>Met</span> expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Met expectations">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley3.png">

                                          </div>

                                          <p>Somewhat met expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Somewhat met expectations">

                                                <label></label>

                                          </div>

                                     </div>



                                     <div class="qst-blks col-4 rate">

                                          <div class="img-block">

                                              <img class="img-responsive" src="../images/smiley4.png">

                                          </div>

                                          <p>Did not meet expectations</p>

                                          <div class="radio radio-info radio-inline">    

                                                <input type="radio" name="feedbackrate" id="optionsRadios3" value="Did not meet expectations">

                                                <label></label>

                                          </div>

                                     </div>

                                </div>

                        </div>

                    </div>           

                </div>

                <!-- slider eleven end here -->  





                <div class="qstn recog-session10">



                    <div class="inner-page comment-session">

			             <div class="container">

			                 <div class="row">



			                     	<div class="back-button pull-left">

			                               <button class="pp2">Back</button>

			                        </div>



                                <div class="table qus-page-middle">

				                    <div class="col-md-6 col-md-offset-3 col-xs-12">



				                          <div class="comments">

				                              <h3>Comments <span>(optional)</span></h3>

				                              <fieldset class="form-group">

				                                  <textarea class="form-control" id="exampleTextareaRecog" rows="3" placeholder="Write here.."></textarea>

				                              </fieldset>

											  <!--<div class="error-code"></div>-->

				                              <button type="submit" class="submit review-submit" value="submit" id="">SUBMIT REVIEW NOW</button>



				                          </div>

				                    </div>

			                    </div>



			                 </div>    

			             </div>

                    </div>



                </div>





          </div>    

                <!-- <div class="cBullets">

                  <ul class="s-cus-bul">

                    <li>

                      <span>1</span>

                    </li>

                    <li>

                      <span>2</span>

                    </li>

                    <li>

                      <span>3</span>

                    </li>

                    <li>

                      <span>4</span>

                    </li>

                    <li>

                      <span>5</span>

                    </li>

                  </ul>

                </div>

 -->

         <!-- slider end here -->

	

    </section>

    <!-- content session end here -->



    <!-- mobile navigation session -->



    <nav class="bottom-nav">

      

      <ul class="btm-menu">

        <li class="home active"><a href="index.php">HOME</a></li>

        <li class="star"><a href="star-model.php">STAR Model</a></li>

        <li class="grow"><a href="grow-model.php">GROW Model</a></li>

        <li class="nlf"><a href="nlf-model.php">NLF Model</a></li>

        <li class="profile"><a href="profile.php">Profile</a></li>

      </ul>



    </nav>





































    <div id="update-session-200" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Session Submission</h4>

          </div>

          <p>

                    Session Details saved Successfully !

          </p>

        </div>

      </div>

    </div>

    <div id="update-session-500" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Session Submission</h4>

          </div>

          <p>

                Session Details Save Failed !

          </p>

        </div>

      </div>

    </div>





























    <div id="ExtSession" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

      <div class="modal-dialog modal-sm alrt">

        <div class="modal-content alert-box">

          <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 

              <h4 class="modal-title">Status</h4> 

          </div>

          <p>

           Are you sure, you want to exit this session?

          </p>

          <div class="clearfix suggest">

          <a class="yes" href="welcome.php">Yes</a>

          <a class="No" data-dismiss="modal">No</a>

          </div>

        </div>

      </div>

    </div>





    <!-- mobile navigation session -->





    <!-- <footer>

      <div class="container">

          <ul>

          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p></li>

          <li><img class="img-responsive" src="../images/footer-logo.png"></li>

          </ul>

      </div>

    </footer> -->

</section>

<script type="text/javascript" src="../js/slick.min.js"></script>

<script type="text/javascript">

    var date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,comments,session_type;

	var answers = ["0","0","0","0","0","0","0","0","0","0","0"];



  $(function() {

    // $( "#datepicker" ).datepicker();

    $("#datepicker").datepicker({

		  dateFormat: 'dd-M-yy',

     maxDate: new Date(),

			constrainInput: false,

        onSelect: function(altFormat, inst) {

             //alert(dateText);

             date = altFormat;

			 var value  = $('.question-slide').slick('slickCurrentSlide');

			 answers[value]=date;

             console.log(answers);

        }

    });

	 $("#coaching-datepicker").datepicker({

		dateFormat: 'dd-M-yy',

    maxDate: new Date(),

    constrainInput: false,

        onSelect: function(altFormat, inst) {

             //alert(dateText);

             date = altFormat;

			 var value  = $('.question-slide').slick('slickCurrentSlide');

			 answers[value]=date;

             console.log(answers);

        }

    });

	 $("#recog-datepicker").datepicker({

    maxDate: new Date(),

		//altFormat: "yy-M-dd",

        onSelect: function(altFormat, inst) {

             //alert(dateText);

             date = altFormat;

			 var value  = $('.question-slide').slick('slickCurrentSlide');

			 answers[value]=date;

             console.log(answers);

        }

    });

	

  });





 $(document).ready(function(){



  $("nav li:first-child a , a.navbar-brand").click(function(e){

     e.preventDefault();

     $("#ExtSession").modal("show");

  });

	 

	$('.group1').start(function(cur){

		 var value  = $('.question-slide').slick('slickCurrentSlide');

		  cur = cur.toString();

		 answers[value]=cur;

         console.log(answers);

		//console.log(cur);

		//$('#info').text(cur);

    });



    $('.group2').start(function(cur){

		 var value  = $('.question-slide').slick('slickCurrentSlide');

		 cur = cur.toString();

		 answers[value]=cur;

         console.log(answers);

		//console.log(cur);

		//$('#info').text(cur);

    });

	 

    $( "#datepicker, #recog-datepicker, #coaching-datepicker" ).click(function(){

    $(this).css("background-color","white")

  })





    $(".continue-plain").click(function(){

      if($("#datepicker").val() != "" || $("#coaching-datepicker").val() != "" || $("#recog-datepicker").val() != "")  {

         $(".question-slide").slick('slickNext');

      } else {

        return false

      }

    });







    $(".feedback").hide();

    $(".coaching").hide();

    $(".recognisation").hide();



    $('#optionfeedback').click(function(){

      $(".main-session").hide();

      $(".feedback").fadeIn();

      $('.question-slide').slick({

        infinite:false,

        dots:true,

        Arrow:true,

        swipe:false,

        prevArrow: $(".pp2"),

        nextArrow:false,

        adaptiveHeight:true,

         responsive: [

            {

              breakpoint: 767,

              settings: {

                adaptiveHeight:true,

                prevArrow: $(".pp2"),

                Arrow:true

              }

            }

          ]



	});

});



$('#optionsRadios2').click(function(){

      $(".main-session").hide();

      $(".coaching").fadeIn();

      $('.question-slide').slick({

        infinite:false,

        dots:true,

        Arrow:true,

        swipe:false,

        prevArrow: $(".pp2"),

        nextArrow:false,

        adaptiveHeight:true,

         responsive: [

            {

              breakpoint: 767,

              settings: {

                adaptiveHeight:true,

                prevArrow: $(".pp2"),

                Arrow:true

              }

            }

          ]

		});

});



$('#optionsRadios3').click(function(){

      $(".main-session").hide();

      $(".recognisation").fadeIn();

      var opt3 = $('.question-slide');

      opt3.slick({

        infinite:false,

        dots:true,

        Arrow:true,

        swipe:false,

        prevArrow: $(".pp2"),

        nextArrow:false,

        adaptiveHeight:true,

        accessibility:false,

         responsive: [

            {

              breakpoint: 767,

              settings: {

                adaptiveHeight:true,
                
                prevArrow: $(".pp2"),

                Arrow:true

              }

            }

          ]

		});

});

// unbdinging qustions click

$('.pp2').click(function(){
    $(".question-slide").slick('slickPrev');
});


var opt3 = $('.question-slide');

opt3.on("init", function (event, slick) {

  $(".slick-dots li", slick.$slider.parent()).unbind("click");

});



$('.feedback input:radio, .coaching input:radio, .recognisation input:radio').click(function(){ 

	var value  = $('.question-slide').slick('slickCurrentSlide');

    var val = $(this).val();

	val.toString();

    //q1=val;

	answers[value]=val;

    console.log(answers);

});

	

/*$('.continue-plain').click(function(){ 

		 var value  = $('.question-slide').slick('slickCurrentSlide');

        //var val = $('input:radio:checked').val();

        //q1=val;

		answers[value]=date;

       console.log(answers);

});*/



  $('#fSubmit').on('hidden.bs.modal', function (e) {

    window.location.href="welcome.php";

  })



	$('.review-submit').click(function(){ 

			 var value  =10;

       if(session_type==1){

       var comments = $("#exampleTextarea").val();

      }else if(session_type==2){

       var comments = $("#exampleTextareaCoaching").val();

      }else if(session_type==3){

       var comments = $("#exampleTextareaRecog").val();
         var value  =9;

       } 
       else{console.log("no session")}

       answers[value]=comments;

       

       console.log(answers);




















			  var jsonData =  {

                              key: "4a742fb6608414c8cbd11a6b80d91885f02f2550",

                              email:"<?php echo $_SESSION['email'] ?>",

                              os: "website",

                              lang:"en",

							  session_type:session_type,

							  answers:answers

                      };

			 $.ajax({

                        cache: false,

                        type: "post",

                        url: "../../../dashboard/api.cgi?act=update-session",

                        dataType: "json",

                        data: JSON.stringify({ nestle: jsonData }),

                        success: function (response) {

                            console.log(response);

                            if (response.response == "200") {

                               $("#update-session-200").modal("show");
                               $('#update-session-200').on('hidden.bs.modal', function (e) {

                                    window.location.href="welcome.php";

                                  });

                            }else{

                                $("#update-session-500").modal("show");

                            }



                        }

                  });

    });









































	

	$('.question-slide input:radio').click(function(){

		$(".question-slide").slick('slickNext');

  	})

	

	/*$('.main-session input:radio').click(function(){

		//var value  = $('.question-slide').slick('slickCurrentSlide');

		var value  = $('input:radio:checked').val();

		session_type=value;

       console.log(session_type);

    });*/

	

	$('.main-session input:radio').click(function(){

		//var value  = $('.question-slide').slick('slickCurrentSlide');

		var value  = $('input:radio:checked').val();

		session_type=value;

		if(session_type==3){

			  answers = ["0","0","0","0","0","0","0","0","0","0"];	

			  console.log("recognition");

		}

       console.log(session_type);

    });

	// $('.feedback input[name=feedbackrate]:radio, .coaching input[name=feedbackrate]:radio, .recognisation input[name=feedbackrate]:radio').click(function(){ 

	// 		$(".feedback").hide();

	// 		$(".coaching").hide();

	// 		$(".recognisation").hide();

			

	// 		$(".comment-session").show();

	// });	



	

});



$(window).scroll(function(){

	$("header").addClass("bg-white")

});





$('.custom-page-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

console.log();

  $("slick-dots li:first-child").addClass("colorFill");

});

$('.question-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
  if($(".slick-dots li").hasClass("slick-active")){
    $('.slick-active').addClass('colorFill');
  }
  if($(".slick-dots li:last-child").hasClass("slick-active")){
     $(this).addClass("colorFill");
  }

});

$(".pp2").click(function(){
   $('.slick-active.colorFill').removeClass('slick-active colorFill');
   $('.colorFill.slick-active').removeClass('colorFill slick-active');
});




/*function goToSubmitPage(){

      window.location.href = "comments.php";

 }*/

// function windowFit(){

//   var windowHeight = $(window).height();

//   var headerHeight = $("header").height() + 20;

//   $(".info-mid-area, .pos-rel").height(windowHeight - headerHeight);

// }

// windowFit();

// $(window).resize(function(){

//   windowFit();

// });

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





// $(".comment-back").click(function(){



//   if(session_type==1){

    

//   	alert("hello");

//   	$(".feedback").show();

//   }

//   else if(session_type==2){

//   	$("#coaching").show();

//   	$(".comment-session").hide();

//   }

//   else if(session_type==3){

//   	$("#recognisation").show();

//   	$(".comment-session").hide();

//   }

//   else{console.log("no session found");}



// });





//var startDate = moment.parse("18/02/2013", "DD/MM/YYYY");

// var today = new Date();

// var dd = today.getDate();

// var mm = today.getMonth()+1; //January is 0!

// var yyyy = today.getFullYear();



// if(dd<10) {

//     dd='0'+dd

// } 



// if(mm<10) {

//     mm='0'+mm

// } 



// today = dd+'/'+mm+'/'+yyyy;

// $("#datepicker").click(function(){

//   alert("today :" + today);

// });





// if ($(".ui-datepicker-today").prevAll("td")) {

//   $(".ui-datepicker-calendar tbody tr a").hide();

// }

</script>

</body>

</html>


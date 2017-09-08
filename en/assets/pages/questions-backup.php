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
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/jquery-ui-1.10.4.js"></script>
<script src="../js/modernizr.custom.min.js"></script>
<script src="../js/easy-responsive-tabs.js"></script>

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
           <a class="brand-logo pull-left" href="#">
              <img class="img-responsive" src="../images/logo.png">
           </a>
           <div class="nav-login-area pull-right">
                <ul>
                    <li class="signOut"><a href="index.php">Sign Out</a></li>
                </ul>
           </div> 
      </nav>

     <!-- mobile header session -->
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
               <img class="img-responsive" src="../images/logo.png">
            </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse navbar-right">
            <div class="nav-login-area">
               <ul>
                   <li class="signOut">
                   <a href="index.php">sign Out</a>
                   </li>
               </ul>
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
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>

    <!-- content goes to this session -->
    <section class="info-mid-area cleaefix">


                    
                    <div class="inner-page qstn-blk text-center main-session">
                        <div class="container"> 
                            <div class="row">
                            <h2 class="text-center">What type of session did you<br> engage in today?</h2>

                            <div class="table">

                            <div class="qst-blks col-3 clearfix">
                                <div class="img-block">
                                <img class="img-responsive" src="../images/feedback-vector.png">
                                </div>
                                <p>Feedback</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadiosFeed" id="optionsRadios1" value="1">
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
                           
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">With whom?</h2>

                            <div class="table">

                            <div class="qst-blks col-3 m-top clearfix">

                                <p>Line Manager</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="a">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Direct Report</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="b">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Colleague</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="c">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider two end here -->

               <div class="qstn session3">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">Which department?</h2>

                            <div class="table">

                            <div class="qst-blks col-5 clearfix">

                                <p>Sales</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="a">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>CCSD</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="b">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>A &amp; P</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="c">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>SC</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="d">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>NP</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="e">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Medical team</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="f">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>FICO</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="g">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>HR</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="h">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>IT</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="i">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Others</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="j">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                      
                    </div>
                  </div>
                 
               </div>

                <!-- slider three end here -->

                <div class="qstn session4">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Who asked for it?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Myself</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Him / Her</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                    
                        </div>
                    </div>           


                </div>

                <!-- slider four end here -->

                <div class="qstn session5">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 

                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                       
                                <h2 class="text-center">Where you the Giver of the Receiver?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Giver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Receiver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                           
                        </div>
                    </div>           


                </div>

                <!-- slider five end here -->

                <div class="qstn session6">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Was it Planned or Spontaneous?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Planned</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Spontaneous</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

          
                        </div>
                    </div>           


                </div>

                <!-- slider six end here -->

                <div class="qstn session7">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">When was the date of the session?</h2>

                                <div class="table">

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

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">What was the duration of the session?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>< 1 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>1 -10 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>10 - 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="c">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>> 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="d">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                        </div>
                    </div>           


                </div>

                <!-- slider eight end here -->


                <div class="qstn session9">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">How was the recognition performed?</h2>

                            <div class="table">

                            <div class="qst-blks col-4 clearfix">

                                <p>Private - One on One</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios9" id="optionsRadios1" value="a">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private Email</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios9" id="optionsRadios2" value="b">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="c">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Email</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="d">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Chatter</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="e">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Meeting</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="f">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Event</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="g">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="h">
                                        <label></label>
                                  </div>
                            </div>

                            

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider nine end here -->


                <div class="qstn session10">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">The recognition was related to a?</h2>

                                <div class="table">

                                     <div class="qst-blks single-col m-top">
                                          <div class="radio radio-info radio-inline pull-left">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="a">
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
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                          <p>Cooperate and connect externally</p>
                                          <div class="pull-left radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="c">
                                                <label></label>
                                          </div>
                                          <p>Lead to Win</p>
                                          <div class="pull-left radio radio-info radio-inline orange">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="d">
                                                <label></label>
                                          </div>
                                          <p>Manage for Results</p>

                                     </div>

                                     <div class="qst-blks col-2">

                                         <div class="pull-left radio radio-info radio-inline green">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                          <p>Grow Talent and Team</p>

                                          <div class="pull-left radio radio-info radio-inline purple">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                          <p>Collaborate Internally</p>

                                          <div class="pull-left radio radio-info radio-inline magento">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="c">
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

                <div class="qstn session11">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                <div class="table">

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley1.png">
                                          </div>
                                          <p>Exceeded expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="a">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley2.png">
                                          </div>
                                          <p><span>Met</span> expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="b">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley3.png">
                                          </div>
                                          <p>Somewhat met expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="c">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley4.png">
                                          </div>
                                          <p>Did not meet expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="d">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                             
                        </div>
                    </div>           


                </div>

                <!-- slider eleven end here --> 
              
          </div>

    <!-- coaching slider start here -->      

          <div class="question-slide coaching">
               

                <!-- slider one end here -->

               <div class="qstn session2">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                           
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">Coaching</h2>
                            <h2 class="text-center">With whom?</h2>

                            <div class="table">

                            <div class="qst-blks col-3 m-top clearfix">

                                <p>Line Manager</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Direct Report</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Colleague</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider two end here -->

               <div class="qstn session3">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">Which department?</h2>

                            <div class="table">

                            <div class="qst-blks col-5 clearfix">

                                <p>Sales</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>CCSD</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>A &amp; P</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>SC</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option4">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>NP</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option5">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Medical team</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option6">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>FICO</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option7">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>HR</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option8">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>IT</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option9">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Others</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option10">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                      
                    </div>
                  </div>
                 
               </div>

                <!-- slider three end here -->

                <div class="qstn session4">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Who asked for it?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Myself</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Him / Her</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                    
                        </div>
                    </div>           


                </div>

                <!-- slider four end here -->

                <div class="qstn session5">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 

                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                       
                                <h2 class="text-center">Where you the Giver of the Receiver?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Giver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Receiver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                           
                        </div>
                    </div>           


                </div>

                <!-- slider five end here -->

                <div class="qstn session6">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Was it Planned or Spontaneous?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Planned</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Spontaneous</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

          
                        </div>
                    </div>           


                </div>

                <!-- slider six end here -->

                <div class="qstn session7">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">When was the date of the session?</h2>

                                <div class="table">

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

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">What was the duration of the session?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>< 1 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>1 -10 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>10 - 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>> 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                        </div>
                    </div>           


                </div>

                <!-- slider eight end here -->


                <div class="qstn session9">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">How was the recognition performed?</h2>

                            <div class="table">

                            <div class="qst-blks col-4 clearfix">

                                <p>Private - One on One</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios9" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private Email</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios9" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Email</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option4">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Chatter</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option5">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Meeting</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option6">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Event</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option7">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option8">
                                        <label></label>
                                  </div>
                            </div>

                            

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider nine end here -->


                <div class="qstn session10">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">The recognition was related to a?</h2>

                                <div class="table">

                                     <div class="qst-blks single-col m-top">
                                          <div class="radio radio-info radio-inline pull-left">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option1">
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
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                          <p>Cooperate and connect externally</p>
                                          <div class="pull-left radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                          <p>Lead to Win</p>
                                          <div class="pull-left radio radio-info radio-inline orange">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                          <p>Manage for Results</p>

                                     </div>

                                     <div class="qst-blks col-2">

                                         <div class="pull-left radio radio-info radio-inline green">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                          <p>Grow Talent and Team</p>

                                          <div class="pull-left radio radio-info radio-inline purple">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                          <p>Collaborate Internally</p>

                                          <div class="pull-left radio radio-info radio-inline magento">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option3">
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

                <div class="qstn session11">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                <div class="table">

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley1.png">
                                          </div>
                                          <p>Exceeded expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley2.png">
                                          </div>
                                          <p><span>Met</span> expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley3.png">
                                          </div>
                                          <p>Somewhat met expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley4.png">
                                          </div>
                                          <p>Did not meet expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                             
                        </div>
                    </div>           


                </div>

                <!-- slider eleven end here --> 
              
          </div>

    <!-- recognition slider start here -->  
    

          <div class="question-slide recognition">
               

                <!-- slider one end here -->

               <div class="qstn session2">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                           
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">Recognisation</h2>
                            <h2 class="text-center">With whom?</h2>


                            <div class="table">

                            <div class="qst-blks col-3 m-top clearfix">

                                <p>Line Manager</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Direct Report</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-3 m-top clearfix">
                                
                                <p>Colleague</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" class="rd-one" name="optionsRadios2" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider two end here -->

               <div class="qstn session3">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">Which department?</h2>

                            <div class="table">

                            <div class="qst-blks col-5 clearfix">

                                <p>Sales</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>CCSD</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>A &amp; P</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>SC</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option4">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>NP</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option5">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Medical team</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option6">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>FICO</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option7">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>HR</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option8">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>IT</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option9">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-5 clearfix">
                                
                                <p>Others</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option10">
                                        <label></label>
                                  </div>
                            </div>

                            </div>

                      
                    </div>
                  </div>
                 
               </div>

                <!-- slider three end here -->

                <div class="qstn session4">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Who asked for it?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Myself</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Him / Her</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios4" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                    
                        </div>
                    </div>           


                </div>

                <!-- slider four end here -->

                <div class="qstn session5">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 

                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                       
                                <h2 class="text-center">Where you the Giver of the Receiver?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Giver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Receiver</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios5" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                           
                        </div>
                    </div>           


                </div>

                <!-- slider five end here -->

                <div class="qstn session6">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Was it Planned or Spontaneous?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>Planned</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>Spontaneous</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios6" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

          
                        </div>
                    </div>           


                </div>

                <!-- slider six end here -->

                <div class="qstn session7">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">When was the date of the session?</h2>

                                <div class="table">

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

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">What was the duration of the session?</h2>

                                <div class="table">

                                     <div class="qst-blks col-5 m-top">
                                          <p>< 1 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-5 m-top">
                                          <p>1 -10 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>10 - 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-5 m-top">
                                          <p>> 30 min</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios8" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                        </div>
                    </div>           


                </div>

                <!-- slider eight end here -->


                <div class="qstn session9">

                   <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                            <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                            </div>
                            <h2 class="text-center">How was the recognition performed?</h2>

                            <div class="table">

                            <div class="qst-blks col-4 clearfix">

                                <p>Private - One on One</p>

                                  <div class="radio radio-info radio-inline">
                                        <input type="radio" name="optionsRadios9" id="optionsRadios1" value="option1">
                                        <label></label>
                                  </div>

                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private Email</p>
                                  <div class="radio radio-info radio-inline">        
                                        <input type="radio" name="optionsRadios9" id="optionsRadios2" value="option2">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Private - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option3">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Email</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option4">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Chatter</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option5">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Meeting</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option6">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Event</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option7">
                                        <label></label>
                                  </div>
                            </div>

                            <div class="qst-blks col-4 clearfix">
                                
                                <p>Public - Other</p>
                                  <div class="radio radio-info radio-inline">    
                                        <input type="radio" name="optionsRadios9" id="optionsRadios3" value="option8">
                                        <label></label>
                                  </div>
                            </div>

                            

                            </div>

                        
                    </div>
                  </div>
                 
               </div>

                <!-- slider nine end here -->


                <div class="qstn session10">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">The recognition was related to a?</h2>

                                <div class="table">

                                     <div class="qst-blks single-col m-top">
                                          <div class="radio radio-info radio-inline pull-left">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option1">
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
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                          <p>Cooperate and connect externally</p>
                                          <div class="pull-left radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                          <p>Lead to Win</p>
                                          <div class="pull-left radio radio-info radio-inline orange">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                          <p>Manage for Results</p>

                                     </div>

                                     <div class="qst-blks col-2">

                                         <div class="pull-left radio radio-info radio-inline green">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                          <p>Grow Talent and Team</p>

                                          <div class="pull-left radio radio-info radio-inline purple">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                          <p>Collaborate Internally</p>

                                          <div class="pull-left radio radio-info radio-inline magento">    
                                                <input type="radio" name="optionsRadios10" id="optionsRadios3" value="option3">
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

                <div class="qstn session11">

                    <div class="inner-page qstn-blk text-center">
                        <div class="container"> 
                                <div class="back-button pull-left">
                                <button class="pp2">Back</button>
                                </div>
                                <h2 class="text-center">Rate your overall satisfaction<br> on the quality of session:</h2>

                                <div class="table">

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley1.png">
                                          </div>
                                          <p>Exceeded expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option1">
                                                <label></label>
                                          </div>
                                     </div>
                                     
                                    <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley2.png">
                                          </div>
                                          <p><span>Met</span> expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option2">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley3.png">
                                          </div>
                                          <p>Somewhat met expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option3">
                                                <label></label>
                                          </div>
                                     </div>

                                     <div class="qst-blks col-4 rate">
                                          <div class="img-block">
                                              <img class="img-responsive" src="../images/smiley4.png">
                                          </div>
                                          <p>Did not meet expectations</p>
                                          <div class="radio radio-info radio-inline">    
                                                <input type="radio" name="optionsRadios11" id="optionsRadios3" value="option4">
                                                <label></label>
                                          </div>
                                     </div>

                                </div>

                             
                        </div>
                    </div>           


                </div>

                <!-- slider eleven end here --> 
              
          </div>    



                <style type="text/css">
                .s-cus-bul {padding:0px;margin:0px;display: table;table-layout: fixed;width: 100%;}
                .s-cus-bul li{display:table-cell;}
                .s-cus-bul li span {border-radius: 50%;width:20px;height: 20px;background: #000;}
                </style>
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

    <!-- mobile navigation session -->


    <footer>
      <div class="container">
          <ul>
          <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p></li>
          <li><img class="img-responsive" src="../images/footer-logo.png"></li>
          </ul>
      </div>
    </footer>
</section>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript">
    var date,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,comments;

  $(function() {
    // $( "#datepicker" ).datepicker();
    $("#datepicker").datepicker({
        onSelect: function(dateText, inst) {
             //alert(dateText);
             var date = dateText;
             console.log(date);
        }
    });
  });
  



 $(document).ready(function(){
    $( "#datepicker" ).click(function(){
    $(this).css("background-color","white")
  })


    $(".continue-plain").click(function(){
      if($("#datepicker").val() != "" )  {
         $(".question-slide").slick('slickNext');
      } else {
        return false
      }
    });

    $(".feedback").hide();
    $(".coaching").hide();
    $(".recognition").hide();

    $('#optionsRadios1').click(function(){
      $(".main-session").hide();
      $(".feedback").fadeIn();
      $('.question-slide').slick({
        dots:true,
        Arrow:true,
        swipe:false,
        prevArrow: $(".pp2"),
        nextArrow:false,adaptiveHeight:true,
         responsive: [
            {
              breakpoint: 767,
              settings: {
                adaptiveHeight:true
              }
            }
          ]

});
    });

    $('#optionsRadios2').click(function(){
        
      $(".main-session").hide();
      $(".coaching").fadeIn();
      $('.question-slide').slick({
        dots:true,
        Arrow:true,
        swipe:false,
        prevArrow: $(".pp2"),
        nextArrow:false,adaptiveHeight:true,
         responsive: [
            {
              breakpoint: 767,
              settings: {
                adaptiveHeight:true
              }
            }
          ]

});

    });

    $('#optionsRadios3').click(function(){
        
        $(".main-session").hide();
      $(".recognition").fadeIn();
      $('.question-slide').slick({
        dots:true,
        Arrow:true,
        swipe:false,
        prevArrow: $(".pp2"),
        nextArrow:false,adaptiveHeight:true,
         responsive: [
            {
              breakpoint: 767,
              settings: {
                adaptiveHeight:true
              }
            }
          ]

});

    });

    $('.session1 input:radio').click(function(){
        var val = $('input:radio:checked').val();
        //q1=val;
        console.log(val);
    });

    $('.session2 input:radio').click(function(){
        //var val = $('input:radio:checked').val();
        var val = $('input[name=optionsRadios2]:checked', '.session2').val();
        q1=val;
        //console.log(val);
    });

    $('.session3 input:radio').click(function(){
        var val = $('input[name=optionsRadios3]:checked', '.session3').val();
        q2=val;
        //console.log(val);
    });

    $('.session4 input:radio').click(function(){
        var val = $('input[name=optionsRadios4]:checked', '.session4').val();
        q3=val;
        //console.log(val);
    });

    $('.session5 input:radio').click(function(){
        var val = $('input[name=optionsRadios5]:checked', '.session5').val();
        q4=val;
       // console.log(val);
    });

    $('.session6 input:radio').click(function(){

        var val = $('input[name=optionsRadios6]:checked', '.session6').val();
        q5=val;
        //console.log(val);
    });

    $('.session7 input:radio').click(function(){

        var val = $('input[name=optionsRadios7]:checked', '.session7').val();
        q6=val;
        //console.log(val);
    });

    $('.session8 input:radio').click(function(){

        var val = $('input[name=optionsRadios8]:checked', '.session8').val();
        q7=val;
        //console.log(val);
    });

    $('.session9 input:radio').click(function(){

        var val = $('input[name=optionsRadios9]:checked', '.session9').val();
        q8=val;
        //console.log(val);
    });

    $('.session10 input:radio').click(function(){

        var val = $('input[name=optionsRadios10]:checked', '.session10').val();
        q9=val;
        //console.log(val);
    });

    $('.session11 input:radio').click(function(){

        var val = $('input[name=optionsRadios11]:checked', '.session11').val();
        q10=val;
        //console.log(val);
    });



/*    $(".slick-dots li").click(function(){
        if($(".slick-active .inner-page .qst-blks .radio").$(("input[name='optionsRadios']").checked === true)) { 
            alert("coding");
        }
    });*/
    


   $("input[name='optionsRadios']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios2']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios3']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios4']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios5']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios6']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios7']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios8']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios9']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
        } 
   });
   $("input[name='optionsRadios10']").change(function(){
        if("input[name='optionsRadios']:checked") { 
           $(".question-slide").slick('slickNext');
           goToSubmitPage();
        } 
   });
  });

$(window).scroll(function(){

 $("header").addClass("bg-white")

  });

function goToSubmitPage(){
      window.location.href = "comments.php";
 }

 

</script>
</body>
</html>

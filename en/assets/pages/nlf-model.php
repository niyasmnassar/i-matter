<?php

session_start();
if(!isset($_SESSION['email'])){
  echo "here";
  header("Location: index.php");exit;
}
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
<link rel="stylesheet" type="text/css" href="../css/font.css">
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
           <a class="brand-logo pull-left" href="welcome.php">
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
              <span class="sr-only">Toggle navigation</span>
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
                   <li class="signOut"><a href="session_destroy.php">Sign Out<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
               </ul>
            </div> 
            <ul class="nav navbar-nav">
              <li class="home-bt">
              <a href="welcome.php">Home</a>
              </li>
              <li class="star">
              <a href="star-model.php">STAR Model</a>
              </li>
              <li class="grow">
              <a href="grow-model.php">GROW Model</a>
              </li>
              <li class="nlf active">
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
         <div class="inner-page">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="back-button">
                         <a href="javascript:history.back()">Back</a>
                         </div>
                         <h2>NLF Model</h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 visible-xs hidden-lg hidden-md hidden-sm mob-img">
                         <img class="img-responsive" src="../images/nlf-model.png">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                          <div class="nlf-modal-block">

                          <!-- responsive tab start here -->

                          <div class="model-tab">
                              <ul class="resp-tabs-list">
                              <li>ALL EMPLOYEES</li>
                              <li>LEADERS</li>
                              <li>SENIOR LEADERS</li>
                              </ul>
                              <div class="resp-tabs-container">
                                  <div> 
                                    <p>Understand the business environment</p>
                                    <p>Practice what you preach</p>
                                    <p>Results focus</p>
                                    <p>Know yourself</p>
                                    <p>Proactive cooperation</p>
                                    <p>Initiative</p>
                                  </div>
                                  <div>
                                    <p>Insight</p>
                                    <p>Energize and engage</p>
                                    <p>Enable results thought others</p>
                                    <p>Coach &amp; Develop</p>
                                    <p>Influence with integrity</p>
                                    <p>Courage</p>
                                  </div>
                                  <div>
                                    <p>Foster comptetitive intensity</p>
                                    <p>Inspire the organization</p>
                                    <p>Develop &amp; execute strategy</p>
                                    <p>Develop organizational capability</p>
                                    <p>Create and inclusive culture</p>
                                    <p>Embrace and lead change</p>
                                  </div>

                              </div>
                          </div>

                          <!-- responsive tab end here -->

                          </div>
                         
                         
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs nlf-img">
                         <img class="img-responsive" src="../images/nlf-model.png">
                     </div>
                 </div>    
             </div>
         </div>
    </section>
    <!-- content session end here -->

    <!-- mobile navigation session -->

    <nav class="bottom-nav">
      
      <ul class="btm-menu">
        <li class="home"><a href="index.php">HOME</a></li>
        <li class="star"><a href="star-model.php">STAR Model</a></li>
        <li class="grow"><a href="grow-model.php">GROW Model</a></li>
        <li class="nlf active"><a href="nlf-model.php">NLF Model</a></li>
        <li class="profile"><a href="profile.php">Profile</a></li>
      </ul>

    </nav>

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
<script type="text/javascript">
  $(document).ready(function(){
      $( "#tabs" ).tabs();
      $('.model-tab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
  });
      });

  $(window).scroll(function(){

 $("header").addClass("bg-white")

  });
 

</script>
</body>
</html>

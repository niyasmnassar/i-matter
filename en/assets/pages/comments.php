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
                <li class="signOut"><a href="index.php">Sign Out</a></li>
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
                   <li class="signOut"><a href="index.php">Sign Out</a></li>
               </ul>
            </div> 
            <ul class="nav navbar-nav">
              <li class="home-bt">
              <a href="#">Home</a>
              </li>
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
         <div class="inner-page">
             <div class="container">
                 <div class="row">

                     <div class="col-md-6 col-md-offset-3 col-xs-12">
                          <div class="comments">
                              <h3>Comments <span>(optional)</span></h3>
                              <fieldset class="form-group">
                                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Write here..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write here...'"></textarea>
                              </fieldset>
                              <button type="submit" class="submit">SUBMIT REVIEW NOW</button>
                          </div>
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
        <li class="nlf"><a href="nlf-model.php">NLF Model</a></li>
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
 

</script>
</body>
</html>

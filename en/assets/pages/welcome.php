<?php



// error_reporting(E_ALL);
// ini_set("display_errors",1);
//   ini_set("display_startup_errors",1);

session_start();
 if(isset($_POST['email']))
 {
	 $_SESSION['email']=$_POST['email']; 
 }


 if(!isset($_SESSION['email']))
 {
     header("Location: index.php");exit;
}

 





 //print_r($_SESSION);
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
            <a class="navbar-brand" href="#">
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
              <!-- <li class="home-bt active">
              <a href="welcome.php">Home</a>
              </li> -->
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
    <section class="info-mid-area cleaefix full-height">
         <div class="home-page">
             <div class="container full-height">
                 <div class="row full-height">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full-height pos-rel">
                         <div class="welcome">
                             <h1>Let us talk about your last session.</h1>
                             <a class="start-now" href="questions.php"></a>
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
        <li class="home active"><a href="index.php">HOME</a></li>
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
  });
    if($(window).width()<768){
        h=$(window).height();
        h= (h<500)?500:h;
        $('.home-page').height(h);
    };
 
 // h=$(window).height();
 // h= (h<500)?500:h;
 // $('.home-page').height(h); 
 
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









</body>
</html>

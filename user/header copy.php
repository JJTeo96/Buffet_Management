<?php
// Initialize the session
//session_start();

//create an array to set page-level variables
//$page=array();
//$page['title']='Admin Dashboard';  

// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: ../admin_login/login.php");
//     exit;
// }

//include('../config/database.php');
?>

<?php 
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>


<div class="site-header header--inversed js-header headroom--top">
		<div class="container">
			<div class="flexbox">
        <div class="flexbox__item">
					<button class="nav-trigger  js-nav-trigger">
						<span class="nav-icon icon--lines"></span>
					</button>
				</div>
				
        <div class="flexbox__item  branding-container">
					<div class="site-header__branding">
			    <h1 class="site-title site-title--image">
		    	  <a class="site-logo  site-logo--image" href="index.php" title="Buffet Go" rel="home">
				      <img class="site-logo-img--light" src="vendor/img/buffet_logo.png" rel="logo" alt="BuffetGo">
						</a>
		      </h1>
      	  </div>				
        </div>

				<div class="flexbox__item">
					<nav class="navigation  navigation--main" id="js-navigation--main">
						<h2 class="accessibility">Primary Navigation</h2>

						<ul id="menu-main-menu" class="nav  nav--main  nav--items-menu"><li id="menu-item-556" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-556"><a href="http://www.pichaeats.com/about-us/">About Us</a>
<ul class="sub-menu">
	<li id="menu-item-557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-557"><a href="http://www.pichaeats.com/about-us/">About Us</a></li>
	<li id="menu-item-748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-748"><a href="http://www.pichaeats.com/our-impact/">Our Impact</a></li>
	<li id="menu-item-1697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1697"><a href="http://www.pichaeats.com/reviews/">Reviews</a></li>
	<li id="menu-item-524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-524"><a href="http://www.pichaeats.com/blog/">Blog</a></li>
	<li id="menu-item-710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-710"><a href="http://www.pichaeats.com/faq/">FAQ</a></li>
</ul>
</li>
<li id="menu-item-2113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2113"><a href="http://www.pichaeats.com/our-services/">Services</a>
<ul class="sub-menu">
	<li id="menu-item-2167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2167"><a href="http://www.pichaeats.com/catering/">Catering Services</a></li>
	<li id="menu-item-2166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2166"><a href="http://www.pichaeats.com/meal-box-delivery/">Meal Box Delivery</a></li>
	<li id="menu-item-2169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2169"><a href="http://www.pichaeats.com/picha-popup/">Picha Pop-Up</a></li>
	<li id="menu-item-2168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2168"><a href="http://www.pichaeats.com/open-house/">Open House</a></li>
</ul>
</li>
<li id="menu-item-2827" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2827"><a href="http://www.pichaproject.com/menu/">Menu</a>
<ul class="sub-menu">
	<li id="menu-item-2830" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2830"><a href="/catering">Catering</a></li>
	<li id="menu-item-2831" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2831"><a href="https://pichaeats.oddle.me/en_MY#2c9f8518598c9d6f0159ab2a147832d0">Meal Boxes Delivery</a></li>
	<li id="menu-item-2829" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2829"><a href="https://pichaeats.oddle.me/en_MY#2c9f8e355fe8073e015feba160a24686">Mini Buffet Delivery</a></li>
</ul>
</li>
<li id="menu-item-768" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-768"><a href="http://www.pichaeats.com/contact-us/">Contact Us</a></li>
<li id="menu-item-3039" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3039"><a href="http://www.pichaeats.com/join-our-team/">Join Our Team</a></li>
</ul>					</nav>
					<div class="nav-overlay"></div>
				</div>
			</div><!-- .flexbox -->
		</div><!-- .container -->
	</div>



<!---------------------------------------------------------  -->
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"><a href="index.php"><img src="vendor/img/buffet_logo.png" alt="image"/></a></div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">info@phtpoint.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+91-9015-501-897</a> </div>
            <div class="social-follow">
              
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
else{ 

echo "Welcome To Car rental portal";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>
          	 
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="car-listing.php">Car Listing</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>












<!-- ------------------------------------------------------------------------ -->
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>Buffet Catering Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="vendor/custom/css/buttons.css" rel="stylesheet">
    <link href="vendor/custom/css/style.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="vendor/fontawesome/js/solid.js" ></script>
    <script defer src="vendor/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="vendor/fontawesome/css/fontawesome.min.css">

  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Buffet Catering</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($activePage == 'package') ? 'active':''; ?>">
              <a class="nav-link" href="package.php">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>

          <ul class="navbar-nav mr-right">
            <?php
              error_reporting(0); // Turn off all error reporting
            ?>
            
            <?php 
            $Drop=$_SESSION["userName"];
            
                  // Check if the user is logged in, if not then redirect him to login page
                  if(isset($_SESSION["userName"]) == 1){
                      echo '<li class="nav-item dropdown" style="margin-right:20px">';
                      echo '<a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User '.$Drop.'</a>';
                      // echo $_SESSION["userName"];'</a>';
                      echo '<div class="dropdown-menu" aria-labelledby="dropdown05">';
                      echo '<a class="dropdown-item" href="profile.php">Profile</a>';
                      // echo '<a class="dropdown-item" href="#">Another action</a>';
                      echo '</div></li>';
                  }else{
                      echo '';
                  }
                 
            ?>
            <?php 
                // Check if the user is logged in, if not then redirect him to login page
                if(isset($_SESSION["userName"]) == 1){
                    echo '<li id="order-button" class="no-bullets">';
                    echo '<a href="../user_login/logout.php">';
                    echo '<div class="button-small button-3d button-caution button-pill">';
                    echo 'Logout ';
                    echo '<i class="fas fa-sign-out-alt">';
                    echo '</i></div></a>';
                }else{
                    echo '<li id="order-button" class="no-bullets">';
                    echo '<a href="../user_login/login.php">';
                    echo '<div class="button-small button-3d button-primary button-pill"">';
                    echo 'Login ';
                    echo '<i class="fas fa-sign-in-alt">';
                    echo '</i></div></a>';
                }
            ?>
            </ul>
         
          <!-- <li id="order-button" class="no-bullets"><a href="#">
            <div class="button-small button-3d button-rounded button">Order Buffet <i class="fas fa-truck"></i></div></a>
          </li> -->
          <!-- <li id="order-button" class="no-bullets"><a href="#">
            <div class="button-small button-3d button-rounded button">Login <i class="fas fa-sign-in-alt"></i></div></a>
          </li> -->
        </div>
      </nav>
    </header>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>

    <head>
<!-- Google Tag Manager -->
<script src="https://js.hs-scripts.com/5668120.js" type="text/javascript" id="hs-script-loader"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://js.hsleadflows.net/leadflows.js" type="text/javascript" id="LeadFlows-5668120" crossorigin="anonymous" data-leadin-portal-id="5668120" data-leadin-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="5668120" data-hsjs-env="prod"></script><script src="//js.hs-analytics.net/analytics/1567078800000/5668120.js" type="text/javascript" id="hs-analytics"></script><script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.9.4" async=""></script><script src="https://connect.facebook.net/signals/config/258163565002420?v=2.9.4&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-M8PH95L"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8PH95L');</script>
<!-- End Google Tag Manager -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="web-app-capable" content="yes">
	<title>PichaEats Malaysia | Delicious Halal Food Catering KL | Rebuilding Lives</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://www.pichaeats.com/xmlrpc.php">
	<!--[if IE]-->
	<script type="text/javascript">
		if(/*@cc_on!@*/false)
			var isIe = 1;
	</script>
	<!--[endif]-->
	
<!-- DO NOT COPY THIS SNIPPET! Start of Page Analytics Tracking for HubSpot WordPress plugin -->
<script type="text/javascript">
var _hsq = _hsq || [];
_hsq.push(["setContentType", "standard-page"]);
</script>
<!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->

<!-- This site is optimized with the Yoast SEO plugin v9.3 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="PichaEats serves you delicious meals while rebuilding lives. We provide halal buffet catering &amp; meal boxes delivery services. Contact us!">
<link rel="canonical" href="http://www.pichaeats.com/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="PichaEats Malaysia | Delicious Halal Food Catering KL | Rebuilding Lives">
<meta property="og:description" content="PichaEats serves you delicious meals while rebuilding lives. We provide halal buffet catering &amp; meal boxes delivery services. Contact us!">
<meta property="og:url" content="http://www.pichaeats.com/">
<meta property="og:site_name" content="PichaEats">
<meta property="og:image" content="http://www.pichaproject.com/wp-content/uploads/2019/04/screen-shot-2019-04-19-at-11.07.05-pm-1024x638.png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="638">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="PichaEats serves you delicious meals while rebuilding lives. We provide halal buffet catering &amp; meal boxes delivery services. Contact us!">
<meta name="twitter:title" content="PichaEats Malaysia | Delicious Halal Food Catering KL | Rebuilding Lives">
<meta name="twitter:image" content="http://www.pichaproject.com/wp-content/uploads/2019/04/screen-shot-2019-04-19-at-11.07.05-pm.png">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","@id":"http://www.pichaeats.com/#website","url":"http://www.pichaeats.com/","name":"PichaEats","potentialAction":{"@type":"SearchAction","target":"http://www.pichaeats.com/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="//js.hs-scripts.com">
<link rel="dns-prefetch" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="//maps.google.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="PichaEats » Feed" href="http://www.pichaeats.com/feed/">
<link rel="alternate" type="application/rss+xml" title="PichaEats » Comments Feed" href="http://www.pichaeats.com/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.pichaeats.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=68a44c7ca84c8e362759ae3f26680177"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="http://www.pichaeats.com/wp-includes/js/wp-emoji-release.min.js?ver=68a44c7ca84c8e362759ae3f26680177" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="hover-image-button-css-css" href="http://www.pichaproject.com/wp-content/plugins/hover-image-button/css/public.css?ver=68a44c7ca84c8e362759ae3f26680177" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="http://www.pichaproject.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.7" type="text/css" media="all">
<link rel="stylesheet" id="pixlikes-plugin-styles-css" href="http://www.pichaproject.com/wp-content/plugins/pixlikes/css/public.css?ver=1.0.0" type="text/css" media="all">
<style id="pixlikes-plugin-styles-inline-css" type="text/css">
.animate i:after {-webkit-transition: all 1000ms;-moz-transition: all 1000ms;-o-transition: all 1000ms;transition: all 1000ms; }
</style>
<link rel="stylesheet" id="rosa-main-style-css" href="http://www.pichaproject.com/wp-content/themes/rosa/style.css?ver=201902251447" type="text/css" media="all">
<link rel="stylesheet" id="mc4wp-form-themes-css" href="http://www.pichaproject.com/wp-content/plugins/mailchimp-for-wp/assets/css/form-themes.min.css?ver=4.3.2" type="text/css" media="all">
<script type="text/javascript" src="http://www.pichaproject.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
<script type="text/javascript" src="http://www.pichaproject.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script type="text/javascript" src="http://www.pichaproject.com/wp-content/themes/rosa/assets/js/vendor/modernizr.min.js?ver=68a44c7ca84c8e362759ae3f26680177"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js?ver=68a44c7ca84c8e362759ae3f26680177"></script>
<link rel="https://api.w.org/" href="http://www.pichaeats.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.pichaeats.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.pichaproject.com/wp-includes/wlwmanifest.xml"> 

<link rel="shortlink" href="http://www.pichaeats.com/">
<link rel="alternate" type="application/json+oembed" href="http://www.pichaeats.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.pichaeats.com%2F">
<link rel="alternate" type="text/xml+oembed" href="http://www.pichaeats.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.pichaeats.com%2F&amp;format=xml">
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic%7CHerr+Von+Muellerhoff:regular%7CCabin:regular%7CCabin:regular,italic,500,500italic,600,600italic,700,700italic&amp;subset=latin-ext,latin-ext,latin,latin" media="all"><script type="text/javascript">
				              if (typeof WebFont !== 'undefined') {                WebFont.load({
                  google: {families: ['Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic:latin-ext','Herr Von Muellerhoff:regular:latin-ext','Cabin:regular:latin','Cabin:regular,italic,500,500italic,600,600italic,700,700italic:latin']},
                  classes: false,
                  events: false
                });
              } else {
                var tk = document.createElement('script');
                tk.src = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                tk.type = 'text/javascript';

                tk.onload = tk.onreadystatechange = function () {
                  WebFont.load({
                    google: {families: ['Source Sans Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic:latin-ext','Herr Von Muellerhoff:regular:latin-ext','Cabin:regular:latin','Cabin:regular,italic,500,500italic,600,600italic,700,700italic:latin']},
                    classes: false,
                    events: false
                  });
                };

                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(tk, s);
              }
					</script>
					<style id="customify_typography_output_style">
				h1, h2, h3, h4, h5, h6, hgroup, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
									blockquote, .tabs__nav, .popular-posts__time, .pagination li a, .pagination li span {
 font-family: Source Sans Pro;
}
.headline__secondary {
 font-family: Herr Von Muellerhoff;
font-weight: normal;
}
.navigation a {
 font-family: Cabin;
font-weight: normal;
}
html, .wp-caption-text, .small-link,	.post-nav-link__label, .author__social-link,
									.comment__links, .score__desc {
 font-family: Cabin;
}
			</style>
		
        <style type="text/css">
            /* Hover Image Button CSS */

            .hib-text-container {
                background-color: rgba(255,255,255, 0.0);
            }

            .hib-text-container:hover {
                background-color: rgba(255,255,255, 0.5);
            }

            /* Custom CSS Code */
            
        </style>
    		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="icon" href="http://www.pichaproject.com/wp-content/uploads/2019/04/cropped-pichawok-01-32x32.png" sizes="32x32">
<link rel="icon" href="http://www.pichaproject.com/wp-content/uploads/2019/04/cropped-pichawok-01-192x192.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="http://www.pichaproject.com/wp-content/uploads/2019/04/cropped-pichawok-01-180x180.png">
<meta name="msapplication-TileImage" content="http://www.pichaproject.com/wp-content/uploads/2019/04/cropped-pichawok-01-270x270.png">
<style id="customify_output_style">
.site-title--image img { max-height: 32px; }
.site-logo { font-size: 32px; }
.container, .search__container, .site-header__container, .header--sticky .site-header__container { max-width: 1522px; }
.site-footer.border-waves:before, .border-waves-top.border-waves-top--dark:before{
		background-image: url("data:image/svg+xml;utf8,<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 19 14' width='19' height='14' enable-background='new 0 0 19 14' xml:space='preserve' preserveAspectRatio='none slice'><g><path fill='#121212' d='M0,0c4,0,6.5,5.9,9.5,5.9S15,0,19,0v7H0V0z'/><path fill='#121212' d='M19,14c-4,0-6.5-5.9-9.5-5.9S4,14,0,14l0-7h19V14z'/></g></svg>");}
.headline__secondary { margin-bottom: -45px; }
.headline__secondary .first-letter { top: 9px; }
.navigation a { font-size: 13px; }
.navigation a { letter-spacing: 1px; }
.nav--main > .menu-item > a { text-transform: uppercase; }
.nav--main > .menu-item > a { text-decoration: none; }
body { font-size: 16px; }
body { line-height: 1.7; }
a, a:hover, .nav--main a:hover, .headroom--not-top .nav--main a:hover, .headline__secondary, .separator--line-flower,
.tabs__nav a.current, .tabs__nav a:hover, .btn.btn--text, .btn--text.comments_add-comment, .headroom--not-top .nav.nav--items-social a:hover:before,
.comments_add-comment.read-more-button, .form-submit .btn--text#comment-submit,
.form-submit #comment-submit.read-more-button, .btn--text.wpcf7-form-control.wpcf7-submit,
.wpcf7-form-control.wpcf7-submit.read-more-button, .btn--text.otreservations-submit,
.otreservations-submit.read-more-button, .widget_tag_cloud a.btn--text, .widget_tag_cloud a.read-more-button, .btn.read-more-button,
a:hover > .pixcode--icon, .widget a:hover, blockquote, .meta-list a.btn:hover,
.meta-list a.comments_add-comment:hover, .meta-list .form-submit a#comment-submit:hover,
.form-submit .meta-list a#comment-submit:hover, .meta-list a.wpcf7-form-control.wpcf7-submit:hover,
.meta-list a.otreservations-submit:hover, .meta-list .widget_tag_cloud a:hover, .widget_tag_cloud .meta-list a:hover, .btn.btn--text:hover,
.article__content a:not([class]), .article__content a:hover:not([class]):hover,
.article__header .article__headline .headline__description .star, .read-more-button, .read-more-button:hover, .shop-categories a.active,
body.woocommerce ul.products li.product .product__button, body.woocommerce ul.products li.product .added_to_cart,
body.woocommerce ul.products li.product a.added_to_cart, body.woocommerce ul.products li.product .price ins,
.single-product .entry-summary .price span, body.woocommerce .star-rating span:before, .comment-reply-link,
.nav.nav--items-social a:hover:before, .sidebar--main .widget [class*="social"] > ul a:hover:before, .widget [class*='social'] > ul a:hover:before,
.site-footer .separator--flower { color: #c59d5f; }
.btn--primary, .shop-menu-item .shop-items-number, .comments_add-comment, .form-submit #comment-submit, .btn:hover, .wpcf7-form-control.wpcf7-submit:hover,
.pagination li a:hover, form.shipping_calculator button.button:hover, .otreservations-submit:hover, .pixcode--icon.square:hover, .pixcode--icon.circle:hover,
.sidebar--footer__accent, .copyright-area.copyright-area__accent, .menu-list__item-highlight-title,
.promo-box__container { background-color: #c59d5f; }
body.woocommerce button.button.alt:hover, body.woocommerce-page #respond input#submit:hover,
body.woocommerce div.woocommerce-message .button:hover, td.actions input.button:hover, body.woocommerce-page input.button:hover,
body.woocommerce-page input.button.alt:hover, a:hover > .pixcode--icon.circle, a:hover > .pixcode--icon.square { background: #c59d5f; }
.tabs__nav a.current, .tabs__nav a:hover, .btn.btn--text, .btn--text.comments_add-comment, .comments_add-comment.read-more-button,
.form-submit .btn--text#comment-submit, .form-submit #comment-submit.read-more-button,
.btn--text.wpcf7-form-control.wpcf7-submit, .wpcf7-form-control.wpcf7-submit.read-more-button,
.btn--text.otreservations-submit, .otreservations-submit, .read-more-button,
.widget_tag_cloud a.btn--text, .widget_tag_cloud a.read-more-button, .btn.read-more-button, blockquote, .article__content a:not([class]), .shop-categories a.active,
body.woocommerce ul.products li.product .product__button, body.woocommerce ul.products li.product .added_to_cart, .menu-list__item-highlight-wrapper:before { border-color: #c59d5f; }
select:focus, textarea:focus, input[type="text"]:focus,
input[type="password"]:focus, input[type="datetime"]:focus,
input[type="datetime-local"]:focus, input[type="date"]:focus,
input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus,
input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus,
input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .form-control:focus { outline-color: #c59d5f; }
.copyright-area.copyright-area__accent svg path { fill: #c59d5f; }
body, .up-link { color: #515150; }
.up-link:before { border-color: #515150; }
h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .article-archive .article__title a, .article-archive .article__title a:hover { color: #262526; }
.nav--main a,
.headroom--not-top .nav--main a,
.nav.nav--items-social a:before,
.headroom--not-top .nav.nav--items-social a:before { color: #262526; }
.article__header .article__headline .headline__primary,
.article__header .article__headline .headline__description * { color: #ffffff; }
.site-header, .site-header.headroom--not-top, .sub-menu, .headroom--not-top .sub-menu { background-color: #ffffff; }
.site-header, .site-header.headroom--not-top {background-image: none;}

.page .article__content, .up-link, html, .menu-list__item-title .item_title, .menu-list__item-price, .desc__content { background-color: #ffffff; }
.page .article__content, html {background-image: none;}


@media  screen and (min-width: 900px) { 

	.site-header { padding-top: 0px; }

	.nav--main > .menu-item > a { padding-left: 30px; }

	body .covers .article__parallax { left: 12px; }

}

@media screen and (min-width: 900px)  { 

	.site-header { padding-bottom: 0px; }

	.nav--main > .menu-item > a { padding-right: 30px; }

}

@media  screen and (min-width: 900px)  { 

	#page { margin-top: 0px; }

	.article__header + .article--page{
		margin-top: -12px;
}

}

@media  screen and (min-width : 900px) { 

	#page { top: 0px; }

}

@media screen and (min-width: 900px) { 

	body > .page, .site-header, .site-footer { border-width: 12px; }

}

@media   screen and (min-width: 900px) { 

	body .covers .article__parallax { right: 12px; }

}

@media screen and (min-width : 900px) { 

	body .covers { margin-left: 12px; }

}

@media  only screen and (min-width: 900px) { 

	.page .type-page .article__content { padding-top: 78px; }

	.sidebar--main { width: 300px; }

}

@media only screen and (min-width: 900px)  { 

	.page .type-page .article__content { padding-bottom: 78px; }

	.page-content.has-sidebar:after { right: 300px; }

}

@media only screen and (min-width : 900px) { 

	.page-content.has-sidebar .page-content__wrapper { margin-right: 300px; }

}

@media  only screen and (min-width : 900px) { 

	.page-content.has-sidebar{
		margin-right: -300px;
}

}
</style>
		<style type="text/css" id="wp-custom-css">
			#footer-widget-area .widget-area{ 
    text-align: center;
}
		</style>
	<script type="text/javascript">
;(function($){
                                            
})(jQuery);
</script>

	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '258163565002420');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=258163565002420&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<style type="text/css" media="all" id="my">                                                                               
                .ogdlpmhglpejoiomcodnpjnfgcpmgale_default, body, html {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEVElEQVRYR73XfUwbZRwH8O9TWt7au0MZblTC69oSHDqRVXmRtw4migzQKWRhyHATt0TItmRZlhCMuBkXQ1iWTYg42BY357ZkmUtU/ENjTNR/jP5hQseWOd5KW0rv2tJS2p65Apuk5WXQ9kmaS673/L6fy6997jmiZbnfePBhvNNZkh4XZ0GIB9GyHH/5yreora24qaSpakIIH0qDF5CR+Sr6ujugzn3hIyVDtYUUMMhysxnZO8WM1Y7rA/18QpL8LQVFXQsVgngB6iqxe9yI9LQkXLn9hS0qSpqnekL2VygQRMtZnBnqKonLbAUmzXilUoOu3pP3RWEitYKiDMFGCAD7lpdqIp2OGWB4wpvXeqwZBw41/cwNUaXZ2WQ2mIhHAOcsoDcB9hkQQnD2wiloygvOKRnmQHABZm762bw3oxwzTsAyDZhYb55UFo2r330JhWpzszKG6g4WQvgbWp7L3yWz22cAtwcYmWuDMBKTE3B9oM9JP8lsV9H0L8FALAYICROTgMP5MCu3UI3er0/rw6MitqVFRz8INEIAsFkFtbTVNj1X22IDTNyinIb36nD848N/ymyyfLmczF8YGArRmllzVlEdY7XO13W7gRG9T/WTp9tQU1dxVRXDvB2Y6LkqvgA/bRBOhYdLcPFmN7aqM4+raPpEoBBCC4zqkt2xZvZ/D0LOBkwtboMQGLdxA2782O/ZJH+qSkHTtwKB8A9wuYFR3zYIgZnPZ+CrWz1cpDgyRxFL/bNehH+AUFU3CQhrg5+xc1c5Pj374VAkeHVSTMzUehACQJdTWr9xcn4BeliMswJTS+9Pjra3oOng7gEFQ5cTQtxrRSwNWKYNQphIJELP5U68rMntVDH0oTUDBlluPK9szybjpNm3xrgREJ4RSwyaoXDthz4+aXNio4qm+9eCEB5GI/k7Gp7WG0y+81krYF5+m5iqSMY33593ULS0SMkwvz8uYnmAywWMrrwlKCrNw+eXOscQId6WLpWOPQ6CaM3ccMFrexN0E0b/81Zow8Kk/R804HDbwT/GTKbC4pQUx2oRwkr4b2HFu4njOt873RAbg66OI3A5ZqCfMMKgM3iPep0RhvmjfsIA+/Rc3mfdHah4Y0efiqEb1w2gZNG42HMCGaq0Dj6M/AS3W04IiRc+Ho9HTkDiCRDP87zcYrFFCyCOtWJr9haTkqFjVw9guXsllftSRkYf7QMiIsLRe6Yd6qzMLiVDta5U7K7JxLg9ErlHjHgJ8QynMcydleYsfC+sA3dLKvelLgDCwkQ4c+oYSgpfvKSkqT3BflHxAjSV+1OHR3Ve1CftLah5XXNbQVNVhBDXau9krdcRLctqy6rfV9x/MIajrY3YW1/9q8VmLcuWywO68VgKSO6w3GBpdbOyrDgHR1re+VtCyQpTCPGzLK71HpefJ7wZDfZeuKFsqq++FyER5ydLpePBifJfVfgNnOd5vthFsP0ZhhkKZbiQ9R+WCuswK/OKYQAAAABJRU5ErkJggg==") 0 0 , auto !important;}              
                input[type="date"], input[type="time"], input[type="datetime-local"], input[type="month"] {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEVElEQVRYR73XfUwbZRwH8O9TWt7au0MZblTC69oSHDqRVXmRtw4migzQKWRhyHATt0TItmRZlhCMuBkXQ1iWTYg42BY357ZkmUtU/ENjTNR/jP5hQseWOd5KW0rv2tJS2p65Apuk5WXQ9kmaS673/L6fy6997jmiZbnfePBhvNNZkh4XZ0GIB9GyHH/5yreora24qaSpakIIH0qDF5CR+Sr6ujugzn3hIyVDtYUUMMhysxnZO8WM1Y7rA/18QpL8LQVFXQsVgngB6iqxe9yI9LQkXLn9hS0qSpqnekL2VygQRMtZnBnqKonLbAUmzXilUoOu3pP3RWEitYKiDMFGCAD7lpdqIp2OGWB4wpvXeqwZBw41/cwNUaXZ2WQ2mIhHAOcsoDcB9hkQQnD2wiloygvOKRnmQHABZm762bw3oxwzTsAyDZhYb55UFo2r330JhWpzszKG6g4WQvgbWp7L3yWz22cAtwcYmWuDMBKTE3B9oM9JP8lsV9H0L8FALAYICROTgMP5MCu3UI3er0/rw6MitqVFRz8INEIAsFkFtbTVNj1X22IDTNyinIb36nD848N/ymyyfLmczF8YGArRmllzVlEdY7XO13W7gRG9T/WTp9tQU1dxVRXDvB2Y6LkqvgA/bRBOhYdLcPFmN7aqM4+raPpEoBBCC4zqkt2xZvZ/D0LOBkwtboMQGLdxA2782O/ZJH+qSkHTtwKB8A9wuYFR3zYIgZnPZ+CrWz1cpDgyRxFL/bNehH+AUFU3CQhrg5+xc1c5Pj374VAkeHVSTMzUehACQJdTWr9xcn4BeliMswJTS+9Pjra3oOng7gEFQ5cTQtxrRSwNWKYNQphIJELP5U68rMntVDH0oTUDBlluPK9szybjpNm3xrgREJ4RSwyaoXDthz4+aXNio4qm+9eCEB5GI/k7Gp7WG0y+81krYF5+m5iqSMY33593ULS0SMkwvz8uYnmAywWMrrwlKCrNw+eXOscQId6WLpWOPQ6CaM3ccMFrexN0E0b/81Zow8Kk/R804HDbwT/GTKbC4pQUx2oRwkr4b2HFu4njOt873RAbg66OI3A5ZqCfMMKgM3iPep0RhvmjfsIA+/Rc3mfdHah4Y0efiqEb1w2gZNG42HMCGaq0Dj6M/AS3W04IiRc+Ho9HTkDiCRDP87zcYrFFCyCOtWJr9haTkqFjVw9guXsllftSRkYf7QMiIsLRe6Yd6qzMLiVDta5U7K7JxLg9ErlHjHgJ8QynMcydleYsfC+sA3dLKvelLgDCwkQ4c+oYSgpfvKSkqT3BflHxAjSV+1OHR3Ve1CftLah5XXNbQVNVhBDXau9krdcRLctqy6rfV9x/MIajrY3YW1/9q8VmLcuWywO68VgKSO6w3GBpdbOyrDgHR1re+VtCyQpTCPGzLK71HpefJ7wZDfZeuKFsqq++FyER5ydLpePBifJfVfgNnOd5vthFsP0ZhhkKZbiQ9R+WCuswK/OKYQAAAABJRU5ErkJggg==") 0 0, auto !important;}                                                                              
                [type="search"]::-webkit-search-cancel-button, [type="search"]::-webkit-search-decoration { url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0, auto  !important;}                
                input::-webkit-contacts-auto-fill-button {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEVElEQVRYR73XfUwbZRwH8O9TWt7au0MZblTC69oSHDqRVXmRtw4migzQKWRhyHATt0TItmRZlhCMuBkXQ1iWTYg42BY357ZkmUtU/ENjTNR/jP5hQseWOd5KW0rv2tJS2p65Apuk5WXQ9kmaS673/L6fy6997jmiZbnfePBhvNNZkh4XZ0GIB9GyHH/5yreora24qaSpakIIH0qDF5CR+Sr6ujugzn3hIyVDtYUUMMhysxnZO8WM1Y7rA/18QpL8LQVFXQsVgngB6iqxe9yI9LQkXLn9hS0qSpqnekL2VygQRMtZnBnqKonLbAUmzXilUoOu3pP3RWEitYKiDMFGCAD7lpdqIp2OGWB4wpvXeqwZBw41/cwNUaXZ2WQ2mIhHAOcsoDcB9hkQQnD2wiloygvOKRnmQHABZm762bw3oxwzTsAyDZhYb55UFo2r330JhWpzszKG6g4WQvgbWp7L3yWz22cAtwcYmWuDMBKTE3B9oM9JP8lsV9H0L8FALAYICROTgMP5MCu3UI3er0/rw6MitqVFRz8INEIAsFkFtbTVNj1X22IDTNyinIb36nD848N/ymyyfLmczF8YGArRmllzVlEdY7XO13W7gRG9T/WTp9tQU1dxVRXDvB2Y6LkqvgA/bRBOhYdLcPFmN7aqM4+raPpEoBBCC4zqkt2xZvZ/D0LOBkwtboMQGLdxA2782O/ZJH+qSkHTtwKB8A9wuYFR3zYIgZnPZ+CrWz1cpDgyRxFL/bNehH+AUFU3CQhrg5+xc1c5Pj374VAkeHVSTMzUehACQJdTWr9xcn4BeliMswJTS+9Pjra3oOng7gEFQ5cTQtxrRSwNWKYNQphIJELP5U68rMntVDH0oTUDBlluPK9szybjpNm3xrgREJ4RSwyaoXDthz4+aXNio4qm+9eCEB5GI/k7Gp7WG0y+81krYF5+m5iqSMY33593ULS0SMkwvz8uYnmAywWMrrwlKCrNw+eXOscQId6WLpWOPQ6CaM3ccMFrexN0E0b/81Zow8Kk/R804HDbwT/GTKbC4pQUx2oRwkr4b2HFu4njOt873RAbg66OI3A5ZqCfMMKgM3iPep0RhvmjfsIA+/Rc3mfdHah4Y0efiqEb1w2gZNG42HMCGaq0Dj6M/AS3W04IiRc+Ho9HTkDiCRDP87zcYrFFCyCOtWJr9haTkqFjVw9guXsllftSRkYf7QMiIsLRe6Yd6qzMLiVDta5U7K7JxLg9ErlHjHgJ8QynMcydleYsfC+sA3dLKvelLgDCwkQ4c+oYSgpfvKSkqT3BflHxAjSV+1OHR3Ve1CftLah5XXNbQVNVhBDXau9krdcRLctqy6rfV9x/MIajrY3YW1/9q8VmLcuWywO68VgKSO6w3GBpdbOyrDgHR1re+VtCyQpTCPGzLK71HpefJ7wZDfZeuKFsqq++FyER5ydLpePBifJfVfgNnOd5vthFsP0ZhhkKZbiQ9R+WCuswK/OKYQAAAABJRU5ErkJggg==") 0 0, auto  !important;}                
                .paper-button, .ytp-progress-bar-container, input[type=submit], :link, :visited {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0, auto !important;}                
                a > * {url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0, auto !important;}                               
                input:read-only {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEVElEQVRYR73XfUwbZRwH8O9TWt7au0MZblTC69oSHDqRVXmRtw4migzQKWRhyHATt0TItmRZlhCMuBkXQ1iWTYg42BY357ZkmUtU/ENjTNR/jP5hQseWOd5KW0rv2tJS2p65Apuk5WXQ9kmaS673/L6fy6997jmiZbnfePBhvNNZkh4XZ0GIB9GyHH/5yreora24qaSpakIIH0qDF5CR+Sr6ujugzn3hIyVDtYUUMMhysxnZO8WM1Y7rA/18QpL8LQVFXQsVgngB6iqxe9yI9LQkXLn9hS0qSpqnekL2VygQRMtZnBnqKonLbAUmzXilUoOu3pP3RWEitYKiDMFGCAD7lpdqIp2OGWB4wpvXeqwZBw41/cwNUaXZ2WQ2mIhHAOcsoDcB9hkQQnD2wiloygvOKRnmQHABZm762bw3oxwzTsAyDZhYb55UFo2r330JhWpzszKG6g4WQvgbWp7L3yWz22cAtwcYmWuDMBKTE3B9oM9JP8lsV9H0L8FALAYICROTgMP5MCu3UI3er0/rw6MitqVFRz8INEIAsFkFtbTVNj1X22IDTNyinIb36nD848N/ymyyfLmczF8YGArRmllzVlEdY7XO13W7gRG9T/WTp9tQU1dxVRXDvB2Y6LkqvgA/bRBOhYdLcPFmN7aqM4+raPpEoBBCC4zqkt2xZvZ/D0LOBkwtboMQGLdxA2782O/ZJH+qSkHTtwKB8A9wuYFR3zYIgZnPZ+CrWz1cpDgyRxFL/bNehH+AUFU3CQhrg5+xc1c5Pj374VAkeHVSTMzUehACQJdTWr9xcn4BeliMswJTS+9Pjra3oOng7gEFQ5cTQtxrRSwNWKYNQphIJELP5U68rMntVDH0oTUDBlluPK9szybjpNm3xrgREJ4RSwyaoXDthz4+aXNio4qm+9eCEB5GI/k7Gp7WG0y+81krYF5+m5iqSMY33593ULS0SMkwvz8uYnmAywWMrrwlKCrNw+eXOscQId6WLpWOPQ6CaM3ccMFrexN0E0b/81Zow8Kk/R804HDbwT/GTKbC4pQUx2oRwkr4b2HFu4njOt873RAbg66OI3A5ZqCfMMKgM3iPep0RhvmjfsIA+/Rc3mfdHah4Y0efiqEb1w2gZNG42HMCGaq0Dj6M/AS3W04IiRc+Ho9HTkDiCRDP87zcYrFFCyCOtWJr9haTkqFjVw9guXsllftSRkYf7QMiIsLRe6Yd6qzMLiVDta5U7K7JxLg9ErlHjHgJ8QynMcydleYsfC+sA3dLKvelLgDCwkQ4c+oYSgpfvKSkqT3BflHxAjSV+1OHR3Ve1CftLah5XXNbQVNVhBDXau9krdcRLctqy6rfV9x/MIajrY3YW1/9q8VmLcuWywO68VgKSO6w3GBpdbOyrDgHR1re+VtCyQpTCPGzLK71HpefJ7wZDfZeuKFsqq++FyER5ydLpePBifJfVfgNnOd5vthFsP0ZhhkKZbiQ9R+WCuswK/OKYQAAAABJRU5ErkJggg==") 0 0 , auto !important; }               
                img, button {url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==")  9 0, auto !important; }                              
                ::-webkit-scrollbar-button {cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0,  auto !important;}                
                .ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer, ::-webkit-file-upload-button{cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0,  auto !important;}
                button, .ytp-volume-panel{cursor:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0,  auto !important;}
                #myogdlpmhglpejoiomcodnpjnfgcpmgale .icon { cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEn0lEQVRYR+WXf0yUdRzH389z90jhj35YTimwJO80EMRpK2OaWg5aRRDInEAysI2VhZsIWwMmNEASkgip5hk6KbaSRrKatQYFlRMsfgjB3XHB5OehCMdxx93zqz13A+58juMBKv/o8+fd58fr3p/v9/08R0BqyBXBAHIAYgvAd4FHLlh1hdTy2fIIaQ0U2yBHXWRMmMfel3ah+VobPikqA2OxxIDVlkvr4TpLGoBccfHF8L0Rp87kTHcpKVChKPdjDehOxb8PQClbM/JS/GMS903P+u3nBrwekcSCVt8DgFkohDQFKMX1jBOpfjEJUdNzrtQ1IC48iQMtvxdot/4fAI75xSTMrOAuKHBXAcSH8D9WQAzQ1NiKfSHxHHjiJwD3AfxlMJwKMvIISASDJ4bAc8VgNdXuDqjEWyAGEJpWnKvEUL8eS5d74ouyStzo7uX8AjeSYVGh0Gm68eWFKrA0Ew9WU7Y4J3ThA3c2NJnM0HTo4B+wATK5DJOTkygtVKG04DM9OC4XpGwNeLYerFZQhJ+qX5QC7qRlWRZ/demQnVYI/eBNrHz4ATQ1XIfVYq0Co34NACvUOwD4ekOOJ8AwHUDPgFNzStmanpfiH+vghHMZD8/z6O/rc0rruzGApAMpGB+dSATbqZoCoCBTfAoScQBBgudZ8DgNVp0MgLN1WACAUDY4MABBCccoyC5F9cXLFaDV++0A8vVZq1avSi8uO4GALX64UteII2+8i9GRsc9Bd8baIChlS3ru0U2xh6Ln+uFO3+uHhkDTtNNnxflnUFle/TUYdYQdgFJ2Hz+Ztnb/QWEt9mhr7kB81FsCRDnozjhQyqaFAAzr9bBanR8TYgC5crhIlftQ6KvPO5G2Nf+J+KjDGB0ZPQ9g87HMdwISDwuCSA9pAJSiYuvTQdHnKk+DWkI5dW/5ow2HopNxe2SUzylKJyIPvCJ9OgBpK4CvNyh5/e6QHT7FZ/NEEGaTGTptD/wCNsxr+GyHULwCW9v160CRNXtCdvh86AJi3pMFp3FxDYU+swD88xAWiwU3h4dF7G4AZiBmW8d8lBgbG4NxfFxUUvheKS595egDohT7OhYDIcgvmBDH2X3MMVLfzMbV+sZ8MJpUuw+4jMVBjBsMMBgMos5WixXhuw/CNG4MA6v9xg3A1DqI2j0hO71PqXLg4eEhaQNmsxkjt265zP2u6kfkZ3x0G8zEI0CveQ6AmTPx7K6nfPKK07F8xQobiEwmEw0QPF/YudFodDncNGFGQlQyBvuGssCoM6eSJDyO7evYtj3IJzP/KJYu87QByCkKJEkK9w0Mw4g835GCYzlkpxWg9odftKCNgUC/aR4AQurja0FR33p5r3kyLettbAraKGkdQhJNMzh5vATfX6oxgGGCAV2rY7EEBabSvTwhW/YBSCLxuRe2k5ExL8Mv0L07tvzejpL3z0Ld3tUHhgkDuq7dST4PgKlS2x/VDAChj671km19ZjPWKR7DgyvvB0XJYTZPokfXi19rr6KzTSu8W1wAy6UAWrErzX4NpSjs6w2SDAdJ7ARB+IPnVwNYAhBGgO8A+Bow3HmgS+uu29/dMko/9xkC9wAAAABJRU5ErkJggg==") 9 0, auto !important; }
                                                
                </style><style class="blockbyte-bs-style" data-name="content">body>div#blockbyte-bs-indicator>div{opacity:0;pointer-events:none}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible,body>iframe#blockbyte-bs-overlay.blockbyte-bs-visible{opacity:1;pointer-events:auto}body.blockbyte-bs-noscroll{overflow:hidden !important}body>div#blockbyte-bs-indicator>div{position:absolute;transform:translate3d(-40px, 0, 0);top:0;left:0;width:40px !important;height:100%;background:rgba(0,0,0,0.5);border-radius:0 10px 10px 0;transition:opacity 0.3s, transform 0.3s;z-index:2}body>div#blockbyte-bs-indicator>div>span{-webkit-mask:no-repeat center/32px;-webkit-mask-image:url(chrome-extension://jdbnofccmhefkmjbkkdkfiicjkgofkdh/img/icon-bookmark.svg);background-color:#ffffff;position:absolute;display:block;top:0;left:0;width:100%;height:100%}body>div#blockbyte-bs-indicator[data-pos='right']{left:auto;right:0}body>div#blockbyte-bs-indicator[data-pos='right']>div{transform:translate3d(40px, 0, 0);left:auto;right:0;border-radius:10px 0 0 10px}body>div#blockbyte-bs-indicator.blockbyte-bs-fullHeight>div{border-radius:0}body>div#blockbyte-bs-indicator.blockbyte-bs-hover>div{transform:translate3d(0, 0, 0);opacity:1}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb{height:100% !important;top:0 !important}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div{background:transparent}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div>span{-webkit-mask-position-y:20px}body>iframe#blockbyte-bs-sidebar{width:350px;max-width:none;height:0;z-index:2147483646;background-color:rgba(0,0,0,0.6) !important;border:none;display:block !important;transform:translate3d(-350px, 0, 0);transition:width 0s 0.3s, height 0s 0.3s, opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar[data-pos='right']{left:auto;right:0;transform:translate3d(350px, 0, 0)}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible{width:calc(100% + 350px);height:100%;transform:translate3d(0, 0, 0);transition:opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask{background:none !important}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask:not(.blockbyte-bs-hover){width:calc(350px + 50px)}body>iframe#blockbyte-bs-overlay{width:100%;max-width:none;height:100%;z-index:2147483647;border:none;background:rgba(0,0,0,0.5) !important;transition:opacity 0.3s}
</style><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/38/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/38/1/util.js"></script></head>






    
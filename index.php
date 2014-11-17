<?php 
if (isset($_GET['choice'])) { // If the choice variable is set in the URL variable (if they choose a style)
  $choice = $_GET['choice']; // Put choice URL variable value into a local PHP variable $choice
  if ($choice == "ladybug" || $choice == "cardinal" || $choice == "default" || $choice == "high contrast" || $choice == "alien") { // Make sure the theme they choose exists
      setcookie("sitestyle", $choice, time()+60*60*24*100, "/"); // COOKIE SET FOR 30 DAYS
      header("location: index.php"); // Send the user anywhere here after setting theme
      exit(); // Terminate this script and page
  }
}
?>
<?php 
include 'style/css_cookie_check.php'; // Check if the user has a style cookie set and access its value
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="cueamac" content="online voting system cuea">
<meta name="cueamac" content="HTML,CSS,XML,JavaScript">
<meta name="cueamac" content="cueamac">
<link rel="icon" type="Image/png" href="Images/fire.ico">
    <meta charset="utf-8">
    <title>Cueamac</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->

<link href="style/<?php echo $styleChoice; ?>/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/index.css">
 <link href="style/<?php echo $styleChoice; ?>/style.css" rel="stylesheet" type="text/css" />
   
    
    <style type="text/css">
   section{
            color:#FFFFFF;
            height:80%;
          	width: 60%;
          	display: block;
          	background-color: rgba(0,0,0,0.5);
          	border-radius: 50% 0% 50% 0%;
          	letter-spacing: normal;
          	vertical-align: middle;
          	word-spacing: normal;
          	white-space: normal;
          	box-shadow: 0px 0px 5px 2px #FFFFFF;
          	margin:100px;
          	margin-right: 20%;
          	margin-bottom: 10%;
          	margin-left: 30%;
          	padding:10%;
            padding-top:13%;
            float:right;
          	clear: both;
      }

    </style>
</head>
<header><link rel="icon" type="Image/png" href="Images/fire.ico"></header>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="register.html">Register</a></li>

     
    </ul>
          
       <!--Start Of Sign In Drop Down Menu-->
        <ul class="nav navbar-nav" >
            <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
              <form method="post" action="Scripts/PHP/login.php" accept-charset="UTF-8" role="form">
                <input style="margin-bottom: 15px;" type="text" onkeypress="return restrictCharacters(this, event, integerOnly);"  required placeholder="Registration #" id="regNo" name="regno" maxlength="7">
                <input style="margin-bottom: 15px;" type="password" required placeholder="Password" id="password" name="password">
                <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                <label class="string optional" for="user_remember_me"> Remember me</label>
                <input name="login" class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                <label style="cursor:default;text-align:center;margin-top:5px">Welcome To CueaMac.</label>
                <a onclick="window.location='register.html'"><label style="cursor: pointer;text-align:center;margin-top:5px" >Haven't Registered?</label></a>
              </form>
            </div>
          </li>
          </ul>
           <!--End Of Sign In Drop Down Menu-->


    <ul class="nav navbar-nav navbar-right">
                    
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
        About
        <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="aboutpage.html">Team</a></li>
            <li><a href="#">Cueamac</a></li>
            <li><a onclick="window.open('http://www.cuea.edu')" style="cursor: pointer;" >
             Catholic University Of Eastern Africa</a></li>
            <li><a href="#">E-Soko</a></li>
        </ul>
       </li>
        
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdown-menu" role="menu" >
              Custom Themes
                <b class="caret"></b>
                 </a>
                 <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php?choice=cardinal">Normal</a></li>
                  <li><a href="index.php?choice=high contrast">Dude</a></li>
                  <li><a href="index.php?choice=ladybug">Chix</a></li>
                  <li><a href="index.php?choice=alien">Alien</a></li>
                </ul>
       </li>



       <li><a href="#contact.html">Contact</a></li>
    </ul>
  </div>
  </div>

</nav>

    <!--Designing a info platform using panels-->
        <section>
         <p><span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         </p>
          <blockquote>
          <p>Hello and welcome to <strong>Effievote</strong> </p>

          </blockquote>
            <p>Effie#Vote is an online voting system designed to serve the Catholic University Of East Africa community.</p>
              <p>
              Register and vote...
              Thank you.
            </p>
           <p><span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
          <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         <span class="glyphicon glyphicon-leaf"></span>
         </p>
        </section>



    <!--End-->
 
   <!--<form action="/cgi-sys/entropysearch.cgi" target=searchwindow>
  Search Query <input type="text" name="query" value="">
  <input type="hidden" name="user" value="cueamac">
  <input type="hidden" name="basehref" value="http://cueamac.com">
  <input type="hidden" name="template" value="default">
  <input type="submit" value="Search">
  </form>-->
    
    <!--
    Carousel 
    ================================================== 
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
     
     
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="Images/084.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome To Cueamac.</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="register.html" role="button">Register Now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="style/ladybug/background.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Register To Vote</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="style/cardinal/background.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Vote On Your Mobile Device.</h1>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only"></span>
      </a>
    </div>
     /.carousel -->
     <!--Loading scripts-->
 <script src="Scripts/JavaScript/jquery-1.11.1.js"></script>
 <script src="scripts/javascript/bootstrap.js"></script>

  <script src="Scripts/JavaScript/disablepaste.js"></script>


 <script src="Scripts/JavaScript/keys.js"></script>
<!-- ClickDesk Live Chat Service for websites -->
<script type='text/javascript'>
var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyDgsSBXVzZXJzGJeZ0nsM');
var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
'http://my.clickdesk.com/clickdesk-ui/browser/');
var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
</script>
<!-- End of ClickDesk -->
<!--<script type="text/javascript">
$(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});.;.
</script>-->
<script>
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!--End-->
<footer>
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">Copyright © CueaMac 2014 
           <a href="http://cueamacofficial.com" target="_blank" >CUEAMAC</a>
      </p>
      
      <a onclick="window.open('https://www.youtube.com/channel/UCG5Qu1b096inJgO99t-s6Wg')" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  Subscribe on YouTube</a>
    </div>
    
    
  </div>
  </footer>
</body>



 


</html>
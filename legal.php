<!DOCTYPE html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<title>P O L L - L A N D</title>
<style>
html { 
  background: url(bckg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="login.php" class="w3-bar-item w3-button">Sign In</a>
  <a href="logout.php" class="w3-bar-item w3-button">Sign Out</a>
  <a href="register.php" class="w3-bar-item w3-button">Create an Account</a>
  <a href="reset-password.php" class="w3-bar-item w3-button">Reset Password</a>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="Cat.php" class="w3-bar-item w3-button">Categories</a>
  <a href="map.php" class="w3-bar-item w3-button">Create a poll</a>
  <a href="whatsnew.php" class="w3-bar-item w3-button">Whats New?</a>
  <a href="legal.php" class="w3-bar-item w3-button">TOA / Legal</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-left" onclick="openLeftMenu()">&#9776;</button>
  <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
  <div class="w3-container">
  <h1><center><a href="homepage.php" class="w3-bar-item w3-button">POLL - LAND</a></center></h1>
    <h6><center>click to go back</center></h6>
  </div>
</div>
<div class="w3-container"> 
<div style= "text-align: center">


<p><center><strong> OUR POLOCIES AND INFORMATION </strong></center></p>
<li><center><strong>
  <li>Usernames and passwords stored within our databases will not be used for any reason other than access to the website, however we do hold the right to view the credientals entered into our webapge for security reasons if the need arises</li>
  <li>Poll data will always be unaltered by the devs. The only reason it would be alered would be for a joke on a tilely day.</li>
  <li>We reserve the right as an extremidety of an educational institution to control Poll data inputted and polls made by users and remove such content if it violoates any of the rules and regulations outlined in the student handbook.</li>
  <li>The included offences for the above comment are including but not limited to; foul language, bullying, harassment of any sort and any other action that we the devs or the administration deem innaproporate.</li>
</strong></center></li>

<h1><strong><center>REMEMBER, YOUR SAFTY AND SECURITY ARE OUR TOP PRIORITIES. HOVEVER, REMEMBER TO HAVE FUN AND ENJOY YOURSELVS WHILE USING OUR WEBISTE</center></strong></h1>
<h1><strong><center>Cheers :)</h1></strong></center>
<img src="legal.jpg">

</div>
     













<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
     
</body>
</html>
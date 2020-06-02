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
<title>P O L L - L A N D  ---  C A T A G O R I E S</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<style>
  html { 
  background: url(bckg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: 200px 200px 200px 200px;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 25px 0;
  font-size: 100px;
}

a:link, a:visited {
  background-color:  #ffffff00;
  color: seafoam;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
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
        <h1><center>C A T E G O R I E S</center></h1>
<p><center>What kind of polls do you want to take</center></p>







<div class="grid-container">
  <div class="item1"> <a href="funny.php" class="w3-bar-item w3-button">Funny</a></div>
  <div class="item2"> <a href="serious.php" class="w3-bar-item w3-button">Serious</a></div>
  <div class="item3"> <a href="school.php" class="w3-bar-item w3-button">School</a></div>  
  <div class="item4"> <a href="WYR.php" class="w3-bar-item w3-button">WYR</a></div>
  <div class="item5"> <a href="sports.php" class="w3-bar-item w3-button">Sports</a></div>
  <div class="item6"> <a href="film.php" class="w3-bar-item w3-button">Film</a></div>
  <div class="item7"> <a href="riddles.php" class="w3-bar-item w3-button">Riddles</a></div>
  <div class="item8"> <a href="music.php" class="w3-bar-item w3-button">Music</a></div>
  <div class="item1"> <a href="politics.php" class="w3-bar-item w3-button">Politics</a></div>
  <div class="item2"> <a href="AMQ.php" class="w3-bar-item w3-button">AMQ</a></div>
  <div class="item3"> <a href="RBR.php" class="w3-bar-item w3-button">RBR</a></div>  
  <div class="item4"> <a href="other.php" class="w3-bar-item w3-button">other</a></div>

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
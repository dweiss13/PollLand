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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<script>
         $(document).ready(function(){
          $("button").click(function(){
             $("button.active").toggleClass("active");
           });
         });
      </script>

<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="login.php" class="w3-bar-item w3-button">Sign In</a>
  <a href="logout.php" class="w3-bar-item w3-button">Sign Out</a>
  <a href="register.php" class="w3-bar-item w3-button">Create an Account</a>
  <a href="reset-password.php" class="w3-bar-item w3-button">Reset Password</a>
  <a href="whatsnew.php" class="w3-bar-item w3-button">Whats New?</a>
  <a href="legal.php" class="w3-bar-item w3-button">TOA / Legal</a>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="Cat.php" class="w3-bar-item w3-button">Categories</a>
  <a href="map.php" class="w3-bar-item w3-button">Create a poll</a>
  <a href="rand.php" class="w3-bar-item w3-button">Random poll</a>
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
        <h1><center>poll of the day!</center></h1>
<p><center>Here the poll that you create will be displayed</center></p>
<p><center>What is the best kind of chocloate?</center></p>
<center><input type="radio" id="A1" name="14652" value="Milk" > Milk</center>
<center><input type="radio" id="A2" name="14652" value="Dark"> Dark</center>
<center><input type="radio" id="A3" name="14652" value="White"> White</center>
<center><input type="radio" id="A4" name="14652" value="Mint"> Mint</center>
</div>

<center><button class="button button1" id="demo" onclick="function()">Milk</button></center>
<center><button class="button button2" id="demo" onclick="function()">Dark</button></center>
<center><button class="button button3" id="demo" onclick="function()">White</button></center>
<center><button class="button button4" id="demo" onclick="function()">Mint</button></center>
<center><button class="button button5" id="demo" onclick="function()">pretzel</button></center>
<center><button class="button button6" id="demo" onclick="function()">caramel</button></center>





    



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

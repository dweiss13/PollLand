<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

    $servername = "rbraoit.com";
		$username = "pollland";
		$password = "gS3pRemm9sRtHS1B";
		$dbname = "pollland";
	
    $conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST['question']) && isset($_POST['cat']) == true){
    $title = $_POST['question'];
    $cat = $_POST['cat'];
    $id = $_SESSION['id'];
    $sql = "INSERT INTO question (userid, question, category) 
    VALUES ('$id', '$title', '$cat');";
    
  
    if ($conn->query($sql) === TRUE) {
      $qid = $conn->insert_id;
      
       
        if($_POST['a'] != ""){
          $a = $_POST['a'];
          $sql = "INSERT INTO answers (questid, answers) 
          VALUES ($qid, '$a');";
          if ($conn->query($sql) === TRUE) {
     
        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        }
        if($_POST['b'] != ""){
          $b = $_POST['b'];
        
          $sql = "INSERT INTO answers (questid, answers) 
          VALUES ($qid, '$b');";
           if ($conn->query($sql) === TRUE) {
    
        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
        }
        if($_POST['c'] != ""){
          $c = $_POST['c'];
        
          $sql = "INSERT INTO answers (questid, answers) 
          VALUES ($qid, '$c');";
          if ($conn->query($sql) === TRUE) {

        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
        if($_POST['d'] != ""){
          $d = $_POST['d'];
        
          $sql = "INSERT INTO answers (questid, answers) 
          VALUES ($qid, '$d');";
           if ($conn->query($sql) === TRUE) {
        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
          
        }
      
        
        
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }





?>



<!DOCTYPE html>

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
<div>
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
        <h1><center>Here is where you will create a poll</center></h1>

        <center><h1> Welcome to the poll creating interface </h1></center>
<form method="POST" action="map.php">
<center>
<h3> What is the question / title of your poll? </h3>

  <input type="text" id="title" name="question"><br><br>

<h3> What category does this poll fall under? </h3>

<input type="radio" id="A1" name="cat" value="Funny">Funny<br>
<input type="radio" id="A2" name="cat" value="Serious">Serious<br>
<input type="radio" id="A3" name="cat" value="Cool">Cool<br>
<input type="radio" id="A13" name ="cat" value="School">School<br>
<input type="radio" id="A4" name="cat" value="Would You Rather">Would You Rather<br>
<input type="radio" id="A5" name="cat" value="Sports">Sports<br>
<input type="radio" id="A6" name="cat" value="Films">Films<br>
<input type="radio" id="A7" name="cat" value="Music">Music<br>
<input type="radio" id="A8" name="cat" value="Riddles">Riddles<br>
<input type="radio" id="A9" name="cat" value="Politics">Politics<br>
<input type="radio" id="A10" name="cat" value="AMQ">AMQ<br>
<input type="radio" id="A11" name="cat" value="RBR">RBR<br>
<input type="radio" id="A12" name="cat" value="Other">Other<br>



<h3> What are the answers to your poll? </h3>
<label for="Green">Answer 1</label>
  <input type="text" id="Green" name="a"><br><br>

  <label for="Blue">Answer 2</label>
  <input type="text" id="Blue" name="b"><br><br>

  <label for="Red">Answer 3</label>
  <input type="text" id="Red" name="c"><br><br>

  <label for="Purple">Answer 4</label>
  <input type="text" id="Purple" name="d"><br><br>

  <input type="submit">
  </center>
  </form>
  




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
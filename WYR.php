<!DOCTYPE html>
<html>
<title>P O L L - L A N D</title> 
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

.btn-group1 button {
  border: 1px solid green; /* Green border */
  color: black; /* White text */
  padding: 10px 40px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group1:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group1 button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}



.btn-group2 button {
  border: 1px solid green; /* Green border */
  color: black; /* White text */
  padding: 10px 40px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group2:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group2 button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}
</style>



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
     
<h1><center>Would You Rather Polls!</center></h1>

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
<?php
require_once "config.php";
// Initialize the session
 
// Check if the user is logged in, if not then redirect him to login page
$sql = "SELECT * FROM question WHERE category = 'Would You Rather' AND id ORDER BY RAND()  
LIMIT 1";
    $result = $link->query($sql);
    
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()) {
        echo "<center><form method='POST' action='WYR.php'><h1>Polls Polls Polls!<h1><input hidden value='" . $row["id"] . "' name='quest'> <br>";
        $questid = $row["id"];
        echo "Poll Number $questid";
        echo "<h2>" .$row["question"] . "<h2>";
      }
      echo "</center>";
    } else {
			echo "0 results";
    }
$sql = "SELECT * FROM answers WHERE questid = $questid";
    $result = $link->query($sql);

    if ($result->num_rows > 0){
      echo "<center><h2>Your Choices Are....</h2><br>";
      while($row = $result->fetch_assoc()){
        echo '<center><input type="radio" id="'. $row["id"] .
         '" name="cat" value="' . $row["id"] . '">' . $row["answers"] . ' </center><br>';
      }
      echo "<input type='submit'></form></center>";
    }else {
			echo "0 results";
    }
 if(isset($_POST['cat']) && isset($_POST['quest'])){
      $aid = $_POST['cat'];
      $questid = $_POST['quest'];
      $sql = "INSERT INTO polllog (qid, ans)
      VALUES ('$questid', '$aid')";
      if ($link->query($sql) === TRUE) {
    }
  }

?>
</html>
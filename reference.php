<!DOCTYPE html>

	<style>
		form{
                    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
		}
	</style>
	<link rel="stylesheet" href="style.css">
	<body style="background-color:maroon">
    
		<!--The form should go here-->
		<h1>Sign Out Form</h1>
			<form method="GET" action="signoutstudentfile.php">
				<p>ID: <input type="text" name="student"></p>
				<label><div class="radio"><input type="radio" name="location" value="Bathroom" id="Bathroom"> Bathroom<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="Water" id="Water"> Water<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="Nurse" id="Nurse"> Nurse<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="Attendance" id="Attendance"> Attendance<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="Source" id="Source"> Source<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="Guidance" id="Guidance"> Guidance<br></div></label>
				<label><div class="radio"><input type="radio" name="location" value="VPO" id="VPO"> VPO<br></div></label>
				<label><input type="radio" name="location" value="Other"> Other
				<input type="text" name="other" id="Other"><br></label>
	
				<input type="submit">
			</form>
	
	    <?php
		
		
	
	
		$servername = "localhost";
		$username = "signout";
		$password = "password";
		$dbname = "signout";
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		// Check connection: No need for else.  It will quit if the connection thorws an error.
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	
		
	
		if(isset($_GET['student']) && isset($_GET['location'])){
			$sid = $_GET['student'];
			$loc = $_GET['location'];
			if($loc == "Other"){
				$loc = $_GET['other'];
			}
		
			
	
			$sql = "INSERT INTO student_log (student_id, time_out, time_in, loc) 
			VALUES ('$sid', NOW(), NULL, '$loc');";
	
			if ($conn->query($sql)) {
				echo "<p>Thanks for Signing out, be back in Ten Minutes</p>";
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		  
			
		} else if(isset($_GET['id'])){ 
			$id = $_GET['id'];
			$sql = "UPDATE student_log SET time_in = NOW() WHERE id = $id";
			if($conn->query($sql)===FALSE)
				echo "Error";		   
		}
	
		//OUTPUT
		$sql = "SELECT * FROM student_log WHERE time_in IS NULL";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0){
			echo "<table><tr><th>Student ID</th><th>Time Out</th><th>Time In</th><th>Location</th></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" .$row["student_id"]. "</td><td>" .$row["time_out"]. "</td><td>" ."<a href='signoutstudentfile.php?id=".$row["id"]. "'> Return</a>"
				. "</td><td>" .$row["loc"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
			
		
		$conn->close();
		?>
	 
	
		<!--Now Create the Teacher Page!-->
	
	
	</body>
	
</html>
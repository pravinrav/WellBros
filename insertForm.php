<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
	if(!isset($_COOKIE["usr"]))
	{
		// if not logged in, redirect
		header("Location: WellbrosLoginTitle.html");	
	}

	if(isset($_POST["Submit"]))
	{
		// parsing the ini file
		
		$ini_data = parse_ini_file("data.ini.php");
		$pdo = new PDO('mysql:host='.$ini_data["host"].';dbname='.$ini_data["dbname"], $ini_data["user"], $ini_data["password"]);
		
	
		if($pdo)
		{
			// inserting survey information into database
			$statement = $pdo->prepare("INSERT INTO pams_surveys (survey_id, date_added, time_added, mood, stress, energy, hours_slept, minutes_exercise, why_feel, why_stressed, diet) VALUES (NULL, :date_added, :time_added, :mood, :stress, :energy, :hours_slept, :minutes_exercise, :why_feel, :why_stressed, :diet)");
			
			$date = date("Y-m-d"); 
			$time = date("H:i:s"); 
			
			$statement->bindParam(":date_added", $date);
			$statement->bindParam(":time_added", $time);
			$statement->bindParam(":mood",$_POST["mood"]);
			$statement->bindParam(":stress",$_POST["stress"]);
			$statement->bindParam(":energy",$_POST["energy"]);
			$statement->bindParam(":hours_slept",$_POST["sleep"]);
			$statement->bindParam(":minutes_exercise",$_POST["exercise"]);
			$statement->bindParam(":why_feel",$_POST["feel"]);
			$statement->bindParam(":why_stressed",$_POST["whyStressed"]);
			$statement->bindParam(":diet",$_POST["diet"]);
			
			if($statement->execute())
			{
				// inserting date and time of survey attempt into the database
				$statement = $pdo->prepare("SELECT survey_id FROM pams_surveys WHERE date_added=:date_added AND time_added=:time_added");
				$statement->bindParam(":date_added", $date);
				$statement->bindParam(":time_added", $time);
				if($statement->execute())
				{
					$result = $statement->fetchall();
					$survey_id = $result[0][0]; 
					$user_id = $_COOKIE["usr"];
					$statement = $pdo->prepare("INSERT INTO pams_survey_attempts (survey_id, user_id) VALUES ($survey_id, $user_id)");
					if($statement->execute()){
						header("Location: graph.php",true);
					} else {
						echo("didn't work");	
					}
					
				} else {
					// handling connection issues
					
					echo("Sorry, there was an issue accessing the database. Please try again.");
				}	
				
				
			} else {
				echo("Sorry, there was an issue accessing the database. Please try again.");	
			}
			
		} else {
		 echo("No PDO");	
		}
		
		
	} else {
		header("Location: wellBroSurvey.php", true);
	}
?>



</head>
<body>
</body>
</html>
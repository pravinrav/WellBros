<!DOCTYPE html>
<html>
<head>
  <!-- Plotly.js -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


  <style type="text/css">
    body{
      background-color: #59A5EC;
      text-align:center;
      font-size:150%;
    }
    footer.size {
      font-size:50%;
      opacity:50%;
    }
    .styled-select {
        
        height: 29px;
        overflow: hidden;
        width: 50px;
      -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
      border-radius: 5px;
      background-color: #3B8EC2;
      text-align: center;
      color: white;
    }
    div.solid {
      border-style: solid;
      border-radius: 8px;
        margin-right: 400px;
        margin-left: 400px;
      background-color: white;
    }
    h1 {
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
      font-size: 92px;
      padding: 80px 50px;
      text-align: center;
      text-transform: uppercase;
      text-rendering: optimizeLegibility;
    }
    h1.elegantshadow {
      color: #131313;
      background-color: #e7e5e4;
      letter-spacing: .15em;
      text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
    }


</style>
</head>



<body>

<?php 
  if(!isset($_COOKIE["usr"])) {
      header("Location: WellbrosLoginTitle.html",true); 
      // check to see if logged in
    } else {
        $user_id = $_COOKIE["usr"]; 
    }

    // this code fetches the username of the user. 

    $ini_array = parse_ini_file("data.ini.php");
          $host = $ini_array['host']; 
          $dbname = $ini_array['dbname'];
          $user = $ini_array['user'];
          $password = $ini_array['password'];

          //print_r($ini_array);
          $user_id = $_COOKIE["usr"]; 


          $dbh = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);

          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt = $dbh->prepare("SELECT username FROM pams_account_information WHERE user_id =  $user_id");
          $stmt->execute();

          $rows = $stmt->fetchAll();
          $username = $rows[0][0];


?>

<h1> Your Wellbro Tracker! </h1>

<div>
<center><h2> Here is a graph of your wellness information over time, <?php echo $username; ?>!</h2></center>
</div>

<p>

<?php 


  if(!isset($_COOKIE["usr"])) {
    header("Location: WellbrosLoginTitle.html",true); 
  } else {
      $user_id = $_COOKIE["usr"]; 
  }

  try {

          // Process form
          $ini_array = parse_ini_file("data.ini.php");
          $host = $ini_array['host']; 
          $dbname = $ini_array['dbname'];
          $user = $ini_array['user'];
          $password = $ini_array['password'];

          $user_id = $_COOKIE["usr"]; 


          // connection to the database
          $dbh = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);

          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // collecting user information by merging two tables
          $stmt = $dbh->prepare("SELECT * FROM pams_survey_attempts INNER JOIN pams_surveys ON pams_surveys.survey_id = pams_survey_attempts.survey_id WHERE user_id =  $user_id");
          $stmt->execute();

          $rows = $stmt->fetchAll();

          // getting information on each column for plotting

          $time_array = array_fill(0, count($rows), "initialization string"); 
          $mood_rating = array_fill(0, count($rows), -999); 
          $energy_rating = array_fill(0, count($rows), -999); 
          $stress_rating = array_fill(0, count($rows), -999); 
          $sleep_rating = array_fill(0, count($rows), -999); 
          $exercise_rating = array_fill(0, count($rows), -999); 

          for($i = 0; $i < count($rows); $i++) {
             $row_array = $rows[$i];
             $time_val = $row_array["date_added"] . " " . $row_array["time_added"];
             $time_array[$i] = $time_val;  
             $mood_val = $row_array["mood"];
             $mood_rating[$i] = $mood_val; 
             $energy_val = $row_array["energy"];
             $energy_rating[$i] = $energy_val; 
             $stress_val = $row_array["stress"];
             $stress_rating[$i] = $stress_val; 
             $sleep_val = $row_array["hours_slept"];
             $sleep_rating[$i] = $sleep_val; 
             $exercise_val = $row_array["minutes_exercise"];
             $exercise_rating[$i] = $exercise_val; 

          }


          // PHP objects for conversion into JSON (Java Script Object Notation)
          $mood_data = [ [
             "x" => $time_array,
             "y" => $mood_rating,
             "type" => "scatter",
          ] ]; 

          $energy_data = [ [
             "x" => $time_array,
             "y" => $energy_rating,
             "type" => "scatter"  
          ] ]; 

          $stress_data = [ [
             "x" => $time_array,
             "y" => $stress_rating,
             "type" => "scatter"  
          ] ]; 

          $sleep_data = [ [
             "x" => $time_array,
             "y" => $sleep_rating,
             "type" => "scatter"  
          ] ]; 

          $exercise_data = [ [
             "x" => $time_array,
             "y" => $exercise_rating,
             "type" => "scatter"  
          ] ];



          $mood_energy_data = [ [
             "x" => $mood_rating,
             "y" => $energy_rating,
             "type" => "scatter"  
          ] ]; 

          $mood_stress_data = [ [
             "x" => $mood_rating,
             "y" => $stress_rating,
             "type" => "scatter"  
          ] ]; 

          $stress_energy_data = [ [
             "x" => $stress_rating,
             "y" => $energy_rating,
             "type" => "scatter"  
          ] ]; 

          }
          catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
          }  
?>

</p>


  <div id="mood_graph"></div>
  <div id="stress_graph"></div>
  <div id="energy_graph"></div>
  <div id="sleep_graph"></div>
  <div id="exercise_graph"></div>

  <script>
  // mood graph
	var layout = {
	  title: 'Mood Rating Over Time',
	  xaxis: {
	    title: 'Time Point',
	    showgrid: false,
	    zeroline: false
	  },
	  yaxis: {
	    title: 'Mood (Rating from 1-10)',
	    showline: false
	  }
	};
	Plotly.newPlot('mood_graph', <?php  echo json_encode($mood_data)    ?>, layout);

  </script>

  <script>
  // energy graph
  var layout = {
    title: 'Energy Rating Over Time',
    xaxis: {
      title: 'Time Point',
      showgrid: false,
      zeroline: false
    },
    yaxis: {
      title: 'Energy (Rating from 1-10)',
      showline: false
    }
  };
  Plotly.newPlot('energy_graph', <?php  echo json_encode($energy_data)    ?>, layout);

  </script>

<script>
// stress graph
  var layout = {
    title: 'Stress Rating Over Time',
    xaxis: {
      title: 'Time Point',
      showgrid: false,
      zeroline: false
    },
    yaxis: {
      title: 'Stress (Rating from 1-10)',
      showline: false
    }
  };
  Plotly.newPlot('stress_graph', <?php  echo json_encode($stress_data)    ?>, layout);

  </script>

  <script>
// sleep graph
  var layout = {
    title: 'Hours Slept Over Time',
    xaxis: {
      title: 'Time Point',
      showgrid: false,
      zeroline: false
    },
    yaxis: {
      title: 'Hours Slept',
      showline: false
    }
  };
  Plotly.newPlot('sleep_graph', <?php  echo json_encode($sleep_data)    ?>, layout);

  </script>

  <script>
// exercise graph
  var layout = {
    title: 'Minutes Exercise Over Time',
    xaxis: {
      title: 'Time Point',
      showgrid: false,
      zeroline: false
    },
    yaxis: {
      title: 'Minutes of Exercise',
      showline: false
    }
  };
  Plotly.newPlot('exercise_graph', <?php  echo json_encode($exercise_data)    ?>, layout);

  </script>

  <br>
  <center>
  <form action="wellBroSurvey.php"><input type="submit" value="Take Survey"></form>
  </center>
</body>


</html>

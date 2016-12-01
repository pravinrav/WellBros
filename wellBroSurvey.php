<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WellBro Survery</title>
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
  // The purpose of this snippet of code is to retrieve the user's username. 
  if(!isset($_COOKIE["usr"])) {
      header("Location: WellbrosLoginTitle.html",true); 
    } else {
        $user_id = $_COOKIE["usr"]; 
    }

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

<h1 class="elegantshadow">WellBro Survey</h1> 

<p> HI <?php echo $username;?>!!! </p>
<p>Please answer the following to the best of your ability. The following inputs will be shown in a graph. You can track your progress over time and compare your mood to your productivity.</p>
	<form class="register-form" method="post" id="wellBroForm" action="insertForm.php">
    	<div class="solid">
      		<label for="sel1">Mood: 10-Best. 1-Worst.</label>
            <br>
      			<select class="form-control styled-select" id="sel1" name="mood">
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			<option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
      			</select>
		</div>
        <br>
        <div class="solid">
      		<label for="feel">Why do you feel this way?</label>
            <br>
      			<textarea class="form-control" rows="5" cols="60" id="feel" name="feel"></textarea>
    	</div>
        <br>
        <div class="solid">
      		<label for="sel2">Stress: 10-Most. 1-Least.</label>
            <br>
      			<select class="form-control styled-select" id="sel2" name="stress">
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			<option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
      			</select>
		</div>
        <br>
        <div class="solid">
      			<label for="whyStress">Why are you this stressed?</label>
                <br>
      			<textarea class="form-control" rows="5" cols="60" id="whyStress" name="whyStressed"></textarea>
    	</div>
        <br>
        <div class="solid">
      		<label for="sel3">Energy: 10-Most. 1-Least.</label>
            <br>
      			<select class="form-control styled-select" id="sel3" name="energy">
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			<option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
      			</select>
		</div>
        <br>
        <div class="solid">
      		<label for="sel4">Hours of Sleep:</label>
      			<select class="form-control styled-select" id="sel4" name="sleep">
                	<option value="0">0</option>
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			<option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
      			</select>
    	</div>
        <br>
        <div class="solid">
      		<label for="sel5">Minutes of Exercise:</label>
      			<select class="form-control styled-select" id="sel5" name="exercise">
                	<option value="0">0</option>
        			<option value="10">10</option>
        			<option value="20">20</option>
        			<option value="30">30</option>
        			<option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                    <option value="110">110</option>
                    <option value="120">120</option>
                    <option value="130">130</option>
                    <option value="140">140</option>
                    <option value="150">150</option>
                    <option value="160">160</option>
                    <option value="170">170</option>
                    <option value="180">180</option>
                    <option value="190">190</option>
                    <option value="200">200</option>
                    <option value="210">210</option>
                    <option value="220">220</option>
                    <option value="230">230</option>
                    <option value="240">240</option>
      			</select>
    	</div>
        <br>
        <div class="solid">
      		<label for="diet">What have you eaten today?</label>
            <br>
      			<textarea class="form-control" rows="5" cols="60" id="diet" name="diet"></textarea>
    	</div>
        <br>
        <button Name="Submit" type="submit" class="btn btn-default">Submit</button>
        <br>
	</form>
    <footer>
    	<p>WellBro Co.</p>
    </footer>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WellbrosRegistering</title>
</head>
<body>
<?php
// reading in from data.ini. file
$ini_data = parse_ini_file("data.ini.php");

$username = $_POST["usernameNEW"];
$password = crypt($_POST["passwordNEW"], "chickenpotpie");

          $host = $ini_data["host"];  
          $dbname = $ini_data["dbname"];
          $user = $ini_data["user"];
          $db_password = $ini_data["password"];
$sql="";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $db_password);
    // set the PDO error mode to exception
    !$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("INSERT INTO `pams_account_information` (`user_id` ,`username` ,`password`) VALUES (NUll, :username, :password)");	
	$stmt->bindParam(":username",$username);
	$stmt->bindParam(":password",$password);
	$stmt->execute();
    echo ("New record created successfully");
    header("Location: WellbrosLoginTitle.html",true); 
    // new account has been created
 }
	
catch(PDOException $e)
    {
    echo "failed:".$e."<br />".$sql; 
    }

$conn = null;

?>

<p> Please click <a href="WellbrosLoginTitle.html">HERE</a></p>

</body>
</html>
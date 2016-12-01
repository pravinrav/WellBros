<?php 
if(!isset($_COOKIE["usr"]))
	{
		header("Location: WellbrosLoginTitle.html", true);	
	}

$username = $_POST["username"];
$password = crypt($_POST["password"],"chickenpotpie");

$ini_data = parse_ini_file("data.ini.php");
$user = $ini_data["user"];
$db_password = $ini_data["password"];
$host = $ini_data["host"];
$dbname = $ini_data["dbname"];

$dbh = new PDO("mysql:dbname=$dbname;host=$host", $user, $db_password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// checking to see if the login information exists in the database

$stmt = $dbh->prepare("SELECT * FROM pams_account_information WHERE username = :user AND password = :pass");
$stmt->bindParam(':user', $username);
$stmt->bindParam(':pass', $password);


$stmt->execute();

$rows = $stmt->fetchAll();

if (count($rows) >= 1) {
	// creating the cookie. 

	setcookie("usr",$rows[0]["user_id"],time()+60*120);
	header('Location: wellBroSurvey.php', true);
}

else  {

	echo "Invalid login. Try again."; 
}

?>
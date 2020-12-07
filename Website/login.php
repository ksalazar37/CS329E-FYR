<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");
echo 'meow <br>';
// ----------------
// Connect to sql database
// ----------------
$server = "fall-2020.cs.utexas.edu";
$user = "cs329e_bulko_avalon";
$pwd = "area+breath\$Watch";
$dbName = "cs329e_bulko_avalon";
echo "Server: " . $server."<br>";
echo "User: " . $user."<br>";
echo "Server: " . $dbName."<br>";
$mysqli = new mysqli ($server, $user, $pwd, $dbName);
if ($mysqli->connect_errno) {
die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);};
// ----------------
// Fetch stored login info
// ----------------
$command = 'SELECT * FROM FYR_LOGIN';
$result = $mysqli -> query($command);
if (!$result) {
	die("Query failed: ($mysqli->error <br> SQL command = $command");
} 
// -----------------
// Fetch user's login
// -----------------
$email = $_POST["email"];
$psw = $_POST["psw"];
echo $email .'<br>';
echo $psw .'<br>';
// -----------------
// Handle user's login info
// -----------------
$row_cnt = $result ->num_rows;
$loop_ct = 0;
while ($row = mysqli_fetch_assoc($result)){
	if ($email == $row['Email'] || $psw == $row['Password']){
		setcookie($email, $psw, time()+(86400*30),"/");
		header('Location:RecipeSearch.php');
		exit;
	} 
}
echo "<script>confirm('Unknown login info')</script>";
?>
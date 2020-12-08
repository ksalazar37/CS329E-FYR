
<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");

$server = $_GET["server"];
$myuser   = $_GET["myuser"];
$pwd    = $_GET["pwd"];
$dbName = $_GET["dbName"];


// Connect to MySQL Server

$mysqli = new mysqli($server, $myuser, $pwd, $dbName);
if ($mysqli->connect_errno) {
   die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
} 

//Select Database
$mysqli->select_db($dbName) or die($mysqli->error);

// Retrieve data from Query String
 $i1 = $_GET['i1'];
 $i2 = $_GET['i2'];
 $i3 = $_GET['i3'];
 $i4 = $_GET['i4'];
 $i5 = $_GET['i5'];

// Escape User Input to help prevent SQL Injection
$i1 = $mysqli->real_escape_string($i1);
$i2 = $mysqli->real_escape_string($i2);
$i3 = $mysqli->real_escape_string($i3);
$i4 = $mysqli->real_escape_string($i4);
$i5 = $mysqli->real_escape_string($i5);


//build query
//first case senario--------------------------------------

   $query = "SELECT * FROM recipes WHERE ingredients LIKE '%$i1%' AND INGREDIENTS LIKE '%$i2%' AND INGREDIENTS LIKE '%$i3%' AND INGREDIENTS LIKE '%$i4%' AND INGREDIENTS LIKE '%$i5%';";
   
   //Execute query

   $result = $mysqli->query($query) or die($mysqli->error);
   
   //Build Result String
   $display_string = "";
   
 if (mysqli_num_rows($result)==0){
     $display_string .= "No Results";
     echo $display_string;
   }
   else{
     echo '<div id="resultsdiv">';
 echo '<hr>';
   echo '<h3>Here are your results.</h3><br>';
   
   echo '<form method = "post" id="resultsform"';
   $server = "fall-2020.cs.utexas.edu";
    $myuser = "cs329e_bulko_non86";
    $pwd = "mercy-feet7Sullen";
    $dbName = "cs329e_bulko_non86";
    
    echo "<table id='resultstable'>";
   while ($row = $result->fetch_row()) {     
       echo "<tr><td>"; 
     echo "<strong>Recipe Name:</strong> $row[1] <br>";
     echo "<strong>Minutes:</strong> $row[2] <br>";
     echo "<strong>Instructions: </strong>$row[3] <br>";
     echo "<strong>Description:</strong> $row[4] <br>";
     echo "<strong>Ingredients: </strong>$row[5] <br>";
     echo"</td></tr>";
     echo "</br></br>";
 echo "<hr>";
    //echo "<tr> <td><input id='recipeSelected' class=\"buttons\" type = \"button\" onclick = \"ajaxFunction2('$server','$myuser','$pwd','$dbName','$row[0]')\" value = \"$row[0]\"/> $row[1]<br><br> ";
 }}

 echo"</table>";
 echo'</form>';
 echo '<div id="resultsdiv">';
   //if the user clicks an id
   
?>


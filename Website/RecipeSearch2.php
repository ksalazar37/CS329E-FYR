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
      while ($row = $result->fetch_row()) {
        echo " $row[1] <br>";
    }
      

            


?>
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

        $recipeSelected = $_GET["row"];
        $recipeSelected = $mysqli->real_escape_string($recipeSelected);
        $query = "SELECT * FROM recipes WHERE ID = '$recipeSelected';";

        $result = $mysqli->query($query) or die($mysqli->error);


          echo '<strong>Here are your results. </strong><br>';
          while ($row = $result->fetch_row()) {      
            echo " <button value='$row[0]' type='submit' class='buttons' id='recipeID' name='recipeID'>$row[0]</button> $row[1] <br>";
            echo "Minutes: $row[2]";
            echo "Instructions: $row[3]";
            echo "Description: $row[4]";
            echo "Ingredients: $row[5]";
        }


        ?>



<script>
function ajaxFunction2(server,myuser,pwd,dbName,row){
                //var recipeval = document.getElementById('recipeSelected').value;
                        
                        var ajaxRequest;  // The variable that makes Ajax possible!
                        ajaxRequest = new XMLHttpRequest();
                        
                        ajaxRequest.onreadystatechange = function(){
                            if(ajaxRequest.readyState == 4){
                                var ajaxDisplay = document.getElementById('ajaxDiv');
                                ajaxDisplay.innerHTML = ajaxRequest.responseText;
                            }
                            }
                                
                        var queryString = "?row=" + row ;
                        
                        queryString += "&server=" + server + "&myuser=" + myuser + "&pwd=" + pwd  + "&dbName=" + dbName;
                        
                        ajaxRequest.open("GET", "RecipeSearch3.php" + queryString, true);
                        ajaxRequest.send(null);
                }
            }
        </script>
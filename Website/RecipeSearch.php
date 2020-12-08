<?php 
if (!isset($_COOKIE["email"]) && !isset($_COOKIE["psw"])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equip="X-UA-Compatible" content="ie=edge">

    <title> FYR: Recipe Search </title>
    <link rel="stylesheet" href="website.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="website.js" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Londrina Outline|Arvo|Antic Slab|Enriqueta|Aleo|Hepta Slab|Scope One|Quicksand|Alegreya Sans SC|Satisfy|La Belle Aurore|Patrick Hand SC|Itim' rel='stylesheet'>

</head>
<body onload = "initBanner()">
<div class="all">
<div id="navigation" class="navigation">
<table>
<tr>
    <td>
        <div class="logodiv">
            <img id='photo' src="./images/logo.png" width="70" height="70" alt="photo">
        </div>

    </td>
    <td>
        <h1> FYR </h1>
    </td>
    <td>
        <nav>
            <a class="ahome" href="./home.html">Home</a> |
            <a href="./login.html">Log In</a> |
            <a class="aregister" href="./register.html">Register</a> |
            <a href="./connect.html">Connect</a> |
            <a href="./contactus.html">Contact Us</a>
        </nav>
    </td>
</tr>
</table>
</div>

            <script language = "javascript" type ="text/javascript">
            function ajaxFunction(server,myuser,pwd,dbName){
                var i1 = document.getElementById('i1').value;
                var i2 = document.getElementById('i2').value;
                var i3 = document.getElementById('i3').value;
                var i4 = document.getElementById('i4').value;
                var i5 = document.getElementById('i5').value;
                        
                if(i1 == ""){
                    window.alert("You must enter at least one ingredient.");
                }
                
                else{
                    
                        var ajaxRequest;  // The variable that makes Ajax possible!
                        ajaxRequest = new XMLHttpRequest();
                        

                        ajaxRequest.onreadystatechange = function(){
                            if(ajaxRequest.readyState == 4){
                                var ajaxDisplay = document.getElementById('ajaxDiv');
                                ajaxDisplay.innerHTML = ajaxRequest.responseText;
                            }
                            }
                                
                        
                        var queryString = "?i1=" + i1 ;
                        
                        queryString += "&i2=" + i2 + "&i3=" + i3 + "&i4=" + i4 + "&i5=" + i5 +"&server=" + server + "&myuser=" + myuser + "&pwd=" + pwd  + "&dbName=" + dbName;
                        
                        ajaxRequest.open("GET", "RecipeSearch2.php" + queryString, true);
                        ajaxRequest.send(null);
                }
            }


           
            </script>




<form method = "post" id="registrationForm" name = 'myForm' >
<h3>Recipe Search</h3>
<h4>We have over 200 recipes that you can search from! Put in some ingredients you have at home to get started.</h4>
<?php 
       $server = "fall-2020.cs.utexas.edu";
       $myuser = "cs329e_bulko_non86";
       $pwd = "mercy-feet7Sullen";
       $dbName = "cs329e_bulko_non86";

    
       echo "<table id='userinfo'><tr><td>
       Ingredient 1: <input type = 'text' id = 'i1' /> </td>";
            echo "</tr>";
       echo "<tr><td>
       Ingredient 2: <input type = 'text' id = 'i2'/> </td>";
            echo "</tr>";
            echo "<tr><td>
       Ingredient 3: <input type = 'text' id = 'i3'/> </td>";
            echo "</tr>";
            echo "<tr><td>
       Ingredient 4: <input type = 'text' id = 'i4'/> </td>";
            echo "</tr>";
            echo "<tr><td>
       Ingredient 5: <input type = 'text' id = 'i5'/> </td>";
            echo "</tr>";




       echo "<tr> <td><input  class=\"buttons\" type = \"button\" onclick = \"ajaxFunction('$server','$myuser','$pwd','$dbName')\" value = \"Submit\"/> <br><br> ";
       echo "<input class=\"buttons\" name = \"reset\" type = \"reset\" value = \"Reset\" />";
           echo "</td> </tr>	</table>";  
     ?>
    
	</form>
    <div id = 'ajaxDiv'></div>
	</body>
    </html>



    
    



<?php
$script = $_SERVER['PHP_SELF'];

$server = "fall-2020.cs.utexas.edu";
$myuser = "cs329e_bulko_non86";
$pwd = "mercy-feet7Sullen";
$dbName = "cs329e_bulko_non86";

$mysqli = new mysqli ($server, $myuser, $pwd, $dbName);
// If it returns a non-zero error number, print a message and stop execution immediately
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
} 

//if the user has submitted the form
if(isset($_POST["submit"])){
    //get ingredient values
    $i1 = $_POST["i1"];
    $i2 = $_POST["i2"];
    $i3 = $_POST["i3"];
    $i4 = $_POST["i4"];
    $i5 = $_POST["i5"];
    if($_POST["diet"] == ""){
        $command = "SELECT * FROM recipes WHERE INGREDIENTS LIKE '%$i1%' AND INGREDIENTS LIKE '%$i2%' AND INGREDIENTS LIKE '%$i3%' AND INGREDIENTS LIKE '%$i4%' AND INGREDIENTS LIKE '%$i5%';";
    
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"] == "Healthy"){
        $healthy = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$healthy';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"]== "GlutenFree"){
        $GlutenFree = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$GlutenFree';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"] == "Vegetarian"){
        $Vegetarian = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$Vegetarian';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"] == "Keto"){
        $Keto = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$Keto';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"] == "Vegan"){
        $Vegan = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$Vegan';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
    if($_POST["diet"] == "LowCarb"){
        $LowCarb = $_POST["diet"];
        $command = "SELECT * FROM recipes WHERE TYPE = '$LowCarb';";
        $result = $mysqli->query($command);
        // Verify the result
        if (!$result) {
            die("Query failed: ($mysqli->error <br>");
        } 
        echo "<strong> Here are your results: </strong> <br> </br>";
        if (mysqli_num_rows($result)==0){
            echo "<strong> No results.</strong>";
        }
        while ($row = $result->fetch_row()) {
            $data = \preg_replace('/\b(https?:\/\/.+)\b/i', '<a href="\1">\1</a>', $row[4]);
            echo "<strong>$row[1] </strong> | $data <br>";
        }
    }
}


print <<<FORM
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equip="X-UA-Compatible" content="ie=edge">

    <title> FYR: Register </title>
    <link rel="stylesheet" href="website.css">
    <script type="text/javascript" src="website.js" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Londrina Outline|Arvo|Antic Slab|Enriqueta|Aleo|Hepta Slab|Scope One|Quicksand|Alegreya Sans SC|Satisfy|La Belle Aurore|Patrick Hand SC|Itim' rel='stylesheet'>

</head>

<body onload="initBanner()">
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




        <h3> User Input </h3>
        <form id="registrationForm" method = "post" action = $script>
            <table id="userinfo">
                <caption>
                    <h2>Please fill out the fields below and please select which diet you are interested in (at least one field is required):</h2>
                </caption>
                <tr>
                    <td>
                        <label for="i1">Ingredient 1:</label>
                    </td>
                    <td>
                        <input type="text"  id="i1" name="i1">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="i2">Ingredient 2:</label>
                    </td>
                    <td>
                        <input type="text"  id="i2" name="i2" >   
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="i3">Ingredient 3:</label>
                    </td>
                    <td>
                        <input type="text" id="i3" name="i3" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="i4">Ingredient 4:</label>
                    </td>
                    <td>
                        <input type="text"  id="i4" name="i4" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="i5">Ingredient 5:</label>
                    </td>
                    <td>
                        <input type="text"  id="i5" name="i5" >
                    </td>
                </tr>
                <tr>
                <td>
                <input type="radio" id="Healthy" name="diet" value="Healthy"/>
                <label for="Healthy">Healthy</label>
                </td>
                </tr>

                <tr>
                <td>
                <input type="radio" id="GlutenFree" name="diet" value="GlutenFree"/>
                <label for="GlutenFree">Gluten Free</label>
                </td>
                </tr>
                <tr>
                <td>
                <input type="radio" id="Vegetarian" name="diet" value="Vegetarian"/>
                <label for="Vegetarian">Vegetarian</label>
                </td>
                </tr>
                <tr>
                <td>
                <input type="radio" id="Keto" name="diet" value="Keto"/>
                <label for="Keto">Keto</label>
                </td>
                </tr>
                <tr>
                <td>
                <input type="radio" id="Vegan" name="diet" value="Vegan"/>
                <label for="Vegan">Vegan</label>
                </td>
                </tr>
                <tr>
                <td>
                <input type="radio" id="LowCarb" name="diet" value="LowCarb"/>
                <label for="LowCarb">Low Carb</label>
                </td>
                </tr>
                <tr>
                    <td>
                        <button name = "submit"type="submit" id="submit">Submit</button>
                    </td>
                    <td>
                        <button type="button" id="clear">Clear</button>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>

            </table>
           

        </form>
        <br><br>
        <br><br>

        <div>
            <footer>
                <p class="pf"> 2020 FYR CO. </p>
            </footer>
        </div>

        <br>
        <br>

</body>

</html>
FORM;

?>
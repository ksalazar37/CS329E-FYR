<?php

    // ------------------------ REGISTER USER -----------------------
    function register() {
        $server = "fall-2020.cs.utexas.edu";
        $user = "cs329e_bulko_avalon";
        $pwd = "area+breath\$Watch";
        $dbName = "cs329e_bulko_avalon";
		echo "Server: " . $server."<br>";
		echo "User: " . $user."<br>";
		echo "Server: " . $dbName."<br>";
		// meow
        // create connection to SQL
        $mysqli = new mysqli ($server, $user, $pwd, $dbname);

        if ($mysqli->connect_errno) {
            die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
        } 
        else {
            echo "Database connection successful <br><br>";
        };


        // get user-entered values to insert into database table of user info 
        $username = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        /* FYR_LOGIN
        +--------+-------------+------+-----+---------+-------+
        | Field  | Type        | Null | Key | Default | Extra |
        +--------+-------------+------+-----+---------+-------+
        | User   | varchar(50) | YES  |     | NULL    |       |
        | Email  | varchar(50) | YES  |     | NULL    |       |
        | Passwd | varchar(50) | YES  |     | NULL    |       |
        +--------+-------------+------+-----+---------+-------+
        */
        
        // insert new user into database (later, add check to see if user / email already exists)
		echo('meow');
        $insert_query = "INSERT INTO cs329e_bulko_avalon.FYR_LOGIN (User, Email, Passwd) VALUES ('$username', '$email', '$pass');";

        if ($mysqli->query($insert_query)) {
        echo('<script> if(confirm("Registration successful!!\n Taking you to the recipe search page now...") ){location.replace("./home.html")}</script>');
        } 
        else {
        echo "Error: " . $insert_query . "<br>" . $mysqli->error;
        }
       
    }

    
    // from register.html

        print <<<HEAD
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equip="X-UA-Compatible" content="ie=edge">
        
            <title> FYR: Register </title>
            <link rel="stylesheet" href="website.css">
            <script type="text/javascript" src="website.js"></script>
            <link href='https://fonts.googleapis.com/css?family=Londrina Outline|Arvo|Antic Slab|Enriqueta|Aleo|Hepta Slab|Scope One|Quicksand|Alegreya Sans SC|Satisfy|La Belle Aurore|Patrick Hand SC|Itim' rel='stylesheet'>
        
        </head>
        
        <body>
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
        
        
        
        
                <h3> Register </h3>

HEAD;


if(isset($_POST['register_'])){
    register();

}
    


print <<<FOOT
<h2> </h2>

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
FOOT;
?>




       
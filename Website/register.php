
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
                            <a href="./RecipeSearch.php">Recipe Search</a> |
                            <a href="./connect.html">Connect</a> |
                            <a href="./contactus.html">Contact Us</a>
                        </nav>
                    </td>
                </tr>
            </table>
        </div>




        <h3> Register </h3>
        <form id="registrationForm">
            <table id="userinfo">
                <caption>
                    <h2>Please fill out the fields below:</h2>
                </caption>
                <tr>
                    <td>
                        <label for="user">Username:</label>
                    </td>
                    <td>
                        <input type="text" onmouseover="messages(0)" onmouseout="messages(4)" id="user" name="user" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td>
                        <input type="text" onmouseover="messages(1)" onmouseout="messages(4)" id="email" name="email" required>   
                        <?php
                            $email = $_POST["email"];
                            //contains @
                            $regex = "/@/";
                            if (preg_match($regex,$email)){
                            Echo "valid email";
                            }
                            else{
                            Echo "invalid email";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Password:</label>
                    </td>
                    <td>
                        <input type="password" onmouseover="messages(2)" onmouseout="messages(4)" id="pass" name="pass" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass2">Repeat Password:</label>
                    </td>
                    <td>
                        <input type="password" onmouseover="messages(3)" onmouseout="messages(4)" id="pass2" name="pass2" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" id="reg">Register</button>
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
            <textarea id="adviceBox" cols="40" rows="3">
            </textarea>

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
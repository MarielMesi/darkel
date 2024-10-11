<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DarkEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/login.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><strong class="text-light">Dark</strong><span class="text-primary">EL</span></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datarepresentation.php">Database Representation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chartrepresentation.php">Chart Representation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cryptopricing.php">Crypto Pricing</a>
                    </li>
                    <?php
                        if(isset($_SESSION["useruid"]))
                        {
                    ?>        
                           <li class="nav-item">
                               <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="../src/includes/logout.inc.php">Log Out</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"><?php echo $_SESSION["useruid"]; ?></a>
                            </li>
                    <?php    
                        }
                        else
                        {
                    ?>        
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="">Log In</a>
                            </li>
                    <?php    
                        }
                    ?>   
                </ul>
            </div>
        </div>
    </nav>
    <!--page content-->
    <div class="main-content">
        <div class="container1 right-panel-active">
            <!-- Sign Up -->
            <div class="container__form container--signup">
		        <form action="../src/includes/signup.inc.php" method="post" class="form" id="form1">
                    <h2 class="form__title">Sign Up</h2>
                    <input type="text" name="name" placeholder="Full Name" class="input">
                    <input type="text" name="email" placeholder="Email" class="input">
                    <input type="text" name="uid" placeholder="Username" class="input">
                    <input type="password" name="pwd" placeholder="Password" class="input">
                    <input type="password" name="pwdrepeat" placeholder="Repeat password" class="input">
                    <button type="submit" name="submit" class="btn2">Sign Up</button>
                    <br>
                    <?php
                        if(isset($_GET["error"]))
                        {
                            if($_GET["error"] == "emptyinput")
                            {
                                echo "<p>Fill in all the fields!</p>";
                            }
                            else if($_GET["error"] == "invaliduid")
                            {
                                echo "<p>Choose a proper username!</p>";
                            }
                            else if($_GET["error"] == "invalidemail")
                            {
                                echo "<p>Choose a proper email!</p>";
                            }
                            else if($_GET["error"] == "passwordsdontmatch")
                            {
                                echo "<p>Passwords do not match!</p>";
                            }
                            else if($_GET["error"] == "stmtfailed")
                            {
                                echo "<p>Something went wrong, try again!</p>";
                            }
                            else if($_GET["error"] == "usernametaken")
                            {
                                echo "<p>Username already taken!</p>";
                            }
                            else if($_GET["error"] == "none")
                            {
                                echo "<p>You have singed up!</p>";
                            }
                        }
                    ?>
		        </form>
	        </div>
            	<!-- Sign In -->
            <div class="container__form container--signin">
                <form action="../src/includes/login.inc.php" method="post" class="form" id="form2">
                    <h2 class="form__title">Sign In</h2>
                    <input type="text" name="uid" placeholder="Username/Email" class="input">
                    <input type="password" name="pwd" placeholder="Password" class="input">
                    <button type="submit" name="submit" class="btn2">Sign In</button>
                    <br>
                    <?php
                        if(isset($_GET["error"]))
                        {
                            if($_GET["error"] == "emptyinput")
                            {
                                echo "<p>Fill in all the fields!</p>";
                            }
                            else if($_GET["error"] == "wronglogin")
                            {
                                echo "<p>Incorrect Login information!</p>";
                            }
                        }
                    ?>
                </form>
            </div>
            <!-- Overlay -->
            <div class="container__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                       <button class="btn2" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay__panel overlay--right">
                        <button class="btn2" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; Mariel Mesi</p>
        </div>
    </footer>
    <!-- js -->
    <script src="../src/js/script.js"></script>
    <script src="../src/js/login.js"></script>
</body>
</html>
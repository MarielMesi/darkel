<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DarkEL</title>
	<link rel="stylesheet" href="src/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href=""><strong class="text-light">Dark</strong><span class="text-primary">EL</span></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/datarepresentation.php">Database Representation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/chartrepresentation.php">Chart Representation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/cryptopricing.php">Crypto Pricing</a>
                    </li>
                    <?php
                        if(isset($_SESSION["useruid"]))
                        {
                    ?>        
                           <li class="nav-item">
                               <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="src/includes/logout.inc.php">Log Out</a>
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
                                <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="pages/login.php">Log In</a>
                            </li>
                    <?php    
                        }
                    ?> 
                </ul>
            </div>
        </div>
    </nav>
    <header class="header d-flex justify-content-center" >
        <div class="container" >
            <div class="row h-100 align-items-center" >
                <div class="col-md-7" style="margin-left: 50%;">
                    <div class="header-content">
                        <h3 class="header-title"><a href=""><strong class="text-light">Click</strong><span class="text-primary">Me!</span></a></h3>
                    </div>  
                </div>
            </div>  
        </div>
    </header>
    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; Mariel Mesi</p>
        </div>
    </footer>
    <!-- js -->
    <script src="src/js/script.js"></script>
        <script src="src/js/texttospeech.js"></script>
</body>
</html>
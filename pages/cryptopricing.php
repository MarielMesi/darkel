<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DarkEL</title>
	<link rel="stylesheet" href="../src/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
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
                        <a class="nav-link" href="">Crypto Pricing</a>
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
                                <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="login.php">Log In</a>
                            </li>
                    <?php    
                        }
                    ?> 
                </ul>
            </div>
        </div>
    </nav>
    <div class="test">
        <h1 id="stock-price" class="hhh" style="color:black;">CRYPTO PRICES LIVE</h1>    
        <!-- code here -->
        <div class="line-chart2">
            <div class="aspect-ratio2">
                <canvas id="doughnut"></canvas>
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
    <script src="../src/js/api.js"></script>  
</body>
</html>
<?php
    session_start();
    include_once '../src/includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DarkEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/table.css">
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
                        <a class="nav-link" href="">Database Representation</a>
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
                                <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="login.php">Log In</a>
                            </li>
                    <?php    
                        }
                    ?>   
                </ul>
            </div>
        </div>
    </nav>
        <section>
            <h1>Bitcoin</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM bitcoin;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <h1>Ethereum</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM ethereum;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <h1>Binance</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM binance;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <h1>Cardano</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM cardano;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <h1>Solana</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM solana;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <h1>Xrp</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Date</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Volume</th>
                    <th>Marketcap</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM xrp;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['SNo'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Symbol'];?></td>
                            <td><?php echo $row['Date'];?></td>
                            <td><?php echo $row['High'];?>&dollar;</td>
                            <td><?php echo $row['Low'];?>&dollar;</td>
                            <td><?php echo $row['Open'];?>&dollar;</td>
                            <td><?php echo $row['Close'];?>&dollar;</td>
                            <td><?php echo $row['Volume'];?></td>
                            <td><?php echo $row['Marketcap'];?></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>    
    <div class="stylish">
        <footer class="footer py-4 bg-dark text-light"> 
            <div class="container text-center">
                <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; Mariel Mesi</p>
            </div>
        </footer>
    </div>    
    <!-- js -->
    <script src="../src/js/script.js"></script>
    <script src="../src/js/table.js"></script>
</body>
</html>
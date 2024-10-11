<?php
    session_start();
    include_once '../src/includes/btcfetch.inc.php';
    include_once '../src/includes/ethfetch.inc.php';
    include_once '../src/includes/bnbfetch.inc.php';
    include_once '../src/includes/adafetch.inc.php';
    include_once '../src/includes/solfetch.inc.php';
    include_once '../src/includes/xrpfetch.inc.php';
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
                        <a class="nav-link" href="">Chart Representation</a>
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
    <div class="test">
        <h1>BITCOIN</h1>   
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart0"></canvas>
            </div>
        </div>
    </div>
    <div class="test">
        <h1>ETHEREUM</h1>  
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart1"></canvas>
            </div>
        </div>
    </div>
    <div class="test">
        <h1>BINANCE</h1>  
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart2"></canvas>
            </div>
        </div>
    </div>
    <div class="test">
        <h1>CARDANO</h1>
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart3"></canvas>
            </div>
        </div>
    </div>  
    <div class="test">
        <h1>SOLANA</h1>  
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart4"></canvas>
            </div>
        </div>
    </div> 
    <div class="test">
        <h1>XRP</h1>
        <!-- code here -->
        <div class="line-chart">
            <div class="aspect-ratio">
                <canvas id="bar_chart5"></canvas>
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
    <script>
        var ctx = document.getElementById("bar_chart0").getContext("2d"), gradient = ctx.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($btcyear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($btcavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart0 = new Chart(ctx, config);
    </script>   
    <script>
        var ctx2 = document.getElementById("bar_chart1").getContext("2d"), gradient = ctx2.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($ethyear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($ethavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart1 = new Chart(ctx2, config);
    </script>  
    <script>
        var ctx3 = document.getElementById("bar_chart2").getContext("2d"), gradient = ctx3.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($bnbyear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($bnbavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart2 = new Chart(ctx3, config);
    </script>   
    <script>
        var ctx4 = document.getElementById("bar_chart3").getContext("2d"), gradient = ctx4.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($adayear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($adaavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart3 = new Chart(ctx4, config);
    </script>  
    <script>
        var ctx5 = document.getElementById("bar_chart4").getContext("2d"), gradient = ctx5.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($solyear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($solavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart4 = new Chart(ctx5, config);
    </script>   
    <script>
        var ctx6 = document.getElementById("bar_chart5").getContext("2d"), gradient = ctx6.createLinearGradient(0, 0, 0, 450);
        gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
        gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
        gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
        var labels = <?php echo json_encode($xrpyear) ?>;
        var data = {
            labels,
            datasets: [
                {
                    data: <?php echo json_encode($xrpavgprice) ?>,
                    label: "Average $ Price per Year",
                    backgroundColor: gradient,
			        pointBackgroundColor: 'white',
			        borderWidth: 1,
			        borderColor: '#911215'
                }
            ]
        };
        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                tension: {
                    duration: 3000,
                    easing: 'linear',
                    from: 0,
                    to: 1,
                    loop: true
                }
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    min: 0,
                    max: 100,
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };
        var config = {
            type: 'line',
            data: data,
            options: options
        };
        var bar_chart5 = new Chart(ctx6, config);
    </script> 
</body>
</html>
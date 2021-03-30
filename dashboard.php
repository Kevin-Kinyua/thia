<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  /* float: left; */
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<?php
include_once "./dashboard-header.php"
?>
<div id="page-container">

    <div id="content-wrap">

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" class="active" onclick="openPage('dashboard')">Dashboard</a>
            <a href="#" onclick="openPage('wallet')">Wallet</a>
<!--            <a href="#" onclick="openPage('deposit')">Deposit</a>-->
<!--            <a href="#" onclick="openPage('withdraw')">Withdraw</a>-->
            <a href="#" onclick="openPage('members')" onclick="closeNav()">Members</a>
            <a href="#" onclick="openPage('loans')">Loans</a>
            <a href="#" onclick="openPage('clients')">Clients</a>
            <a href="" onclick="openPage('messaging')">Messaging</a>
            <a href="" onclick="openPage('investments')">Investments</a>
            <a href="" onclick="openPage('reports')">Reports</a>
            <a href="" onclick="openPage('settings')">Settings</a>
<!--            <a href="#" onclick="openPage('contact')">Contact</a>-->
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "180px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <section id="dashboard" class="dashboard-content" >
            <div  id="overlay" >
                <br>
                <br>




                <div id="dashboard" class="w3-container  page" >
                    <h2>Dashboard</h2>
                    <!--
                        <div class="row">
                        <div class="column">
                            <div class="card">
                            <h3>Card 1</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                            <h3>Card 2</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                            </div>
                        </div>
                        
                        <div class="column">
                            <div class="card">
                            <h3>Card 3</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                            </div>
                        </div>
                        
                        <div class="column">
                            <div class="card">
                            <h3>Card 4</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                            </div>
                        </div>
                        </div>-->

                        
                        <div id="piechart" class="responsive" style="margin-top: -20px; margin-left: 450px; flex-wrap: wrap; align-content: center;"></div>

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                        <script type="text/javascript">
                        // Load google charts
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        // Draw the chart and set the chart values
                        function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Deposits', 8],
                        ['Withdrawals', 4],
                        ['Debts', 2],
                        ['Credit', 2],
                        ['Investments', 8]
                        ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {'title':'Group Data Visualization', 'width':850, 'height':700};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                        }
                        </script>

                </div>

                <div id="wallet" class="w3-container page" style="display:none;  ">
                    <h2 >Wallet</h2>
                    <?php
                    include_once "./wallet.php"
                    ?>
                </div>

                <div id="deposit" class="w3-container page" style="display:none;  ">
                    <h2 >Deposit</h2>
                    <p>some text</p>
                </div>

                <div id="withdraw" class="w3-container page" style="display:none;  ">
                    <h2 >Withdraw</h2>
                    <p>some text</p>
                </div>

                <div id="members" class="w3-container page" style="display:none;  ">
                    <h2 >Members</h2>
                    <?php
                    include_once "./members.php"
                    ?>
                </div>
                <div id="loans" class="w3-container page" style="display:none;  ">
                    <h2 >Loans</h2>
                    <?php
                    include_once "./loans.php"
                    ?>
                </div>
                <div id="clients" class="w3-container page" style="display:none;  ">
                    <h2 >Clients</h2>
                    <?php
                    include_once "./clients.php"
                    ?>
                </div>
                <div id="messaging" class="w3-container page" style="display:none;  ">
                    <h2 >Messaging</h2>
                    <?php
                    include_once "./messaging.php"
                    ?>
                </div>
                <div id="investments" class="w3-container page" style="display:none;  ">
                    <h2 >Investments</h2>
                    <?php
                    include_once "./investments.php"
                    ?>
                </div>
                <div id="reports" class="w3-container page" style="display:none;  ">
                    <h2 >Reports</h2>
                    <?php
                    include_once "./reports.php"
                    ?>
                </div>
                <div id="settings" class="w3-container page" style="display:none;  ">
                    <h2 >Settings</h2>
                    <?php
                    include_once "./settings.php"
                    ?>


                <script>
                    function openPage(pageName) {
                        var i;
                        var x = document.getElementsByClassName("page");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        document.getElementById(pageName).style.display = "block";
                    }
                </script>



            </div>
        </section>


    </div>
    <?php
    include_once "./footer.php"
    ?>
</div>

</body>
</html>

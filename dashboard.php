<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
<!--SIDENAV--------------------------------------------------------------------------------------------->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" class="active" onclick="openPage('dashboard')">Dashboard</a>
            <a href="#wallet" onclick="openPage('wallet')">Wallet</a>
<!--            <a href="#" onclick="openPage('deposit')">Deposit</a>-->
<!--            <a href="#" onclick="openPage('withdraw')">Withdraw</a>-->
            <a href="#members" onclick="openPage('members')" onclick="closeNav()">Members</a>
            <a href="#loans" onclick="openPage('loans')">Loans</a>
            <a href="#clients" onclick="openPage('clients')">Clients</a>
            <a href="#messaging" onclick="openPage('messaging')">Messaging</a>
            <a href="#investments" onclick="openPage('investments')">Investments</a>
            <a href="#reports" onclick="openPage('reports')">Reports</a>
            <a href="#settings" onclick="openPage('settings')">Settings</a>
<!--            <a href="#" onclick="openPage('contact')">Contact</a>-->
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "190px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

<!----------------------------------------------------------------------------------------------->

<div id="main">
 <!--<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; open menu</span>-->
 <section id="dashboard" class="dashboard-content" >

                <div id="dashboard" class="w3-container  page">
                    <div class="dashboard-header">
                    <br>
                        <h2> Dashboard</h2>
                        
                    </div>
                   
                        <!--DATA SETS-->
                        <div id="piechart" class=" responsive" style=""></div>

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
                        var options = {'title':'Group Data Visualization', 'width':650, 'height':500};

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                        }
                        </script>
                        <!--DATA SETS END-->

                </div>

                <div id="wallet" class="w3-container page" style="display:none; margin-top: -60px;">
                    
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

                <div id="members" class="w3-container page" style="display:none; margin-top: -60px;">
                   
                    <?php
                    include_once "./members.php"
                    ?>
                </div>
                <div id="loans" class="w3-container page" style="display:none; margin-top: -60px;">
                    
                    <?php
                    include_once "./loans.php"
                    ?>
                </div>
                <div id="clients" class="w3-container page" style="display:none; margin-top: -60px;">
                   
                    <?php
                    include_once "./clients.php"
                    ?>
                </div>
                <div id="messaging" class="w3-container page" style="display:none; margin-top: -60px;">
               
                    <?php
                    include_once "./messaging.php"
                    ?>
                </div>
                <div id="investments" class="w3-container page" style="display:none; margin-top: -60px;">
               
                    <?php
                    include_once "./investments.php"
                    ?>
                </div>
                <div id="reports" class="w3-container page" style="display:none; margin-top: -60px;">
             
                    <?php
                    include_once "./reports.php"
                    ?>
                </div>
                <div id="settings" class="w3-container page" style="display:none; margin-top: -60px;">
            
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
        </section>
</div>

<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "190px";
  document.getElementById("main").style.marginLeft = "190px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>

</body>
</html>

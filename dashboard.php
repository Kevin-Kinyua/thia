<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">

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
            <a href="#" onclick="openPage('deposit')">Deposit</a>
            <a href="#" onclick="openPage('withdraw')">Withdraw</a>
            <a href="#" onclick="openPage('members')">Members</a>
            <a href="#" onclick="openPage('loans')">Loans</a>
            <a href="#" onclick="openPage('clients')">Clients</a>
            <a href="#" onclick="openPage('messaging')">Messaging</a>
            <a href="#" onclick="openPage('investments')">Investments</a>
            <a href="#" onclick="openPage('reports')">Reports</a>
            <a href="#" onclick="openPage('settings')">Settings</a>
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
                    <p>Some text</p>
                </div>

                <div id="wallet" class="w3-container page" style="display:none;  ">
                    <h2 >Wallet</h2>
                    <!--<?php
                    include_once "./wallet.php"
                    ?>-->
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
                    <p>some text</p>
                </div>
                <div id="loans" class="w3-container page" style="display:none;  ">
                    <h2 >Loans</h2>
                    <p>some text</p>
                </div>
                <div id="clients" class="w3-container page" style="display:none;  ">
                    <h2 >Clients</h2>
                    <p>some text</p>
                </div>
                <div id="messaging" class="w3-container page" style="display:none;  ">
                    <h2 >Messaging</h2>
                    <p>some text</p>
                </div>
                <div id="investments" class="w3-container page" style="display:none;  ">
                    <h2 >Investments</h2>
                    <p>some text</p>
                </div>
                <div id="reports" class="w3-container page" style="display:none;  ">
                    <h2 >Reports</h2>
                    <p>some text</p>
                </div>
                <div id="settings" class="w3-container page" style="display:none;  ">
                    <h2 >Settings</h2>
                    <p>some text</p>


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

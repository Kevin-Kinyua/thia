<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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
            <a href="#" onclick="openPage('contact')">Contact</a>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "200px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <section id="dashboard">
            <div  id="overlay" class="dashboard-content" >
                <br>
                <br>


                <div class="w3-container">
<!--                    <h2>Tabs</h2>-->
<!--                    <p>Tabs are perfect for single page web applications, or for web pages capable of displaying different subjects. Click on the links below.</p>-->
                </div>

                <div class="w3-bar w3-black">
                    <button class="w3-bar-item w3-button" onclick="openPage('London')">London</button>
                    <button class="w3-bar-item w3-button" onclick="openPage('Paris')">Paris</button>
                    <button class="w3-bar-item w3-button" onclick="openPage('Tokyo')">Tokyo</button>

                </div>

                <div id="London" class="w3-container page" >
                    <h2>London</h2>
                    <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="w3-container page" style="display:none;">
                    <h2>Paris</h2>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

                <div id="Tokyo" class="w3-container page" style="display:none;  ">
                    <h2 >Tokyo</h2>
                    <p>Tokyo is the capital of Japan.</p>
                </div>

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

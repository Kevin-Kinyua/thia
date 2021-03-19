
<head>
    <link rel="stylesheet" href="navigation.css">
</head>
<!-- HEADER-->
<header class="dashboard">
    <div class="dash-header" id="myTopnav">
        <a href="sign-up.php" class="active" class="dropbtn" >My Profile</a>
<!--            <div class="dropdown-content">-->
<!--                <a href="#">Link 1</a>-->
<!--                <a href="#">Link 2</a>-->
<!--                <a href="#">Link 3</a>-->
<!--            </div>-->
        <a href="contact.php">Contact Us</a>
        <a href="#about">Notifications</a>
        <a href="home.php">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <span style="font-size:25px;cursor:pointer; color:white; margin-left: 30px;" onclick="openNav()">&#9776; MENU</span>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "dash-header") {
                x.className += " responsive";
            } else {
                x.className = "dash-header";
            }
        }
    </script>
</header>

<!--<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>-->
<!--<div class="dropdown">-->
<!--    <button class="dropbtn" >-->
<!--        <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>-->
<!--    </button>-->
<!---->
<!--</div>-->
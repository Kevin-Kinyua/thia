
<head>
    <link rel="stylesheet" href="navigation.css">
</head>
<!-- HEADER-->
<header class="home">
    <div class="header" id="myTopnav">
        <a href="sign-up.php" class="active">Get Started</a>
        <a href="sign-in.php">Log In</a>
        <a href="dashboard.php">Dashboard Demo</a>
        <a href="contact.php">Contact Us</a>
        <a href="#partners">Clients</a>
        <a href="#features">Features</a>
        <a href="#about-us">About Us</a>
        <a href="home.php">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "header") {
                x.className += " responsive";
            } else {
                x.className = "header";
            }
        }
    </script>
</header>
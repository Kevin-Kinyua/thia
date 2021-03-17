

<!-- HEADER-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-4">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Thia Logo</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="home.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#about-us" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                    <li class="nav-item"><a href="#features" class="nav-link text-uppercase font-weight-bold">Features</a></li>
                    <li class="nav-item"><a href="#customers" class="nav-link text-uppercase font-weight-bold">Customers</a></li>
                    <li class="nav-item"><a href="dashboard.php" class="nav-link text-uppercase font-weight-bold">Demo</a></li>
                    <li class="nav-item"><a href="sign-in.php" class="nav-link text-uppercase font-weight-bold">Log In</a></li>
                    <li class="nav-item"><a href="sign-up.php" class="nav-link text-uppercase font-weight-bold"><button class="signup-button" ><span>Get Started</span></button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>

</header>
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
<div id="page-container">
    <?php
    include_once "./header.php"
    ?>
    <div id="content-wrap">


        <section id="sign-in">
            <div  id="overlay" class="sign-in" >
                <br>
                <br>

                <div class="row">

                    <div class="column">
                        <div class="auth-card"  style="height:250px; width: 500px;">

                            <form action="#" style="border:1px solid #ccc">
                                <div class="container">
                                    <h1>You have successfully registered your account.</h1>
                                    <p>Go to your email address to verify your account</p>
                                    <div class="clearfix">
                                        <button href="home.php" type="submit"" style="width: 100%;">Go back</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </section>


    </div>
    <?php
    include_once "./footer.php"
    ?>
</div>

</body>
</html>
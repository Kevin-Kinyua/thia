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
                        <div class="auth-card">

                            <form action="/action_page.php" style="border:1px solid #ccc">
                                <div class="container">
                                    <h1>Sign In</h1>
                                    <p>Please fill in this form to enter your account.</p>
                                    <hr>

                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <label>
                                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                                    </label>

                                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                                    <div class="clearfix">
                                        <button type="button" class="cancelbtn">Cancel</button>
                                        <button type="submit" class="signupbtn">Sign Up</button>
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
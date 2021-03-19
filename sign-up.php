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
                        <div class="auth-card">

                            <form action="/action_page.php" style="border:1px solid #ccc">
                                <div class="container">
                                    <h1>Register with us</h1>
                                    <p>Please fill in this form to create an account.</p>
                                    <hr>

                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <label for="psw-repeat"><b>Repeat Password</b></label>
                                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

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
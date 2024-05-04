<?php
    include 'dash.php';
?>


<!-- //////=================   html code  ==============/////////// -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="log-body">
        <div class="container-fluid pl-0 pr-0 ">
            <div class="row justify-content-around pl-0 pr-0 log-row">
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-11 log-block" style="padding-left: 35px;">
                    <img src="image/logo3.png" alt="no" class="log-logo"><br>
                    <p class="sign-txt" style="">Sign&nbsp;in</p>
                    <p style="color: red; font-size: 18px;;"><?php echo $error ?></p>
                    <p>
                            <?php //foreach ($error as $errors): ?>
                               <!-- <li style="color: red; font-size: 18px;"><?php //echo $errors; ?></li>-->
                            <?php// endforeach; ?>
                    </p>
                    <form action="login.php" method="POST">
                        <input type="email" placeholder="Email" name="l_email" class="log-line" required autocomplete="off"><br>
                        <input type="password" placeholder="Password" name="l_password" class="log-line" required autocomplete="off"><br>
                        No&nbsp;account?
                        <a href="signup.php" style="text-decoration: none; color: blue;">Create one!</a> <br>
                        Can't&nbsp;remember&nbsp;the&nbsp;password! 
                        <a href="forgot_password.php" style="text-decoration: none; color: blue;">Forgot&nbsp;password</a> <br>
                        <center><input class="log-button" name="log-btn" type="submit" value="login" "></center>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
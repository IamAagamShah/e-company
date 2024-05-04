<?php
    include_once 'db.php' ;
    include 'dash.php';
    $error="";
    if(isset($_POST['username'])){        
        $q_uname = $_POST['username'];
        $q_uemail = $_POST['emailid'];
        $q_contact = $_POST['Phone'];
        $q_password = $_POST['password'];
        $q_r_password = $_POST['rep_password'];
        $token = bin2hex(random_bytes(50));
        $verified = false;
        if(strlen($q_password) >=8 && strlen($q_password) <=15){
            if($q_password === $q_r_password){
                $s_query = "INSERT INTO userss (`Name`, `Email`, `Password`, `Post`, `Contact`, `token`, `verified`) VALUES ('".$q_uname."','".$q_uemail."','".$q_password."','CEO','".$q_contact."','".$token."','".$verified."');";
                $q_run = mysqli_query($conn, $s_query);
                if ($q_run) {
                    sendVerificationEmail($q_uemail,$token);
                    header("location:verifu_meassage.php");
                }
            }
            else{
                $error = "password not match";
            }
        }
        else{
            $error = "password must be a 8 to 15 character long";
        }    
    }
?>

<!-- //////=================   html code  ==============/////////// -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign-up</title>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="log-body">
        <div class="container-fluid pl-0 pr-0 ">
            <div class="row justify-content-around pl-0 pr-0 log-row">
                <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-11 sign-block" style="padding-left: 35px;">
                    <img src="image/logo3.png" alt="no" class="log-logo"><br>
                    <p class="sign-txt" style="">Register</p>
                    <p style="color: red; font-size: 18px;;"><?php echo $error; ?></p>
                    <form action="signup.php" method="POST" enctype="multipart/form-data">
                        <input type="text" placeholder="Username" name="username" class="log-line" required autocomplete="off"><br>
                        <input type="email" placeholder="Email" name="emailid" class="log-line" required autocomplete="off"><br>
                        <input type="text" placeholder="Phone Number" name="Phone" class="log-line" minlength="10" maxlength="10" required autocomplete="off"><br>
                        <input type="password" placeholder="Password" name="password" class="log-line" required autocomplete="off"><br>
                        <input type="password" placeholder="Confirm-Password" name="rep_password" class="log-line" required autocomplete="off"><br>
                        Already&nbsp;have&nbsp;an&nbsp;account?
                        <a href="login.php" style="text-decoration: none; color: blue;">Sign&nbsp;in!</a><br>
                        <center><input class="log-button" type="submit" value="Create"></center>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

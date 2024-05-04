<?php
    include 'dash.php';
    if (isset($_POST['forgot-password'])) {
        $email = $_POST['l_email'];
                $sql = "SELECT * FROM userss WHERE Email=? LIMIT 1";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('s',$email);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();
                $token = $user['token'];
                
                if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                    //ip from share internet
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                    //ip pass from proxy
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }else{
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                
                sendPasswordResetLink($email, $token, $ip);
                header('location: password_message.php');
                exit(0);
            
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="log-body">
    <div class="container-fluid pl-0 pr-0 ">
        <div class="row justify-content-around pl-0 pr-0 log-row">
            <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-11 log-block" style="padding-left: 35px;">
                <img src="image/logo3.png" alt="no" class="log-logo"><br>
                <p style="font-size : 30px; font-weight : bolder;">Recover&nbsp;Your&nbsp;Password</p>
                <form action="forgot_password.php" method="post">

                

                    <input type="text" name="l_email" placeholder="Enter Email-Id" class="log-line"><br>
                    <center><input class="log-button" name="forgot-password" type="submit" value="Next" ></center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    include 'dash.php'; 
    include_once 'db.php';
    if(isset($_GET['passwordtoken'])){
        $token=$_GET['passwordtoken'];
        global $conn;
        $sql = "SELECT * FROM userss WHERE token='".$token."'";
        $result = mysqli_query($conn, $sql);
        if($user = mysqli_fetch_array($result)){
            $email = $user['Email'];
        }else{
            echo "nnnn";
        }
    
        if (isset($_POST['reset-password-btn'])) {
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
    
            if (empty($password) || empty($passwordConf)) {
                $errors['password'] = "Password Required";
            }
    
            if ($password !== $passwordConf) {
                $errors['password'] = "Passwords do not match";
            }
    
      
    
           // if (count($errors) == 0) {
                $sql = "UPDATE userss SET Password='$password' WHERE Email='$email'";
                $result = mysqli_query($conn,$sql);
                if ($result) {
                    header('location: login.php');
                    exit(0);
                }
           // }
        }
                
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mail</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="log-body">
    <div class="container-fluid pl-0 pr-0 ">
        <div class="row justify-content-around pl-0 pr-0 log-row">
            <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-11 log-block" style="padding-left: 35px;">
                <img src="image/logo3.png" alt="no" class="log-logo"><br>
                <p style="font-size : 30px; font-weight : bolder;">Reset&nbsp;Password</p>
                <form method="POST">

                    <input type="password" name="password" required placeholder="Password" class="log-line"><br>
                    <input type="password" name="passwordConf" required placeholder="Confirm-Password" class="log-line"><br>
                    <center><input class="log-button" name="reset-password-btn" type="submit" value="Reset"></center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
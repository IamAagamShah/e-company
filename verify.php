<?php
include_once 'db.php';
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        global $conn;
        $sql = "SELECT * FROM userss WHERE token='".$token."'";
        //echo $sql;
        $result = mysqli_query($conn,$sql);
        $ab = mysqli_fetch_array($result);
        if ($ab['verified'] == 0) {
            $update_query = "UPDATE userss SET verified = '1' WHERE token = '".$token."';";
            $user = mysqli_query($conn,$update_query);
            header("location:login.php");
        }
    }
?>
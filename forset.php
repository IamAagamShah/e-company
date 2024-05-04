<?php
    include 'dash.php';   
    if(isset($_SESSION['dash_Id']))
    {}
    else{
        header("location:../login.php");
    }
?>
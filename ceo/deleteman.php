<?php
    include '../db.php';
    $s2_query = "DELETE FROM userss WHERE Id = '".$_GET['id']."';";
    $q2_run = mysqli_query($conn, $s2_query);
    header('location:allman.php');
?>
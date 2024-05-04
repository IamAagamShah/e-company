<?php
    include_once 'db.php';
    include 'emailController.php';
    session_start();
    $error = "";
    if(isset($_POST['log-btn'])){
        $q_lemail = $_POST['l_email'];
        $q_lpassword = $_POST['l_password'];
        $s_query = "SELECT * FROM userss WHERE Email = '".$q_lemail."' AND Password = '".$q_lpassword."';";
        $q_run = mysqli_query($conn, $s_query);
        $row = mysqli_fetch_array($q_run); 
        if(isset($row['Email'])){
            if($row['verified'] == 1){
                if($row['Email'] === $q_lemail && $row['Password'] === $q_lpassword){
                    if($row['Post'] == "Manager"){
                        $_SESSION['dash_Id'] = $row['Id'];
                        $_SESSION['dash_Name'] = $row['Name'];
                        $_SESSION['dash_Email'] = $row['Email'];
                        $_SESSION['dash_BirthDate'] = $row['BirthDate'];
                        $_SESSION['dash_Sex'] = $row['Sex'];
                        $_SESSION['dash_Address'] = $row['Address'];
                        $_SESSION['dash_Contact'] = $row['Contact'];
                        $_SESSION['dash_Post'] = $row['Post'];
                        $_SESSION['dash_SubPost'] = $row['Sub-Post'];
                        $_SESSION['dash_image'] = $row['image'];
                        header("location:manager/M_dashboard.php");
                    }
                    elseif($row['Post'] == "Employee"){
                        $_SESSION['dash_Id'] = $row['Id'];
                        $_SESSION['dash_Name'] = $row['Name'];
                        $_SESSION['dash_Email'] = $row['Email'];
                        $_SESSION['dash_BirthDate'] = $row['BirthDate'];
                        $_SESSION['dash_Sex'] = $row['Sex'];
                        $_SESSION['dash_Address'] = $row['Address'];
                        $_SESSION['dash_Contact'] = $row['Contact'];
                        $_SESSION['dash_Post'] = $row['Post'];
                        $_SESSION['dash_SubPost'] = $row['Sub-Post'];
                        $_SESSION['dash_image'] = $row['image'];
                        header("location:employee/E_dashboard.php");    
                    }
                    else {
                        $_SESSION['dash_Id'] = $row['Id'];
                        $_SESSION['dash_Name'] = $row['Name'];
                        $_SESSION['dash_Email'] = $row['Email'];
                        $_SESSION['dash_BirthDate'] = $row['BirthDate'];
                        $_SESSION['dash_Sex'] = $row['Sex'];
                        $_SESSION['dash_Address'] = $row['Address'];
                        $_SESSION['dash_Contact'] = $row['Contact'];
                        $_SESSION['dash_Post'] = $row['Post'];
                        $_SESSION['dash_image'] = $row['image'];
                        header("location:ceo/C_dashboard.php");
                    }    
                }
            }
            else{
                $error = "User not verified";
            }
            }
            else{
                $error = "Email and Password are Not Matched";
            }
    }
?>
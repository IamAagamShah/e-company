<?php
    include_once '../db.php';
    include '../forset.php';
    $abcd = $_SESSION['dash_Id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Leaves</title>
        <link rel="stylesheet" href="../css/da.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body style="background-color: #EEEEEE;">
        <div class="fpilore">
            <center>
                <img src="../image/logo1.png" alt="noimage" class="dlogo">
            </center>
            <center>
                <li class="fbut" title="Modules" style="background-color: #3366CC;">
                    <img src="../image/p1.png" alt="nobutton" class="fbutim" >
                </li>
            </center>
            <center>
                <a href="M_dashboard.php">
                    <li class="fbut" title="User Profile">
                        <img src="../image/p2.svg" alt="nobutton" class="fbutim">
                    </li>
                </a>
            </center>
            <center>
                <a href="taskmanager.php">
                    <li class="fbut" title="Task Manager">
                        <img src="../image/p4.svg" alt="nobutton" class="fbutim">
                    </li>
                </a>
            </center> 
            <center>
                <a href="../logout.php">
                    <li class="fbut" title="Logout">
                        <img src="../image/p3.svg" alt="nobutton" class="fbutim">
                    </li>
                </a>
            </center>  
        </div>
        <div class="module">
            <a href="addemp.php"><li class="modany">Add</li></a>
            <a href="shift.php"><li class="modany">Shift</li></a>
            <li class="modany" style="background-color: #EEEEEE; color: #3423CA;">Leave</li>
            <a href="allemp.php"><li class="modany">Employees</li></a>
            <a href="empattendance.php"><li class="modany">Attendance</li></a>
        </div>
        <div class="module1">
            <a href="leaveapprov.php"><li class="modany1">Leave Approval</li></a>
            <a href="leaveform.php"><li class="modany1">Leave Form</li></a>
            <li class="modany1" style="font-weight : bolder; color : blue; border-bottom : 1px solid blue">My Leave</li>
        </div>
        <div class="ghar">
            <center>
                <table class="csgo">
                    <tr class="jinda">
                        <td class="csgohd">Sr. No.</td>
                        <td class="csgohd">Reason</td>
                        <td class="csgohd">From</td>                        
                        <td class="csgohd">To</td>
                        <td class="csgohd">Status</td>
                    </tr>
                    <?php
                        $s_query = "SELECT * FROM leavetab WHERE l_applyid = '".$abcd."';";
                        $q_run = mysqli_query($conn, $s_query);
                        $i=1;
                        while($row = mysqli_fetch_array($q_run)){
                            echo  
                            '<tr class="jinda">
                                <td class="csgohd1">'.$i.'</td>
                                <td class="csgohd1">'.$row['l_desc'].'</td>
                                <td class="csgohd1">'.$row['l_startdate'].'</td>
                                <td class="csgohd1">'.$row['l_todate'].'</td>
                                <td class="csgohd2">'.$row['l_status'].'</td>
                            </tr>';
                            $i=$i+1;
                        } 
                    ?>
                </table>
            </center>
        </div>
    </body>
</html>
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
        <title>Task</title>
        <link rel="stylesheet" href="../css/da.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body style="background-color: #EEEEEE;">
        <div class="fpilore">
            <center>
                <img src="../image/logo1.png" alt="noimage" class="dlogo">
            </center>
            <center>
                <a href="addman.php">
                    <li class="fbut" title="Modules">
                        <img src="../image/p1.png" alt="nobutton" class="fbutim" >
                    </li>
                </a>
            </center>
            <center>
                <a href="C_dashboard.php">
                    <li class="fbut" title="User Profile">
                        <img src="../image/p2.svg" alt="nobutton" class="fbutim">
                    </li>
                </a>
            </center>
            <center>
                <li class="fbut" title="Task Manager" style="background-color: #3366CC;">
                    <img src="../image/p4.svg" alt="nobutton" class="fbutim">
                </li>
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
            <a href="taskmanager.php"><li class="modany">Task</li></a>
            <a href="taskman.php"><li class="modany">Assign</li></a>
            <li class="modany" style="background-color: #EEEEEE; color: #3423CA;">History</li>
        </div>
        <div class="module1">
            <li class="modany1" style="font-weight : bolder; color : blue; border-bottom : 1px solid blue">Task Assigned By You</li>
        </div>
        <div class="ghar">
            <center>
                <table class="csgo">
                    <tr class="jinda">
                        <td class="csgohd">Sr. No.</td>
                        <td class="csgohd">Task</td>
                        <td class="csgohd">Manager</td>
                        <td class="csgohd">Completed Date</td>
                        <td class="csgohd">Completed Time</td>
                        <td class="csgohd">Status</td>
                        <td class="csgohd">Detail</td>
                        <td class="csgohd">Delete</td>
                    </tr>
                    <?php
                        $s_query = "SELECT * FROM historytab WHERE h_assignbyid = '".$abcd."';";
                        $q_run = mysqli_query($conn, $s_query);
                        $i=1;
                        while($row = mysqli_fetch_array($q_run)){
                            echo  
                            '<tr class="jinda">
                                <td class="csgohd1">'.$i.'</td>
                                <td class="csgohd1">'.$row['h_taskname'].'</td>
                                <td class="csgohd1">'.$row['h_assigntoname'].'</td>
                                <td class="csgohd1">'.$row['h_comdate'].'</td>
                                <td class="csgohd1">'.$row['h_comtime'].'</td>
                                <td class="csgohd2">'.$row['h_status'].'</td>
                                <td class="csgohd1"><a href="viewhistory.php?id='.$row['h_taskid'].'" class="jaha">View</a></td>
                                <td class="csgohd1"><a href="deletehistory.php?id='.$row['h_id'].'" class="jaha">Delte</a></td>
                            </tr>';
                            $i=$i+1;
                        } 
                    ?>
                </table>
            </center>
        </div>    
    </body>
</html>
<?php
    require_once 'dash.php';

    //verify user using token
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        verifyUser($token);
    }

    if (isset($_GET['password-token'])) {
        $passwordToken = $_GET['password-token'];
        resetPassword($passwordToken);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/all.css">
        <title>index</title>
    </head>
    <body>
        <div class="container-fluid pl-0 pr-0 ">

         <!--                    =================          navbar            ====================            -->

            <nav id="top" class="navbar navbar-expand-lg navbar-dark " style="padding: 20px; background-color: #3423CA;">
                <a class="navbar-brand pl-4" href="#"><img src="image/logo1.png"  width="125px"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto" style="color: white;">        
                    </ul>
                    <a class="btn btn-outline-danger my-2 my-sm-0 active " style="margin-right: 20px;" href="login.php">Sign In</a>
                    <a class="btn btn-outline-success my-2 my-sm-0 active" href="signup.php">Sign Up</a>
                </div>
            </nav>

         <!--                ====================              main page           =======================          -->

            <div class="row my-container">

             <!--            =======================               image                 ======================            -->

                <div class="col col-md-6 col-lg-6 col-sm-12 order-12" style="min-width: 300px;">
                    <center><img src="image/photo1.png" alt="noany" class="ima"></center>
                </div>

             <!--             =======================               information                ========================           -->

                <div class="col col-md-6 col-lg-6 col-sm-12 order-2" class="info" style="min-width: 300px;">
                    <p class="info-one">Make more time for the work that matters most</p>
                    <p class="info-sec">E-company is the work management platform teams use to stay focused on the goals, projects, and daily tasks that grow business.<br>See how your team can structure work to turn all your goals into workable plans.<br>Don’t waste time on tedious manual tasks. Let Automation do it for you. Simplify workflows, reduce errors, and save time for solving more important problems.</p>
                </div>
            </div>

         <!--           ====================                  features page                     =================          -->

            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 feature-page">
                    <p style="padding-left: 40px; padding-top: 20px;">Features</p>
                </div>
            </div> 

         <!--               -=====================               slider                        =======================          -->

            <div class="row justify-content-around" style="background-color: #DFDFE5;">
                <div class="col col-md-10 col-lg-10 col-sm-10" style="min-width: 300px;">
                    <div id="carouselExampleIndicators" class="carousel slide" style="height: 80vh;box-shadow: 2px 2px 5px 5px #007;" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100" style="height: 80vh; background-color: #3423CA;" alt="First slide">
                                    <div class="row">
                                        <div class="col" style="height: 72vh; background-color: white;">
                                            <center><p style="font-size: 40px;font-weight: bolder;">Task Management</p></center>
                                            <center><img src="image/first.PNG" alt="no" style="width: 150px;"></center>
                                            <center><p style="font-size: 20px;">E-company is the work management platform which helps you to manage tasks.<br>You also need to provide task report.<br>The task history is also used to maintain record of tasks.</p></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" style="height: 80vh; background-color: #3423CA;" alt="First slide">
                                    <div class="row">
                                        <div class="col" style="height: 72vh; background-color: white;">
                                            <center><p style="font-size: 40px;font-weight: bolder;">Shift Scheduling</p></center>
                                            <center><img src="image/second.PNG" alt="no" style="width: 150px;"></center>
                                            <center><p style="font-size: 20px;">You can manage shifts quickly.<br>You can assign shift by using some clicks only.</p></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100" style="height: 80vh; background-color: #3423CA;" alt="First slide">
                                    <div class="row">
                                        <div class="col" style="height: 72vh; background-color: white;">
                                            <center><p style="font-size: 40px;font-weight: bolder;">Leave approval</p></center>
                                            <center><img src="image/thired.PNG" alt="no" style="width: 150px;"></center>
                                            <center><p style="font-size: 20px;">Manage leaves of employees easily.<br>Approve leaves through a single click.</p></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row blank"></div>

         <!--                   =======================                   pricing               =====================           -->

          <!--  <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xm-12 pricing-page">
                    <p style="padding-left: 40px; font-weight: bolder; padding-top: 20px;">Pricing</p>
                </div>
            </div> 
            <div class="row justify-content-around" style="background-color: #3423CA;">
                <div class="col col-lg-3 col-md-5 col-sm-10 col-xs-11 pri" style="min-width: 300px; margin-top: 30px;">
                    <center><p style="padding-top: 20px; font-size: 20px;">Free</p></center>
                    <center><p class="pri-p">₹<span class="main-price">0</span>/mo</p></center>
                    <center>
                        <div style="margin-right: auto;margin-left: auto;">
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                        </div>
                    </center>
                </div>
                <div class="col col-lg-3 col-md-5 col-sm-10 col-xs-11 pri" style="min-width: 300px; margin-top: 30px;">
                    <center><p style="padding-top: 20px; font-size: 20px;">Small bussiness</p></center>
                    <center><p class="pri-p">₹<span class="main-price">55</span>/mo</p></center>
                    <center>
                        <div style="margin-right: auto;margin-left: auto;">
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                        </div>
                    </center>
                </div>
                <div class="col col-lg-3 col-md-5 col-sm-10 col-xs-11 pri" style="min-width: 300px; margin-top: 30px;">
                    <center><p style="padding-top: 20px; font-size: 20px;">Professional</p></center>
                    <center><p class="pri-p">₹<span class="main-price">99</span>/mo</p></center>
                    <center>
                        <div style="margin-right: auto;margin-left: auto;">
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                            <p><img src="image/abcd.svg" height="20px"/>&nbsp;&nbsp;&nbsp;&nbsp;ewfjewejwfvevfegvf</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row blank-1"></div> -->

         <!--                   =======================              footer                ===================        -->

            <div class="row">
                <div class="col">
                    <center><img src="image/logo3.png" alt="no" style="height: 100px;"></center><br>
                </div>
            </div>
        </div>

        <!--             ======================            bootstrep plugin                 =================                  -->

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
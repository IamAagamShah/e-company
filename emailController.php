<?php



require_once 'vendor/autoload.php';
require_once 'dash.php';
define('EMAIL','bussiness.revealtherapy@gmail.com');
define('PASSWORD','7016828426');


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail,$token)
{
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify Email</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="container"
        style="margin-top: 20px;
        margin-left: 35%;
        margin-right: 35%;
        border: 2px;
        border-style: solid;
        border-radius: 10px;
        padding-bottom: 20px;
        padding-top: 20px;
        padding-right: 10px;
        padding-left:10px;
        text-align: center;
        border-color: blue; 
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: lightgrey;">
            <p>
                Thank you for signing up to our website.Please click on the link below 
                to verify your Email.
            </p>
            <a href="http://localhost/verify.php?token='.$token.'">
                <form class="form-group">
                    <button type="button" class="btn primary-btn btn-block btn-lg"
                    style="background-color: limegreen;
                    font-size: 25px;
                    color: whitesmoke;
                    border: 1px;
                    border-style: solid;
                    border-radius: 5px;
                    border-color: lime;">
                        Verify
                    </button>
                </form>
            </a>
        </div>
        
    </body>
    </html>
    ';

    // Create a message
    $message = (new Swift_Message('Verify Your Email'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
    }



    function sendPasswordResetLink($userEmail, $token,$ip)
    {
        global $mailer;

    $body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Recover Password</title>
    </head>
    <body>
        <div class="container" 
        style="margin-top: 20px;
        margin-left: 35%;
        margin-right: 35%;
        border: 2px;
        border-style: solid;
        border-radius: 10px;
        padding-bottom: 20px;
        padding-top: 20px;
        padding-right: 10px;
        padding-left:10px;
        text-align: center;
        border-color: blue; 
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: lightgrey;">
            <p>
                Hello there,
                Please click on the link below to reset your password.
                The password reset request was sent from following ip:'.$ip.'

            </p>           
            <a href="http://localhost/reset_password.php?passwordtoken='.$token.'">
                <form class="form-group">
                    <button type="button" class="btn primary-btn btn-block btn-lg" 
                    style="background-color: limegreen;
                    font-size: 25px;
                    color: whitesmoke;
                    border: 1px;
                    border-style: solid;
                    border-radius: 5px;
                    border-color: lime;">
                        Recover Password
                    </button>
                </form>
            </a>
        </div>
        
    </body>
    </html>
    ';

    // Create a message
    $message = (new Swift_Message('Reset your Password'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);            
    }




?>
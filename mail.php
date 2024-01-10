 <?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "info@anilongan.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap"
        rel="stylesheet">
    <style>
        html {
            background-color: rgb(0, 0, 0);
        }

        .message {
            margin: 200px 32%;
            padding: 10px;
            background-color: rgb(212, 210, 209);
            width: 600px;
            height: auto;
            border: 4px solid;
            border-image: linear-gradient(45deg, gold, deeppink) 1;
            clip-path: inset(0px round 10px);
            animation: huerotate 6s infinite linear;
            filter: hue-rotate(360deg);
        }

        @keyframes huerotate {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        .message .container {
            text-align: center;
        }

        .message .container h1 {
            font-size: 40px;
            color: black;
        }

        .message .container p {
            font-size: 20px;
            color: black;
        }

        .message .container a{
            color: red;

        }
    </style>
</head>

<body>
    <section class="message">
        <div class="container">
            <h1>Thank you for contacting me. <span> I will get back to you as soon as possible!</span> </h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        </div>
    </section>

</body>

</html>


';


?>
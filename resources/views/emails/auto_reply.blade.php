<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TRG-AFRICA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        p:last-child {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Thank You, {{ $messageContent['full_name'] }}!</h1>
        <p>We have received your mail, a consultant will contact you shortly.</p>
        <p><a class="align-items-center" href="https://a.co/d/304LrIC" style="font-size: large;">Grab a copy <b>"The Great Return"</b> Book on Amazon now <span class="social-icons-amazon">
                    <a href="https://a.co/d/304LrIC" target="_blank" title="amazon"><i class="fab fa-amazon"></i></a>
                </span> </a></p>
        <p>Do not forget to Like and Follow us on our social media handles below;</p>
        <p>
            <li class="social-icons-facebook"><a
                    href="https://www.facebook.com/profile.php?id=61559081140764"
                    target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i>Facebook</a></li>
            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                    title="X"><i class="fab fa-x-twitter"></i>Twitter</a></li>
            <li class="social-icons-youtube" style="border-radius: 40%"><a
                    href="http://www.youtube.com/@TGRAfrica" target="_blank" title="Youtube"><i
                        class="fab fa-youtube"></i>Youtube</a></li>
        </p>
        <p>Best regards,<br>TGR Africa Team</p>
    </div>
</body>

</html>
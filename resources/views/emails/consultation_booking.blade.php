<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thank You for Booking a Consultation</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div
        style="max-width: 600px; background-color: #ffffff; padding: 20px; margin: auto; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #2c3e50;">Thank You, {{ $messageContent['full_name'] }}!</h2>
        <p>We have successfully received your request for a consultation. Our team will reach out to you shortly to
            confirm the details.</p>
        <p>Best regards,<br>The TGR Africa Team</p>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Prospectus</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
        }

        .content {
            margin-bottom: 20px;
        }

        

        

        .footer {
            font-size: 12px;
            color: #999;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
        <div class="header">
            <!-- <img src="cid:logo_default_slim" alt="TGR Logo"> -->
            <img src="http://www.tgrafrica.com/img/logo-default-slim.png" alt="TGR Logo">

        </div>

        <div class="content">
            <p>Thank you for reaching out.</p>
            <p>Please find below a link/attached Investors Community Prospectus.</p>
            
            <a href="{{ $pdfUrl }}" target="_blank" class="cta-link">Download TGR Prospectus</a>
        </div>

        <div class="footer">
            <p>Best regards,</p>
            <p>The TGR Team</p>
            <p><small>&copy; 2024 TGR AFRICA. All rights reserved.</small></p>
        </div>

</body>

      

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <html>
    <body>
        <div class="form">
            <p>Welcome: <?php echo ($_POST["name"]); ?></p>
            <p>Your email address is: <?php echo ($_POST["email"]); ?></p> 
        </div>
    </body>
    </html>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="mafel.css">
<title>REGISTRATION</title>

</head>
<body>

    <form method="POST" action="./conn.php">
        <h1 style="color:white;">REGISTRATION FORM</h1>
        <div class="input">
            <input type="text" name="First_name" placeholder="First_name" required>
        </div>
        <div class="input">
            <input type="text" name="Last_name" placeholder="Last_name" required>
        </div>
        <div class="input">
            <input type="text" name="Username" placeholder="Username" required>
        </div>
        <div class="input">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="confirmPassword">
            <input type="password" name="Confirm_password" placeholder="Confirm-Password" required>
        </div>
        <div class="input">
            <input type="number" name="contact" placeholder="Contact" required>
        </div>
        <div class="submit">
            <input type="submit" name="btn" value="submit" placeholder="Submit">
        </div>
        <a href="login.php"><h5>Back</h5></a>
    </form>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="mafel.css">

<title>LOGIN</title>
</head>
<body>
      <form action="log.php" method="$_POST">
          <h1>LOGIN</h1>
          <div class="input">
              <input type="text"   name="Username" placeholder="Username" required>
          </div>
          <div class="input">
              <input type="password"   name="password"  placeholder="password" required>
          </div>
          <div class="input">
              <input type="submit" name="submit" value="submit" placeholder="Login">
          </div>
        <a href="reg.php"><p>Have no account? Sign up here</p></a>
        <!-- <a href="#"><p>Forget Username or Password?</p></a> -->
      </form>       
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
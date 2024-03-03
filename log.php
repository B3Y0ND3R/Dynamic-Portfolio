<?php

require('db.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="shortcut icon" type="x-icon" href="a.png">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="login.jpeg" alt="">
      </div>
    </div>


    <div class="forms">
      <div class="form-content">



        <?php
          if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data = "SELECT * from reg_table";
            $run = mysqli_query($dbcon, $data);
            $user_data = mysqli_fetch_array($run);

            if ($email === $user_data['email'] && $password === $user_data['password']) {
              $_SESSION['isUserLoggedIn'] = true;
              $_SESSION['emailId'] = $email;
              $_SESSION['pswd'] = $password;
                if (isset($_POST['remember'])) {

                  setcookie("email", $email, time() + (86400 * 30), "/");
                }

              echo "<script>window.location.href = 'on.php' </script>";
            } else {
            echo "<script>alert('incorrect email or password !')</script>";
            }
          }

        ?>


        <div class="login-form">
            <div class="title">Login</div>
          <form method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required value="<?php echo $_SESSION['pswd']; ?>">
              </div>

              <div class="text">
                <div>
              <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Remember Me
                </label></div>
                <a href="#">Forgot password?</a>
            </div>
              <div class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
            </div>
        </form>
      </div>


      




        
    
    
    </div>
  </div>
</body>
</html>
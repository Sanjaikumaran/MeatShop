<?php

include 'C:\\xampp/htdocs/meat-shop-main/clases/database.class.php';
include 'C:\\xampp/htdocs/meat-shop-main/clases/user.class.php';


if(isset( $_POST['username']) and isset( $_POST['mail']) and isset( $_POST['password'])){
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    
    

    $result = user::signup($username, $mail, $password);

    if($result == true)
    {
      load_template('signup-success');
     return true;
    }
    else{
      return false;
    }

  }

if(isset( $_POST['user-login']) and isset( $_POST['password-login'])){

  $user = $_POST['user-login'];
  $pass = $_POST['password-login'];

$output = user::login($user, $pass);

if($output)
{
  load_template('login-success');
}
else
{
  return false;
}
}
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="post">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user-login" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password-login" required />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>

          <form class="sign-up-form" action="log.php" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input
                type="text"
                name="username"
                placeholder="Username"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="mail" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                name="password"
                placeholder="Password"
                required
              />
            </div>
            <button type="submit" class="btn solid">Submit</button>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here?</h3>
            <p>register to our site and explore our collection of meat</p>
            <button class="btn transparent" id="sign-up-btn">Sign Up</button>
          </div>
          <img src="./img/log.png" class="image" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3>One of us?</h3>
            <p>Login to take your cart inside</p>
            <button class="btn transparent" id="sign-in-btn">Sign In</button>
          </div>
          <img src="./img/register.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
  </body>
</html>

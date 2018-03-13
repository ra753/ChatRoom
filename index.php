<html>
<head>
<title>Login</title>
<body>
  <link type="text/css" rel="stylesheet" href="index_style.css" />
  <style>
  .loginbutton {
    -webkit-border-radius: 22;
    -moz-border-radius: 22;
    border-radius: 22px;
    font-family: Georgia;
    color: #ffffff;
    font-size: 13px;
    background: #d93434;
    padding: 10px 20px 10px 20px;
    border: solid #1f628d 2px;
    text-decoration: none;
  }

  .loginbutton:hover {
    background: #07ed5f;
    text-decoration: none;
    font-size: 15px;
  }
  </style>
  <div class="login">
  <p class="logup">Login to the Chat Room </p>

  <form id="form1" action="loggedIn.php" method="post">
  User Name:  <input type="text" name="username"> </br>
  Password:  <input type="password" name="password"> </br>
  <input class="loginbutton"type="submit" name="Log In">
  </form>
</body>
</div>

  <hr>

<div class="login2">
  <p class="logup">New User? Sign Up now! </p>
  <form id="form2" action="loggedUp.php" method="post">
    Name: <input type="text" name="name"></br>
    Phone number: <input type="number" name="number"></br>
    Birthday: <input type="date" name="dob"></br>
    Password: <input type="password" name="password"></br>
    <input class="loginbutton"type="submit" name="Sign Up">
  </form>
</div>
</body>
</html>
  </head>

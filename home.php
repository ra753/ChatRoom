<?php
session_start();
?>
<html>
<head>
<title>Active Now</title>
<body>
<!--<link type="text/css" rel="stylesheet" href="home_style.css" />-->
<style>
body {
  <!--background-image: url(bluebkg.png);-->
  background-color: #6b6c6d;
}
.output {
  position: absolute;
  color: black;
  top:20%;
  left:25%;
  cols: 50;
  overflow: scroll;
}
.btn {
  position:absolute;
  top:100%;
  left: 47%;
  -webkit-border-radius: 22;
  -moz-border-radius: 22;
  border-radius: 22px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  background: #d93434;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #07ed5f;
  text-decoration: none;
}

.logoutbutton {
   position:absolute;
    transition: .5s ease;
    top: 10%;
    left: 90%;
  background: #ffbdf1;
  background-image: -webkit-linear-gradient(top, #ffbdf1, #e3092a);
  background-image: -moz-linear-gradient(top, #ffbdf1, #e3092a);
  background-image: -ms-linear-gradient(top, #ffbdf1, #e3092a);
  background-image: -o-linear-gradient(top, #ffbdf1, #e3092a);
  background-image: linear-gradient(to bottom, #ffbdf1, #e3092a);
  -webkit-border-radius: 22;
  -moz-border-radius: 22;
  border-radius: 22px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  border: solid #1f628d 2px;
  text-decoration: none;
}

.logoutbutton:hover {
  background: #91f791;
  background-image: -webkit-linear-gradient(top, #91f791, #07d900);
  background-image: -moz-linear-gradient(top, #91f791, #07d900);
  background-image: -ms-linear-gradient(top, #91f791, #07d900);
  background-image: -o-linear-gradient(top, #91f791, #07d900);
  background-image: linear-gradient(to bottom, #91f791, #07d900);
  text-decoration: none;
}

.colorbar {
  color: green;
  height: 0px;
  border-bottom:solid 35px #1ce81c;
}

.send {
   position:absolute;
   transition: .5s ease;
   top: 70%;
   left: 25%;

}
</style>
<div class="colorbar">
<h2 style="color:black;"><?php echo $_SESSION['name']; ?> -Online</h2>
</div>

<div class="output">
  hi


<!--here chat will be displayed-->

</div>

<!--send box-->
<div class="send">
<?php
include "dbcoonect.php"
//$cols=100;
//$rows=50;
?>

<form id="send" action="send.php" method="POST">
<textarea name="msg" placeholder="Enter your message"cols="100" rows="5">
</textarea></br>
<input class="btn" type="submit" value="Send">
</form>
</div>
<!--logout-->
<form id="logout" action="logout.php" method="POST">
  <input class="logoutbutton" type="submit" value="logout">

</body>
</head>
</html>

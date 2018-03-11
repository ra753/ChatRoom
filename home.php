<?php
session_start();
if (!isset($_SESSION['name'])) {
    echo "You must log in first";
  header('location: index.php');
}
?>

<html>
<head>
<title>Active Now</title>
<body>
<!--<link type="text/css" rel="stylesheet" href="home_style.css" />-->
<style>
body {
  background-image: url(home.png);
}
.output {
  position: absolute;
  background-color: #ed477e;
  box-shadow: 0px 1px 1px #000;
  height: 333px;
  width: 736px;
  left: 25%;
  top: 20%;
  margin-bottom: 20px;
  overflow: auto;
}
.btn {
  position:absolute;
  top:100%;
  left: 20%;
  -webkit-border-radius: 22;
  -moz-border-radius: 22;
  border-radius: 22px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  background: #d93434;
  padding: 10px 20px 10px 20px;
  border: solid #1f628d 2px;
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
  color: #f54f65;
  height: 0px;
  border-bottom:solid 35px #f54f65;
}

.send {
   position:absolute;
   transition: .5s ease;
   top: 70%;
   left: 25%;
   color: #ed477e;

}

.reloadbtn {
  position:absolute;
  top:83.3%;
  left: 60%;
  -webkit-border-radius: 22;
  -moz-border-radius: 22;
  border-radius: 22px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  background: #d93434;
  padding: 10px 20px 10px 20px;
  border: solid #1f628d 2px;
  text-decoration: none;
}

.reloadbtn:hover {
  background: #07ed5f;
  text-decoration: none;
}
</style>
<div class="colorbar">
<h2 style="color:black;"><?php echo $_SESSION['name']; ?> -Online</h2>
</div>

<div class="output">
  <?php
    include 'dbcoonect.php';
    $sql="SELECT * FROM chatbox";
    $result=$connection->query($sql);

    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        echo  "[". $row["time"]. "]". " ". $row["name"]. "-->".$row["msg"]. "</br>";
        echo "</br>";
      }
    }
    else {
      echo "0 results";
    }
  ?>
</div>



<form id="reload" action="home.php" method="POST">
  <input class="reloadbtn" type="submit" value="Check">
</form>
<div class="send">

<form id="send" action="send.php" method="POST">
<textarea name="msg" placeholder="Enter your message"cols="100" rows="5">
</textarea></br>
<input class="btn" type="submit" value="Send">
</form>
</div>
<!--logout-->
<form id="logout" action="logout.php" method="POST">
  <input class="logoutbutton" type="submit" value="logout">
</form>



</body>
</head>
</html>

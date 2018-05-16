<?php
   include("http://192.168.1.108/config.php");
   session_start();

$servername = "192.168.1.108";
$username = "bratva";
$password = "redhat";
$dbname = "nishi";


$name=$_POST['uname'];
$pass=$_POST['psw'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,password from student WHERE username = '$name' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $a= $row["username"];
    $b= $row["password"]; 
}
//echo $a;
//echo $b;
}
if ($name=$a && $pass=$b)
{ 	
         header("location: http://192.168.1.108/service_storage.html");
}

$conn->close();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body bgcolor = "orange">
              <div align = "center">
                <div class="container">
                  <form action = "" method = "post">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button type="submit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
              </div>
</body>
</html>

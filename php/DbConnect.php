<?php
//connect with DB
$conn = mysqli_connect("localhost", "root", "", "zee_store");

//check the connection  
if (mysqli_connect_errno()) {
  echo "faild to connect with database!" . $conn->connect_errno;
  die("retry");
}

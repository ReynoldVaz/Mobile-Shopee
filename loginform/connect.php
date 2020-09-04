<?php
  $Username=$_POST['Username'];
 $Password=$_POST['Password'];

//database connection

$conn = new mysqli('localhost','root','','login');
$conn->query("INSERT into loginform(Username, Password) values('".$Username."','".$Password."')");

//if($conn->connect_error){
  //  die('Connection Failed : '.$conn->connect_error);
//}else{
  //  $stmt= $conn->prepare("insert into loginform(Username, Password)
// 
//    $stmt->bind_param("ss",$Username,$Password);
  //  $stmt->execute();
//    echo "login succesfull";
//    $stmt->close();
 //  $conn->close();
    
// mysql_connect
//}

?>
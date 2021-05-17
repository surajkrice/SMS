<?php

session_start();

$con = mysqli_connect('localhost','lisa','191 Tree Road');

mysqli_select_db($con, userregistration);

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";
$result = mysql_query($con);

$num = mysql_num_rows($result);

if($num == 1){
  echo" username Already Taken";
}else{
  $reg= "insert into usertable(name , password) values ('$name' , '$pass')";
  mysqli_query($con, $reg);
  echo" Registration Successful";
}

?>

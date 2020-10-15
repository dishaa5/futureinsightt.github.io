<?php

  session_start();

  $con = mysqli_connect('localhost','root');
  if($con)
{
  echo"Connection successfull";

}else{
  echo"No connection";
}


mysqli_select_db($con, 'contactusdata');

$username = $_POST['username'];

$password = $_POST['password'];


$q = "select * from signinusers where username = '$username' && password ='$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
  $_SESSION['username']=$username;
  header('location:index.php');
}
else{
  header('location:login.php');
}

 ?>

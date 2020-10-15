
<?php

  session_start();
  header('location:login.php');
  $con = mysqli_connect('localhost','root');
  if($con)
{
  echo"Connection successfull";

}else{
  echo"No connection";
}


mysqli_select_db($con, 'contactusdata');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$q = "select * from signinusers where username = '$username' && password ='$password' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
  echo"duplicate data";
}
else{
  $sql="insert into signinusers(username, email, password)
  values ('$username', '$email','$password')";
  mysqli_query($con, $sql);

}






 ?>

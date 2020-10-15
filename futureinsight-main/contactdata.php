<?php

$con = mysqli_connect('localhost','root');
if($con)
{
  echo"Connection successfull";

}else{
  echo"No connection";
}


mysqli_select_db($con, 'contactusdata');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mobileno = $_POST['mobileno'];
$comments = $_POST['message'];

$query ="insert into userinfodata(name, email, subject, mobileno, message)
values ('$name','$email','$subject','$mobileno','$comments')";


mysqli_query($con, $query);

// header('location:index.php');

 ?>

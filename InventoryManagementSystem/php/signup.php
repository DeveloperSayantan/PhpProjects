<?php
include_once("connection.php");

$f=$_POST['firstname'];
$l=$_POST['lastname'];
$u=$_POST['username'];
$m=$_POST['mobile'];
$e=$_POST['email'];
$p=$_POST['pass'];
$r=$_POST['repass'];


$sql="Insert Into signup(firstname,lastname,username,mobile,email,pass,repass) values('$f','$l','$u','$m','$e','$p','$r')";

if(mysqli_query($con, $sql)){
    header("location:login.html");
}
else{
    echo "Error: ".mysqli_error($con);
}
?>
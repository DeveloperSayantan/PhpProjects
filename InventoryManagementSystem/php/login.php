<?php
include_once("connection.php");
if(isset($_REQUEST["submit"]))
{
    $u=$_REQUEST["username"];
    $p=$_REQUEST["password"];
    $q=mysqli_query($con,"select * from signup where username='$u' && pass='$p'");
    $rowcount=mysqli_num_rows($q);
    if($rowcount==true)
    {
         header("location:dashboard.html");
    }
    else
    {
        header("location:404.html");
    }
}
?>
<?php
    include_once("connection.php");

    $i = $_POST['cous_id'];
    $nm =$_POST['cous_name'];
    $cm =$_POST['cous_mobile'];
    $ma =$_POST['cous_mail'];

    echo $i." ".$nm." ".$cm." ".$ma; 

    $data = "INSERT INTO coustomer ( cous_id , cous_name , cous_mobile, cous_mail) VALUES('$i','$nm', '$cm', '$ma')";

    if($i!=0)
    {
    if(mysqli_query($con, $data))
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error:".mysqli_error($con);
    }
    
    }
?>
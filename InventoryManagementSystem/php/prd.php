<?php
    include_once("connection.php");

    $i = $_POST['prd_id'];
    $nm =$_POST['prd_name'];
    $typ =$_POST['prd_typ'];

    echo $i." ".$nm." ".$typ; 

    $data = "INSERT INTO product ( prd_id , prd_name, prd_typ) VALUES('$i','$nm', '$typ')";

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
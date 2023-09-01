 <?php
    include_once("connection.php");

    $i = $_POST['cat_id'];
    $nm =$_POST['cat_name'];
    $typ =$_POST['cat_typ'];

    echo $i." ".$nm." ".$typ; 

    $data = "INSERT INTO category ( cat_id , cat_name , cat_typ) VALUES('$i','$nm', '$typ')";

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
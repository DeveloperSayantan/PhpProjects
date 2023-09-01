<?php
    $server = "localhost";
    $usernm = "root";
    $pwd    = "";
    $dbnm   ="IMS";
    
    $con = mysqli_connect($server, $usernm, $pwd, $dbnm);

    if(!$con)
    {
        die ("Connection Error Cause:" .mysqli_connect_eror());
    }
    else
    {
        echo " "; 
    }
?>
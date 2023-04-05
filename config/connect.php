<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="polls";

    $con=new mysqli($servername, $username, $password, $db);

    if($con->connect_error)
    {
        die("Error");
    }
    ?>
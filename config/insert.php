<?php
    include 'connect.php';
    $Nume =$_POST["nume"];
    $Grupa=$_POST["grupa"];
    $ProbTehnice=$_POST["test"];
    $AlteProbleme=$_POST["alteProb"];
    $Comentarii=$_POST["comentarii"];

    $sql="INSERT INTO problema(nume,grupa,problema,altele,comentariu) 
    VALUES('$Nume','$Grupa','$ProbTehnice','$AlteProbleme','$Comentarii')";

    if( $con->query($sql))
    {
        $con->close();
        header('location:../index.php?insert=0k');
    }else
    {
        die("Eroare la inserare ".$con->error);
    }
?>
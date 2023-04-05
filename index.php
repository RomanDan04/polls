<?php
    include 'config/connect.php';
    $sql="SELECT * FROM problema";
    $results=$con->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Afisare probleme intilnite</h1>
    <?php include 'config/errors.php'; ?>
    <a class="btn btn-primary" href="create.php" role="button" style="background-color: #6aa84f;
                                color: black; border: 1px solid black; border-radius: 0; margin-bottom: 5px;width: 10%;
                                    margin-top: 5px;">Înserare</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Nume,Prenume</th>
            <th scope="col">Grupa</th>
            <th scope="col">Probleme tehnice identificate</th>
            <th scope="col">Alte probleme</th>
            <th>Comentarii</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($results as $row):
        ?>
        <tr>
            <td><?=$row['nume'];?></td>
            <td><?=$row['grupa'];?></td>
            <td><?=$row['problema'];?></td>
            <td><?=$row['altele'];?></td>
            <td><?=$row['comentariu'];?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
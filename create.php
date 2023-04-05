<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="MyFile/main.css">
    <title>Document</title>
</head>
<body>
<form action="config/insert.php" method="post">
    <div class="container">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Nume, prenume</label><span>*</span>
                <input required name="nume" type="text" class="form-control" id="formGroupExampleInput" placeholder="Raspunsul dvs.">
            </div>
    </div>
    <div class="container">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Grupa</label><span>*</span>
                <select class="form-control w-25" name="grupa" required>
                    <option value="" disabled hidden selected>Alegeti</option>
                    <option>PAPP1911</option>
                    <option>PAPP1821</option>
                    <option>PAPP1731</option>
                    <option>PAPP1641</option>
                    <option>AAW1912</option>
                    <option>AAW1822</option>
                    <option>AAW1732</option>
                    <option>AAW1642</option>
                </select>
            </div>
    </div>
    <div class="container">
        <label for="formGroupExampleInput">Probleme tehnice identificate</label><span>*</span>
            <div class="form-group form-check">
                <input name="test" type="checkbox" class="form-check-input" id="exampleCheck1" value="Lipsa calculator">
                <label class="form-check-label" for="exampleCheck1">Lipsa calculator</label>
            </div>
            <div class="form-group form-check">
                <input name="test" type="checkbox" class="form-check-input" id="exampleCheck2" value="Telefon mobil invechit">
                <label class="form-check-label" for="exampleCheck2">Telefon mobil invechit</label>
            </div>
            <div class="form-group form-check">
                <input name="test" type="checkbox" class="form-check-input" id="exampleCheck3" value="Am cel putin un dispozitiv">
                <label class="form-check-label" for="exampleCheck3">Am cel putin un dispozitiv</label>
            </div>
            <div class="form-group form-check">
                <input name="test" type="checkbox" class="form-check-input" id="exampleCheck4" value="Nu am intimpinat probleme">
                <label class="form-check-label" for="exampleCheck4">Nu am intimpinat probleme</label>
            </div>
    </div>
    <div class="container">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Alte probleme privind transmiterea in termenul stabilit a temelor pentru acasa (Daca nu sunt scrieti Nu) <span>*</span></label>
                <input required type="text" name="alteProb" class="form-control" id="formGroupExampleInput" placeholder="Raspunsul dvs.">
            </div>
    </div>
    <div class="container">
            <div class="form-group col-md-6">
                <label for="formGroupExampleInput">Comentarii (privind solutionarea problemelor identificate) ale profesorilor vizati (Daca nu sunt scrieti Nu) <span>*</span></label>
                <input required name="comentarii" type="text" class="form-control" id="formGroupExampleInput" placeholder="Raspunsul dvs.">
            </div>
    </div>
    <a><input class="btn btn-primary" href="index.php" id="submit" role="button" type="submit" value="Trimiteti"></a>
</form>
    <script src="MyFile/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
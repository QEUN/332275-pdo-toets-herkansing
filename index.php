<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(249, 249, 249);
        }
    </style>
    <title>PDO</title>
</head>
<body>
<h1>Maak je eigen burrito</h1>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="" method="POST">
                <p>Burritoformaat</p>
                <select name="burritoformaat" class="form-select" aria-label="Default select example">
                    <option selected value="20-centimeter">20 centimeter</option>
                    <option value="25-centimeter">25 centimeter</option>
                    <option value="30-centimeter">30 centimeter</option>
                </select>
                <br>
                <p>Saus</p>
                <select name="saus" id="saus" class="form-select" aria-label="Default select example">
                    <option selected value="slasa">Salsa</option>
                    <option value="crudo">crudo</option>
                    <option value="salsa-verde">salsa verde</option>
                    <option value="salsa-roja">salsa roja</option>
                    <option value="creme-fraiche">creme fraiche</option>
                </select>

                <br><br>
                <p>bonen</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="kidney-bonen" name="bonen" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        kidney bonen
                    </label>
                </div>

                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="zwarte-bonen" name="bonen" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        zwarte bonen
                    </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="bruine-bonen" name="bonen" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        bruine bonen
                    </label>
                </div>
                <br><br>
                <p>rijst</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="witte-rijst" name="rijst" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        witte rijst
                    </label>
                </div>

                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="zwarte-rijst" name="rijst" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        zwarte rijst
                    </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="bruine-rijst" name="rijst" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        bruine rijst
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-primary">Verstuur</button>
                </div>
            </form>
        </div>
    </div>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
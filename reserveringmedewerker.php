<?php
    include("./assets/config.php");
    session_start();

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bon Temps</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="overzicht.php">Bon Temps</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="card-body">
            <h4 class="card-title">Nieuwe klant in reserveringen zetten</h4>
            <form action="Submit.php" method="post" class="align-content-center">

            <div class="mb-3">
                <label for="KlantID" class="form-label">KlantID:</label>
                <input type="tel" name="KlantID" class="form-control" id="KlantID" placeholder="ID" required>
            </div>
            <div class="mb-3">
                <label for="Naam" class="form-label">Naam:</label>
                <input type="text" name="Naam" class="form-control" id="Naam" placeholder="Naam" required>
            </div>
            <div class="mb-3">
                <label for="Datum" class="form-label">Reserverings Datum:</label>
                <input type="date" name="Datum" class="form-control" id="Datum" placeholder="Datum" required>
            </div>
            <div class="mb-3">
                <label for="Tijd" class="form-label">Reserverings tijdstip:</label>
                <input type="time" name="Tijd" class="form-control" id="Tijd" placeholder="Tijd" required>
            </div>
            <div class="mb-3">
                <label for="Aantal" class="form-label">Aantal personen:</label>
                <input type="tel" name="Aantal" class="form-control" id="Aantal" placeholder="Vul aantal personen" required minlength="1" maxlength="1">
            </div>
            <div class="mb-3">
                <label for="Tafelnummer" class="form-label">Tafelnummer:</label>
                <input type="tel" name="Tafelnummer" class="form-control" id="Tafelnummer" placeholder="Tafelnummer" required minlength="1" maxlength="1">
            </div>
           

            <button type="submit" name="reserveringmedewerker" class="btn btn-primary">Reservering toevoegen</button>
            <a href="overzicht.php" class="btn btn-danger"> Annuleren </a>
            
        </form>
                      
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
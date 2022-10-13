<?php
    $PageName = "Accountbeheren";
    include('AccountGegevens.php');  
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
        <!-- Page content-->
    <div class="d-flex justify-content-center">
        <form class="form-control m-5 w-75" action="Submit.php" method="post" name="wachtwoordWijzigen">
                <div class="row mb-3">   
                    <div>
                        <label class="form-label" for="VoorbeeldOudWachtwoord2Input">Oud Wachtwoord:</label>
                        <input type="password" class="form-control" name="OudWachtwoord" placeholder="**********" maxlength="255" required>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldNieuwWachtwoordInput">Nieuw Wachtwoord:</label>
                        <input type="password" class="form-control" name="NieuwWachtwoord" placeholder="**********" maxlength="255" required>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldNieuwWachtwoord2Input">Nieuw Wachtwoord:</label>
                        <input type="password" class="form-control" name="NieuwWachtwoord2" placeholder="**********" maxlength="255" required>
                    </div>
                </div>                        
                <div class="text-left float-left">
                    <button type="submit" name="wachtwoordWijzigen" class="btn btn-primary">Wachtwoord wijzigen</button>
                    <a type="button" name="annuleren" href="AccountBeheren.php" class="btn btn-secondary">Annuleren</a>
                </div>
        </form>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
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
        <form class="form-control m-5 w-75" action="Submit.php" method="post" name="accountWijzigen">
                <div class="row mb-3">   
                    <div class="col">
                        <label class="form-label" for="VoorbeeldNaamInput">Naam:</label>
                        <input type="text" class="form-control" name="Naam" placeholder="<?php echo $_SESSION['DataFieldNaam']; ?>" value="<?php echo $_SESSION['DataFieldNaam']; ?>" maxlength="255">
                    </div>
                    <div class="col">
                        <label class="form-label" for="VoorbeeldEmailInput">Email:</label>
                        <input type="email" class="form-control" name="Email" placeholder="<?php echo $_SESSION['DataFieldEmail']; ?>" value="<?php echo $_SESSION['DataFieldEmail']; ?>" maxlength="255">
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">Adres:</label>
                        <input type="text" class="form-control" name="Adres" placeholder="<?php echo $_SESSION['DataFieldAdres']; ?>" value="<?php echo $_SESSION['DataFieldAdres']; ?>" maxlength="255">
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">Postcode:</label>
                        <input type="text" class="form-control" name="Postcode" placeholder="<?php echo $_SESSION['DataFieldPostcode']; ?>" value="<?php echo $_SESSION['DataFieldPostcode']; ?>" maxlength="6">
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">TelefoonNummer:</label>
                        <input type="text" class="form-control" name="Telefoon" placeholder="<?php echo $_SESSION['DataFieldTelefoon']; ?>" value="<?php echo $_SESSION['DataFieldTelefoon']; ?>" maxlength="10">
                    </div>
                </div>                        
                <div class="text-left float-left">
                    <button type="submit" name="accountWijzigen" class="btn btn-primary">Accountgegevens wijzigen</button>
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
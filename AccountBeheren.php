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
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="OverzichtKlant.php">Bon Temps</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Accountbeheren.php">Mijn account</a></li>
                                <li><a class="dropdown-item" href="inlog.php">Uitloggen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->

    <div class="d-flex justify-content-center">
        <form class="form-control mt-5 w-75 " action="Submit.php" method="post" name="accountverwijderen">
                <div class="row mb-3">   
                    <div class="col">
                        <label class="form-label" for="VoorbeeldNaamInput">Naam:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldNaam']; ?>" aria-label="First name" disabled>
                    </div>
                    <div class="col">
                        <label class="form-label" for="VoorbeeldEmailInput">Email:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldEmail']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">Adres:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldAdres']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">Postcode:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldPostcode']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">TelefoonNummer:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldTelefoon']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput">Wachtwoord:</label>
                        <input type="text" class="form-control" placeholder="**************" aria-label="First Email" disabled>
                        <a href="wachtwoordWijzigen.php" class="link-info">wachtwoord weizigen</a>
                    </div>
                </div>                        
            <div class="text-left float-left">
                    <a type="button" href="accountWijzigen.php" class="btn btn-warning">Accountgegevens wijzigen</a>
                    <button type="submit" name="accountverwijderen" class="btn btn-danger" onclick="return confirm('wilt u definitief uw account verwijderen')">Account verwijderen</button>
            </div>

            <?php 
                if(isset($_SESSION['wijzig']))
                {
                    ?>
                    
                    <div class="alert alert-success mt-3" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p>Accountgegevens zijn succesvol gewijzigd</p>
                    <p class="mb-0"></p>
                    </div>     
                <?php  
                unset($_SESSION['wijzig']);      
                }
            ?>

            <?php 
                if(isset($_SESSION['wachtwoordwijzig']))
                {
                    ?>
                    
                    <div class="alert alert-success mt-3" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p>Wachtwoord is succesvol gewijzigd</p>
                    <p class="mb-0"></p>
                    </div>     
                <?php  
                unset($_SESSION['wachtwoordwijzig']);      
                }
            ?>

        </form>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
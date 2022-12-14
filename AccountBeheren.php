<?php
    $PageName = "Accountbeheren";
    include('AccountGegevens.php');
    include('functions.php');  
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
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo Navbar_Account($_SESSION['language']); ?></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Accountbeheren.php"><?php echo Navbar_AccountBeheren($_SESSION['language']); ?></a></li>
                                <li><a class="dropdown-item" href="inlog.php"><?php echo Navbar_Accountuitloggen($_SESSION['language']); ?></a></li>
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
                        <label class="form-label" for="VoorbeeldNaamInput"><?php echo Accountbeheren_Name($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldNaam']; ?>" aria-label="First name" disabled>
                    </div>
                    <div class="col">
                        <label class="form-label" for="VoorbeeldEmailInput"><?php echo Accountbeheren_Email($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldEmail']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput"><?php echo Accountbeheren_Adres($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldAdres']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput"><?php echo Accountbeheren_Postcode($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldPostcode']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput"><?php echo Accountbeheren_Telefoonnummer($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo $_SESSION['DataFieldTelefoon']; ?>" aria-label="First Email" disabled>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldAdresInput"><?php echo Accountbeheren_Wachtwoord($_SESSION['language']); ?></label>
                        <input type="text" class="form-control" placeholder="**************" aria-label="First Email" disabled>
                        <a href="wachtwoordWijzigen.php" class="link-info"><?php echo Accountbeheren_btnWachtwoordWijzigen($_SESSION['language']); ?></a>
                    </div>
                </div>                        
            <div class="text-left float-left">
                    <a type="button" href="accountWijzigen.php" class="btn btn-warning"><?php echo Accountbeheren_btnAccountWijzigen($_SESSION['language']); ?></a>
                    <button type="submit" name="accountverwijderen" class="btn btn-danger" onclick="return confirm('wilt u definitief uw account verwijderen')"><?php echo Accountbeheren_btnAccountVerwijderen($_SESSION['language']); ?></button>
            </div>

            <?php 
                if(isset($_SESSION['wijzig']))
                {
                    ?>
                    
                    <div class="alert alert-success mt-3" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p><?php echo Accountbeheren_meldingGegevens($_SESSION['language']); ?></p>
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
                    <p><?php echo Accountbeheren_meldingWachtwoord($_SESSION['language']); ?></p>
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
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
        <!-- Page content-->
    <div class="d-flex justify-content-center">
        <form class="form-control m-5 w-75" action="Submit.php" method="post" name="wachtwoordWijzigen">
                <div class="row mb-3">   
                    <div>
                        <label class="form-label" for="VoorbeeldOudWachtwoord2Input"><?php echo wachtwoordwijzigen_Oudwachtwoord($_SESSION['language']); ?></label>
                        <input type="password" class="form-control" name="OudWachtwoord" placeholder="**********" maxlength="255" required>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldNieuwWachtwoordInput"><?php echo wachtwoordwijzigen_Nieuwwachtwoord($_SESSION['language']); ?></label>
                        <input type="password" class="form-control" name="NieuwWachtwoord" placeholder="**********" maxlength="255" required>
                    </div>
                    <div>
                        <label class="form-label" for="VoorbeeldNieuwWachtwoord2Input"><?php echo wachtwoordwijzigen_Nieuwwachtwoord($_SESSION['language']); ?></label>
                        <input type="password" class="form-control" name="NieuwWachtwoord2" placeholder="**********" maxlength="255" required>
                    </div>
                </div>                        
                <div class="text-left float-left">
                    <button type="submit" name="wachtwoordWijzigen" class="btn btn-primary"><?php echo Accountbeheren_btnAccountWijzigen($_SESSION['language']); ?></button>
                    <a type="button" name="annuleren" href="AccountBeheren.php" class="btn btn-secondary"><?php echo BtnAnnuleren($_SESSION['language']); ?></a>
                </div>

            <?php 
                if(isset($_SESSION['oudwachtwoord']))
                {
                    ?>
                    
                    <div class="alert alert-danger mt-3" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p><?php echo wachtwoordwijzigen_MeldingOudWachtwoord($_SESSION['language']); ?></p>
                    <p class="mb-0"></p>
                    </div>     
                <?php  
                unset($_SESSION['oudwachtwoord']);      
                }        
            ?>

            <?php 
                if(isset($_SESSION['OudEnNieuwWachtwoord']))
                {
                    ?>
                    
                    <div class="alert alert-danger mt-3" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p><?php echo wachtwoordwijzigen_MeldingOudNieuwWachtwoord($_SESSION['language']); ?></p>
                    <p class="mb-0"></p>
                    </div>     
                <?php  
                unset($_SESSION['OudEnNieuwWachtwoord']);      
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
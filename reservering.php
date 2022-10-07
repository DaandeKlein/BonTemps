<?php
    include("./assets/config.php");
    session_start();

    if(!isset($_SESSION["ingelogd"])){
        header("location: inlog.php");
        exit;
    }else {
        $USERNAME = $_SESSION['naam'];
    }
   
    if(!isset($USERNAME)){
        $USERNAME = "Account";
    }
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
                <a class="navbar-brand" href="overzichtklant.php">Bon Temps</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Nieuwe reservering</a></li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="account-user-name"><?php echo $USERNAME?></span></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Mijn account</a></li>
                                <li><a class="dropdown-item" href="inlog.php">Uitloggen</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="card-body">
            <h4 class="card-title">Nieuwe reservering aanmaken</h4>
            <form action="Submit.php" method="post" class="align-content-center">

            <div class="mb-3">
                <label for="Datum" class="form-label">Kies uw datum:</label>
                <input type="date" name="Datum" class="form-control" id="Datum" placeholder="Datum" required>
            </div>
            <div class="mb-3">
                <label for="Tijd" class="form-label">Kies uw tijdstip:</label>
                <input type="time" name="Tijd" class="form-control" id="Tijd" placeholder="Tijd" required>
            </div>
            <div class="mb-3">
                <label for="Aantal" class="form-label">Aantal personen:</label>
                <input type="tel" name="Aantal" class="form-control" id="Aantal" placeholder="Vul aantal personen" required minlength="1" maxlength="1">
            </div>

            <button type="submit" name="reservering" class="btn btn-primary">Plaats uw reservering</button>
            <a href="overzichtklant.php" class="btn btn-danger"> Annuleren </a>
            
        </form>
                      
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
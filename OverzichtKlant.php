<?php
//Connectie database
    include("./assets/config.php");
    session_start();

//Als gebruiker niet is ingelogd en probeert op deze pagina te komen, wordt de klant naar de inlogpagina gestuurd.
        if(!isset($_SESSION["ingelogd"])){
            header("location: inlog.php");
            exit;
        }else {
            $USERNAME = $_SESSION['naam'];
        }
       
        if(!isset($USERNAME)){
            $USERNAME = "Account";
        }
//Code die de ingelogde gebruiker selecteert
        $query_klantreservering = "
        Select *
        From
            klantreservering
        Where
          KlantID = '".$_SESSION['ingelogd']."'
        ";
    
        $table_klantreservering = "";
    
        $query_klantreservering_run = mysqli_query($con, $query_klantreservering);
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
                    <li class="nav-item"><a class="nav-link" href="reservering.php">Nieuwe reservering</a></li> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="account-user-name"><?php echo $USERNAME?></span></a>
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
        <div class="container">
            <div class="card-body">
                <h4 class="card-title">Mijn reserveringen</h4>
                <table id="reserveringsoverzicht_klant" class="table">
                    <thead>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th>Aantal personen</th>
                        <th>Bewerken</th>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($query_klantreservering_run) > 0)
                            {
                            while ($row = mysqli_fetch_assoc($query_klantreservering_run)) 
                            {
                    ?>
                    <tr>
                        <td><?php echo $row['Datum'] ?></td>
                        <td><?php echo $row['Tijd']?></td>
                        <td><?php echo $row['Aantal']?></td>
                        <td>
                        <form action="OverzichtklantWijzigen.php" method="post">
                            <input type="hidden" name="edit_customer" value="<?php echo $row['ID'] ?>">
                            <button type="sumbit" name="UpdateResKlant" class="btn btn-primary"> Bewerken</button>
                        </form>
                        </td>
                    </tr>
                    <?php
                    }
                        }
                        else{
                            echo "Geen reserveringen gevonden";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

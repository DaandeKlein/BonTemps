<?php
    $PageName = "reservatie";
    include("./assets/config.php");
    session_start();

    $query_reserveringen = "
    Select *
    From
        reserveringen
    ";

    $table_reserveringen = "";

    $query_reserveringen_run = mysqli_query($con, $query_reserveringen);
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">    
                    <li class="nav-item"><a class="nav-link" href="reserveringmedewerker.php">reservering invoegen</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="card-body">
                <h4 class="card-title">Reserveringen Overzicht</h4>
                <table id="reserveringsoverzicht_klant" class="table">
                    <thead>
                        <th>KlantID</th>
                        <th>Naam</th>
                        <th>Datum</th>
                        <th>Tijd</th>
                        <th>AantalPersonen</th>
                        <th>Tafelnummer</th>
                        <th>Bewerken</th>
                    </thead>
                    <tbody>
                    <?php
                        if(mysqli_num_rows($query_reserveringen_run) > 0)
                            {
                            while ($row = mysqli_fetch_assoc($query_reserveringen_run)) 
                            {
                    ?>
                    <tr>
                        <td><?php echo $row['KlantID']?></td>
                        <td><?php echo $row['Naam']?></td>
                        <td><?php echo $row['Datum']?></td>
                        <td><?php echo $row['Tijd']?></td>
                        <td><?php echo $row['Aantal']?></td>
                        <td><?php echo $row['Tafelnummer']?></td>
                        <td>
                        <form action="overzichtwijzigen.php" method="post">
                            <input type="hidden" name="edit_medewerker" value="<?php echo $row['ReserveringID'] ?>">
                            <button type="sumbit" name="UpdateResmedewerker" class="btn btn-primary"> Bewerken</button>
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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>

        </form> 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>


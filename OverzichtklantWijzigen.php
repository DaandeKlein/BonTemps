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
        elseif(isset($_POST['updatebtn']))
        {

            $ID = $_POST['ID'];
            $KlantID = $_POST['KlantID'];
            $Datum = $_POST['Datum'];
            $Tijd = $_POST['Tijd'];
            $Aantal = $_POST['Aantal'];
        
            $query = " UPDATE `klantreservering` SET `KlantID`='$KlantID', `Datum`='$Datum', `Tijd`='$Tijd', `Aantal`='$Aantal' WHERE `ID`='$ID' ";
            $query_run = mysqli_query($con, $query);
        
            if($query_run)
            {
                $_SESSION['success'] = "Your Data is Updated";
                header('Location: Overzichtklant.php'); 
            }
            else
            {
                $_SESSION['status'] = "Your Data is NOT Updated";
                header('Location: Overzichtklant.php'); 
            }
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
                <h4 class="card-title">Reservering aanpassen</h4>
                <table id="reserveringwijzigen_klant" class="table">
                    <tbody>
                    <?php
                        if (isset($_POST['UpdateResKlant']))
                        {
                        $ID = $_POST['edit_customer'];
                    
                        $query = "SELECT * FROM klantreservering WHERE ID='$ID'";
                        $query_run = mysqli_query($con, $query);

                        foreach ($query_run as $row) 
                        {
                    ?>

                        <form action="OverzichtklantWijzigen.php" method="POST">

                        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                        <input type="hidden" name="KlantID" value="<?php echo $row['KlantID'] ?>">
                        <div class="mb-3">
                            <label> Datum </label>
                            <input type="date" name="Datum" value="<?php echo $row['Datum']?>" class="form-control" id="Datum" placeholder="Datum" required>
                        </div>
                        <div class="mb-3">
                            <label> Tijd </label>
                            <input type="time" name="Tijd" value="<?php echo $row['Tijd']?>" class="form-control" id="Tijd" placeholder="Tijd" required>
                        </div>
                        <div class="mb-3">
                            <label>Aantal personen</label>
                            <input type="tel" name="Aantal" value="<?php echo $row['Aantal']?>" class="form-control" id="Aantal" placeholder="Vul aantal personen" required minlength="1" maxlength="1">
                        </div>
                        <br>
                            <button type="Submit" name="updatebtn" class="btn btn-primary"> Bewerken </button>
                        </form>

                            <?php
                            }
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

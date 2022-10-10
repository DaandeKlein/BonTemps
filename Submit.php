<?php
// session wordt hier gestart en de database wordt geconnect
    session_start();
    include('connect.php');

// hier wordt gecheckt ofdat de inlog formulier is ingevuld   
    if(isset($_POST['inlog']))
    {

// de formulier data wordt in variabelen gestopt en die variabelen worden in query gezet. De query checkt ofdat de Tijd en wachtwoord kloppen        
        $Email = $_POST['Email'];
        $Wachtwoord = $_POST['Wachtwoord'];

        $sql = "SELECT KlantID, Naam FROM klanten where Email='$Email' AND Wachtwoord='$Wachtwoord'";
        
        $result = mysqli_query($conn, $sql);

        $row = $result->fetch_array();

// Als de query uitvoerd kan worden, dan wordt de gebruiker doorgestuurd naar de OverzichtKlant pagina. Ook wordt de Session 'ingelogd' mee gegeven. Die slaat de Tijd adres op.        
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['ingelogd'] = $row['KlantID'];
            $_SESSION['naam'] = $row['Naam'];
            header("Location: OverzichtKlant.php");
            exit();
        }

// Als de query niet uitgevoerd kan worden, dan wordt de gebruiker terug gestuurd naar de inlog pagina. ook wordt er een error session mee gestuurd.        
        else
        {
            $_SESSION['error'] = "error";
            header("Location: inlog.php");
            exit();
        }
    }

// Hier wordt gecheckt ofdat de registratie formulier is ingevuld.
    elseif(isset($_POST['registreren']))
    {

// de data van de formulier wordt in de variabelen gestopt
        $Naam = $_POST['Naam'];
        $Email = $_POST['Email'];
        $Adres = $_POST['Adres'];
        $Postcode = $_POST['Postcode'];
        $Telefoon = $_POST['Telefoon'];
        $Wachtwoord = $_POST['Wachtwoord'];

// hier wordt gecheckt ofdat alle variabelen wel ingevuld zijn        
        if(!empty($Naam && $Email && $Adres && $Postcode && $Telefoon && $Wachtwoord))
        {

// hier wordt gecheckt ofdat de telefoon nummer niet meer dan 9 nummer zijn ingevuld (exclusief de 0 aan het begin van een telefoon nummer)
            if($Telefoon >= 1000000000)
            {

// als de telefoon nummer te lang is, dan wordt de gebruiker terug naar de registratie pagina gestuurd. Ook komt er een error session mee.
                $_SESSION['error'] = "error";
                header("Location: registreren.php");
            }

// als de telefoon nummer wel geldig is. Dan worden de gegevens in de query gestopt en de query stopt de data in de database. Daarna wordt de gebruiker doorgestuurd naar de OverzichtKlant pagina gestuurd
            else
            {
            
            $_SESSION['ingelogd'] = $_POST['Email'];
            $_SESSION['naam'] = $Naam;
            $sql = "INSERT INTO klanten (Naam, Email, Adres, Postcode, Telefoon, Wachtwoord) 
            VALUES (?, ?, ?, ?, ?, ?);";
            $pdo->prepare($sql)->execute([$Naam, $Email, $Adres, $Postcode, $Telefoon, $Wachtwoord]);
            header("Location: OverzichtKlant.php"); /* Redirect browser */
            exit(); 
        
            }
        }
// Als niet alle variabelen ingevuld, Dan wordt de gebruiker terug gestuurd naar de registratie pagina
        else
        {
            $_SESSION['error'] = "error";
            header("Location: registreren.php");
        }        
    }

// als de gebruiker op deze pagina terecht komt zonder een post in te vullen dan krijgt de gebruiker automatisch een error melding
    elseif(isset($_POST['reservering']))
    {
        $KlantID = $_SESSION['ingelogd'];
        $Datum = $_POST['Datum'];
        $Tijd = $_POST['Tijd'];
        $Aantal = $_POST['Aantal'];
    
        $sql = "INSERT INTO `klantreservering` (`KlantID`, `Datum`, `Tijd`, `Aantal`) 
                VALUES ('$KlantID', '$Datum', '$Tijd', '$Aantal');";
            $qry = $conn -> query($sql);

            if($query_run)
            {
                $_SESSION['success'] = "Uw reservering is geplaatst";
                header('Location: overzichtklant.php'); 
            }
            else
            {
                $_SESSION['status'] = "Uw reservering is niet geplaatst";
                header('Location: overzichtklant.php'); 
            }
    }
   

    elseif(isset($_POST['reserveringmedewerker']))
    {
        $KlantID = $_POST['KlantID'];
        $Naam = $_POST['Naam'];
        $Datum = $_POST['Datum'];
        $Tijd = $_POST['Tijd'];
        $Aantal = $_POST['Aantal'];
        $Tafelnummer = $_POST['Tafelnummer'];
    
        $sql = "INSERT INTO `reserveringen` (`KlantID`, `Naam`, `Datum`, `Tijd`, `Aantal`, `Tafelnummer`) 
                VALUES ('$KlantID', '$Naam', '$Datum', '$Tijd', '$Aantal', '$Tafelnummer');";
            $qry = $conn -> query($sql);

            if($query_run)
            {
                $_SESSION['success'] = "Reservering toegevoegd";
                header('Location: overzicht.php'); 
            }
            else
            {
                $_SESSION['status'] = "Reservering niet toegevoegd";
                header('Location: overzicht.php'); 
            }
    }

    else
    {
        echo "error 404";
    }
    

?>
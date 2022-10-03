<?php
    session_start();
    include('connect.php');

    if(isset($_POST['inlog']))
    {
        $Email = $_POST['Email'];
        $Wachtwoord = $_POST['Wachtwoord'];

        $sql = "SELECT * FROM klanten where Email='$Email' AND Wachtwoord='$Wachtwoord'";
        
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1)
        {
            header("Location: http://localhost/project7/OverzichtKlant.php"); /* Redirect browser */
            exit();
        }

        else
        {
            $_SESSION['error'] = "error";
            header("Location: http://localhost/project7/inlog.php"); /* Redirect browser */
            exit();
        }
    }
    elseif(isset($_POST['registreren']))
    {
        echo "registratie";
        $Naam = $_POST['Naam'];
        $Email = $_POST['Email'];
        $Adres = $_POST['Adres'];
        $Postcode = $_POST['Postcode'];
        $Telefoon = $_POST['Telefoon'];
        $Wachtwoord = $_POST['Wachtwoord'];

        if(!empty($Naam && $Email && $Adres && $Postcode && $Telefoon && $Wachtwoord))
        {
            if($Telefoon >= 1000000000)
            {
                $_SESSION['error'] = "error";
                header("Location: http://localhost/project7/registreren.php");
            }
            else
            {
         
            $sql = "INSERT INTO klanten (Naam, Email, Adres, Postcode, Telefoon, Wachtwoord) 
            VALUES (?, ?, ?, ?, ?, ?);";
            $pdo->prepare($sql)->execute([$Naam, $Email, $Adres, $Postcode, $Telefoon, $Wachtwoord]);
            header("Location: http://localhost/project7/OverzichtKlant.php"); /* Redirect browser */
            exit(); 
        
            }
        }
        else
        {
            $_SESSION['error'] = "error";
            header("Location: http://localhost/project7/registreren.php");
        }        
    }
    
    else
    {
        echo "error 404";
    }

    
?>
<?php
    session_start();
    include('connect.php');

    if(isset($_SESSION['ingelogd']))
    {
        $ID = $_SESSION['ingelogd'];
        $sql = "SELECT * FROM klanten where KlantID='$ID'";
        
        $result = mysqli_query($conn, $sql);

        $row = $result->fetch_array();

        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['DataFieldNaam'] = $row['Naam'];
            $_SESSION['DataFieldEmail'] = $row['Email'];
            $_SESSION['DataFieldAdres'] = $row['Adres'];
            $_SESSION['DataFieldPostcode'] = $row['Postcode'];
            $_SESSION['DataFieldTelefoon'] = $row['Telefoon'];
            $_SESSION['DataFieldWachtwoord'] = $row['Wachtwoord'];
        }
        else
        {
            echo "unknown error";
        }

    }
    else
    {
        echo "unknown error";
    }

?>
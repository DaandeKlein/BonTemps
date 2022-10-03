<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container" style="border-radius: 10px;">
        <form action="Submit.php" method="post" class="align-content-center">
            <div class="mb-3">
                <label for="VoorbeeldNaamInput" class="form-label">Naam:</label>
                <input type="text" name="Naam" class="form-control" id="VoorbeeldNaamInput" placeholder="Voor- en Achternaam" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldEmailInput" class="form-label">E-mailadres:</label>
                <input type="email" name="Email" class="form-control" id="VoorbeeldEmailInput" aria-describedby="emailHelp" placeholder="E-mailadres" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldAdresInput" class="form-label">Adres:</label>
                <input type="text" name="Adres" class="form-control" id="VoorbeeldAdresInput" placeholder="Adres" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldPostcodeInput" class="form-label">Postcode:</label>
                <input type="text" name="Postcode" class="form-control" id="VoorbeeldPostcodeInput" placeholder="0000AA" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldTelefoonInput" class="form-label">Telefoonnummer:</label>
                <input type="text" name="Telefoon" class="form-control" id="VoorbeeldTelefoonInput" placeholder="00-00000000" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldWachtwoordInput" class="form-label">Wachtwoord</label>
                <input type="text" name="Wachtwoord" class="form-control" id="VoorbeeldWachtwoordInput" required>
            </div>
            <button type="submit" name="registreren" class="btn btn-primary">Registreren</button>
            <?php 
        
                if(isset($_SESSION['error']))
                {
                    ?>
                    
                    <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p>Niet alle velden zijn geldig ingevuld</p>
                    <p class="mb-0"></p>
                    </div>
                <?php
                unset($_SESSION['error']);
                }
            ?>
        </form>
    </div>
</body>
</html>    
    
<?php
?>
<?php
    session_start();
?>

<!-- hier wordt bootstrap gelinkt -->
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
<!-- hier staat de registratie formulier -->
<body>
    <div class="container" style="border-radius: 10px;">
        <form action="Submit.php" method="post" class="align-content-center">
            <div class="mb-3">
                <label for="VoorbeeldNaamInput" class="form-label">Name:</label>
                <input type="text" name="Naam" class="form-control" id="VoorbeeldNaamInput" placeholder="Voor- en Achternaam" maxlength="255" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldEmailInput" class="form-label">E-mailaddress:</label>
                <input type="email" name="Email" class="form-control" id="VoorbeeldEmailInput" aria-describedby="emailHelp" placeholder="E-mailadres" maxlength="255" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldAdresInput" class="form-label">Address:</label>
                <input type="text" name="Adres" class="form-control" id="VoorbeeldAdresInput" placeholder="Adres" maxlength="255" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldPostcodeInput" class="form-label">Postal code:</label>
                <input type="text" name="Postcode" class="form-control" id="VoorbeeldPostcodeInput" placeholder="0000AA" maxlength="6" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldTelefoonInput" class="form-label">Phone number:</label>
                <input type="tel" name="Telefoon" class="form-control" id="VoorbeeldTelefoonInput" placeholder="0000000000" maxlength="10" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldWachtwoordInput" class="form-label">Password:</label>
                <input type="password" name="Wachtwoord" class="form-control" id="VoorbeeldWachtwoordInput" maxlength="255" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldLanguageInput" class="form-label">Language:</label>
                <select class="form-control form-select" name="talen">
                    <option value="nl">Nederlands</option>
                    <option value="en">English</option>
                    <option value="de">Deutsch</option>
                </select>
            </div>
            <button type="submit" name="registreren" class="btn btn-primary">Register</button>
            <?php 

// als de session 'error' is gezet dan komt er een pop-up melding waarop staat dat niet alle velden ingevult zijn. Daarna wordt de session leeg gehaald zodat je niet opnieuw dezelfde melding krijgt
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
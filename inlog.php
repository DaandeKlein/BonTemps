<?php
session_start();
?>

<!-- hier wordt bootstrap gelinkt -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<!-- hier wordt de inlog formulier gemaakt -->
<body>
    <div class="container" id="formulier">
        <div class="row justify-content-center">
        <form action="Submit.php" method="post">
            <div class="mb-3 border border-primary">
                <label for="VoorbeeldEmailInput" class="form-label">E-mailadres:</label>
                <input type="email" name="Email" class="form-control" id="VoorbeeldEmailInput" aria-describedby="emailHelp" placeholder="E-mailadres" required>
            </div>
            <div class="mb-3">
                <label for="VoorbeeldWachtwoordInput" class="form-label">Wachtwoord:</label>
                <input type="password" name="Wachtwoord" class="form-control" id="VoorbeeldWachtwoordInput" placeholder="Wachtwoord" required>
            </div>
            <button type="submit" name="inlog" class="btn btn-primary">inloggen</button>
        </form>
        <p>Geen account? <a href="registreren.php"> Meld aan</a></p>
        <?php 

// als de session 'error' is gezet dan komt er een pop-up melding waarop staat dat de email of wachtwoord verkeerd is ingevuld. Daarna wordt de session leeg gehaald zodat je niet opnieuw dezelfde melding krijgt
            if(isset($_SESSION['error']))
            {
                ?>
                
                <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading"></h4>
                <p>Email of wachtwoord is verkeerd ingevuld</p>
                <p class="mb-0"></p>
                </div>
            <?php
            unset($_SESSION['error']);
            }

// als de session 'ingelogd' is gezet dan komt er een pop-up melding waarop staat dat je uitgelogt bent. Daarna wordt de session leeg gehaald zodat je niet opnieuw dezelfde melding krijgt            
            elseif(isset($_SESSION['ingelogd']))
            {
                ?>
                
                <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading"></h4>
                <p>Je bent uitgelogt</p>
                <p class="mb-0"></p>
                </div>
            <?php
            unset($_SESSION['ingelogd']);
            }

// dit is een extra else statement zodat als je geen error hebt dat er geen aparte error komt te staan zoals "deze if statement is undefined"
            else {
                
            }
        ?>
        </div>
    </div>
</body>
</html>    
    
<?php
?>
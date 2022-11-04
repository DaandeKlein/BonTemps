<?php 

    function Accountbeheren_Name($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Naam:';
                break;
            case 'en':
                return 'Name:';
                break;
            case 'de':
                return 'Name:';
                break;    
            default:
                return 'Name:';    
                break;   
        }    
    }
    function Accountbeheren_Email($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Email:';
                break;
            case 'en':
                return 'Email:';
                break;
            case 'de':
                return 'Email:';
                break;  
            default:
                return 'Email:';    
                break;   
        }    
    }
    function Accountbeheren_Adres($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Adres:';
                break;
            case 'en':
                return 'Address:';
                break;
            case 'de':
                return 'Anschrift:';
                break;
            default:
                return 'Address:';    
                break;   
        }    
    }
    function Accountbeheren_Postcode($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Postcode:';
                break;
            case 'en':
                return 'Postal Code:';
                break;
            case 'de':
                return 'Postleitzahl:';
                break;
            default:
                return 'Postal Code:';    
                break;   
        }    
    }
    function Accountbeheren_Telefoonnummer($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Telefoon nummer:';
                break;
            case 'en':
                return 'Phone number:';
                break; 
            case 'de':
                return 'Telefonnummer:';
                break; 
            default:
                return 'Phone number:';    
                break;   
        }    
    }
    function Accountbeheren_Wachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Wachtwoord:';
                break;
            case 'en':
                return 'Password:';
                break;
            case 'de':
                return 'Passwort:';
                break;  
            default:
                return 'Password:';    
                break;   
        }    
    }
    function Accountbeheren_btnWachtwoordWijzigen($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Wachtwoord wijzigen';
                break;
            case 'en':
                return 'Change Password';
                break;
            case 'de':
                return 'Passwort ändern';
                break;
            default:
                return 'Change Password';    
                break;   
        }    
    }
    function Accountbeheren_btnAccountWijzigen($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Accountgegevens wijzigen';
                break;
            case 'en':
                return 'Change Account Data';
                break;
            case 'de':
                return 'Kontodaten ändern';
                break;
            default:
                return 'Change Account Data';    
                break;   
        }    
    }
    function Accountbeheren_btnAccountVerwijderen($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Account verwijderen';
                break;
            case 'en':
                return 'Delete account';
                break;
            case 'de':
                return 'Kontodaten löschen';
                break;  
            default:
                return 'Delete account';    
                break;   
        }    
    }
    function Accountbeheren_accountVerwijderenMelding($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'wilt u definitief uw account verwijderen';
                break;
            case 'en':
                return 'Are you sure you want to delete your account';
                break;
            case 'de':
                return 'möchten Sie Ihr Konto endgültig löschen';
                break;   
            default:
                return 'Are you sure you want to delete your account';    
                break;   
        }    
    }

    function Navbar_Account($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Account';
                break;
            case 'en':
                return 'Account';
                break;
            case 'de':
                return 'Konto';
                break;  
            default:
                return 'Account';    
                break;   
        }  
    }

    function Navbar_AccountBeheren($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Mijn account';
                break;
            case 'en':
                return 'My account';
                break; 
            case 'de':
                return 'mein Konto';
                break; 
            default:
                return 'My account';    
                break;   
        }  
    }
    
    function Navbar_Accountuitloggen($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Uitloggen';
                break;
            case 'en':
                return 'Log out';
                break; 
            case 'de':
                return 'Ausloggen';
                break;
            default:
                return 'Log out';    
                break;   
        }  
    }
    function BtnAnnuleren($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Annuleren';
                break;
            case 'en':
                return 'Cancel';
                break; 
            case 'de':
                return 'Absagen';
                break;
            default:
                return 'Cancel';    
                break;   
        }  
    }
    function wachtwoordwijzigen_Oudwachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Oud Wachtwoord:';
                break;
            case 'en':
                return 'Old Password:';
                break;  
            case 'de':
                return 'Altes Passwort';
                break;
            default:
                return 'Old Password:';    
                break;   
        }  
    }
    function wachtwoordwijzigen_Nieuwwachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Nieuw Wachtwoord:';
                break;
            case 'en':
                return 'New Password:';
                break; 
            case 'de':
                return 'Neues Passwort';
                break;
            default:
                return 'New Password:';    
                break;   
        }  
    }
    function wachtwoordwijzigen_MeldingOudWachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Oud wachtwoord is verkeerd ingevuld';
                break;
            case 'en':
                return 'Old password entered incorrectly';
                break; 
            case 'de':
                return 'Altes Passwort wurde falsch eingegeben';
                break;
            default:
                return 'Old password entered incorrectly';    
                break;   
        }  
    }
    function wachtwoordwijzigen_MeldingOudNieuwWachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Oud wachtwoord of nieuw wachtwoord is verkeerd ingevuld';
                break;
            case 'en':
                return 'Old password or new password entered incorrectly';
                break;
            case 'de':
                return 'Altes oder neues Passwort falsch eingegeben';
                break;
            default:
                return 'Old password or new password entered incorrectly';    
                break;   
        }  
    }
    function Accountbeheren_meldingGegevens($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Accountgegevens zijn succesvol gewijzigd';
                break;
            case 'en':
                return 'Account details have been changed successfully';
                break; 
            case 'de':
                return 'Kontodaten wurden erfolgreich geändert';
                break; 
            default:
                return 'Account details have been changed successfully';    
                break;   
        }  
    }
    function Accountbeheren_meldingWachtwoord($language)
    {
        switch ($language) 
        {
            case 'nl':
                return 'Wachtwoord is succesvol gewijzigd';
                break;
            case 'en':
                return 'Password has been changed successfully';
                break; 
            case 'de':
                return 'Passwort wurde erfolgreich geändert';
                break; 
            default:
                return 'Password has been changed successfully';    
                break;   
        }  
    }


?>
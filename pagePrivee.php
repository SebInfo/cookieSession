<?php
// On démarre la session
session_start();
date_default_timezone_set('EUROPE/Paris');
// Pour avoir les dates en français
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

// On stocke la date de la dernière connexion si il y a eu connexion sinon 0
$connexion = isset($_COOKIE['date']) ? $_COOKIE['date'] : 0;

//On teste l'existence de la variable de session "Accès_Autorisé". 
//Si elle existe, on affecte sa valeur à la variable $Accès_Autorisé 
if($_SESSION['acces_autorise']!='Ok')
{
	header("Location:login.php");
}

// On fixe la nouvelle connexion 
setcookie('date', strftime("%A %d %B %Y Heure : %H h %M"), time()+24*3600, null, null, false, true);
?> 
<html> 
    <head> 
        <title>Mot de passe et cookie</title>
    </head> 
<body> 
<?php
    if ($_SESSION['acces_autorise']=='Ok') 
    { 
        echo "accès autorisé";
        if (isset( $_COOKIE['date'])) 
        {
            echo "<br/>Dernière connexion : ". $_COOKIE['date'];
        }
        else
        {
            echo "<br/>C'est la première fois sur ce site ;-)";
        }
    } 
    else 
    { 
        echo "accès interdit";
        session_destroy(); 
    } 
?> 
</body> 
</html> 
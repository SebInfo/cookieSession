<?php
date_default_timezone_set('EUROPE/Paris');
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
// On stocke la date de la dernière connexion si il y a eu connexion sinon 0
$connexion = isset($_COOKIE['date']) ? $_COOKIE['date'] : 0;

// On fixe la nouvelle connexion 
setcookie('date', strftime("%A %d %B %Y Heure : %H h %M"), time()+24*3600);
?> 
<html> 
    <head> 
        <title>Date de dernière connexion</title>
    </head> 
<body> 
<?php
    if (isset( $_COOKIE['date'])) 
    {
        echo "<br/>Dernière connexion : ". $_COOKIE['date'];
    }
    else
    {
        echo "<br/>C'est la première fois sur ce site ;-)";
    }
?> 
</body> 
</html> 
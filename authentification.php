<?php
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    echo "Bienvenue, <br>Utilisateur : " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
    "<br>Mot de passe : " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);

}
else
{
    header('WWW-Authenticate: Basic realm="Zone restreinte"');
    header('HTTP/1.0 401 Unauthorized');
    die("Entrez votre nom d'utlisateur et votre mot de passe.");
}
?>
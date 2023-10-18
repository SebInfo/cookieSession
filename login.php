<?php
// On démarre la session
session_start();

if(isset($_POST['deconnexion']))
{
  session_destroy();
}
// Test si on a validé le formulaire
if(isset($_POST['bouton']))
{
	if($_POST['code']=='0000')
	{
		$_SESSION['acces_autorise']='Ok';
		header("Location:pagePrivee.php");
	}
	else
	{
    $_SESSION['acces_autorise']='PasOk';
		$erreur="Votre code est incorrect";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Test de session</title>
</head>
<body>
<?php  if(isset($erreur))  echo "<h2>".$erreur."</h2>";  ?>

<form id="monform" name="form1" method="post" action="login.php">
  <label>Code :
    <input type="text" name="code"  />
  </label>
  <input type="submit" name="bouton"  value="Valider" />
  <input type="submit" name="deconnexion"  value="Deconnexion" />
</form>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>  
</body>
</html>

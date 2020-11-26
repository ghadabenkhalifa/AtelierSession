<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: connexion.php');}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Administration</title>
</head>
<body>
<button><a href="deconnexion.php">Déconnecter</a></button>
<hr>
<?php
// Ici on est bien loggué, on affiche un message
echo 'Bienvenue Admin ', $_SESSION['e'];
?>
</body>
</html>
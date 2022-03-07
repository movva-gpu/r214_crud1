<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="index.php">Accueil</a> | <a href="catalogue.php"> catalogue </a> | <a href="admin/gestion.php">admin</a>	
	<hr>
<h1>nos albums</h1>
<hr>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=.....;charset=UTF8;', '....', '.....');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM bandes_dessinees INNER JOIN auteurs ON bandes_dessinees......... = auteurs..........";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div>' ;
    echo '<h3>'.$value['bd_titre'] . '</h3>';
    echo '<p>tarif: ' . .......... . ' euro </p>';
    echo '<p>' . $value['bd_nb_pages'] . ' pages </p>';
    echo '<p> auteur: ' . $value['......_nom'] . '</p>';
    echo '</div><hr>';
}
?>

</body>
</html>
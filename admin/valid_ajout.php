<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php
$titre=$_GET['titre'];
$prix=$_GET['prix'];
$nbpages=$_GET['nbpages'];
$numauteur=$_GET['numauteur'];

$mabd = new PDO('mysql:host=localhost;dbname=r214base;charset=UTF8;', 'r214user', 'tutu');
$mabd->query('SET NAMES utf8;');
$req = 'INSERT INTO bandes_dessinees(bd_titre,bd_prix,bd_nb_pages,_auteur_id) VALUES(\''. addcslashes($titre, '\'') .'\','.$prix.','.$nbpages.','.$numauteur.')';
echo $req;
$resultat = $mabd->query($req);

?>
</tbody>
</table>
</body>
</html>
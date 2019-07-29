<?php
	session_start();

//===============================================================================
// Connexion à la base de données
	$servername = "localhost";
  $username = "holie";
  $password = "holie";
  $dbname = "crud_exemple";

	$db = mysqli_connect($servername, $username, $password, $dbname);

	if (!$db) {
	  die('Connexion impossible : ' . mysql_error());
	}
	// echo "connexion ok";
//==============================================================================
/*
  ___  ____  ____   __  ____  ____
 / __)(  _ \(  __) / _\(_  _)(  __)
( (__  )   / ) _) /    \ )(   ) _)
 \___)(__\_)(____)\_/\_/(__) (____)

*/

// Initialisation Variables
$first_name = "";
$last_name = "";
$id = 0;

// Si j'envoie un post via le bouton CREATE
if (isset($_POST['create'])) {
	//Je récupère les valeurs des inputs du formulaire
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

// J'envoie une requête au serveur qui permet d'insérer une nouvelle ligne à la table
// INSERT INTO maTable (je précise ici les colonnes) VALUES (j'indique mes variables pour lui passer les données)
	mysqli_query($db, "INSERT INTO infos (first_name, last_name) VALUES ('$first_name', '$last_name')");

//Ensuite, une fois que la requête est faite, j'enregistre un message dans une sessions et je l'envoie a la
// page d'accueil. Le header permet de rediriger l'utilisateur.
	$_SESSION['message'] = "Infos saved";
	header('location: ../index.php');
}



?>

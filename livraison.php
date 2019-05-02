<?php 


define('DB_SERVER', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', 'root');

$nom = $_POST["Nom"];
$prenom = $_POST["Prenom"];

$pseudo = $_POST["Pseudo"];

$email = $_POST["Email"];

$password = $_POST["Password"];

$adresse = $_POST["Adresse"];



// identifier le nom de la base de données 

$database = "projetweb";
//connecter l'utilsateur dans la BDD
$db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db ($db_handle, $database);

// si la BDD existe, faire le traitement
// ON VEUT AJOUTER LADRESSE DE LIVRAISON A LA BASE DE DONNEE DE LACHETEUR

    if ($db_found) {
        $sql = "INSERT INTO `Acheteur` (`Pseudo`, `Email`, `Password`, `Nom`, `Prenom`) VALUES ('". $pseudo. "', '" .$email. "','".$passeword."', '" .$nom. "','".$prenom."')";


 			session_start();

                // On s'amuse à créer quelques variables de session dans $_SESSION
                $_SESSION['Email'] = $email;
                $_SESSION['Nom'] = $nom;
                $_SESSION['Pseudo'] = $pseudo;
                $_SESSION['Prenom'] = $prenom;

		$result = mysqli_query($db_handle, $sql);
		header('Location: categories.html');
    }//end if

// si la BDD n'existe pas 
    else {
        echo 'Database not found';
    }

// Fermer la connection 
mysqli_close($db_handle);
?>









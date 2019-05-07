<?php

session_start();

?>

<!-- gestion du profil administrateur avec la base de données -->
<?php 
session_start();


if($_SESSION['Email'] == NULL || $_SESSION['Email'] == ""){
  header('Location: index.html');

}


?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title> Stats </title><!-- titre de la barre de navigation internet -->

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Style de la page internet -->
  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  
  #menu-deroulant, #menu-deroulant ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }
  #menu-deroulant {
    /* on centre le menu dans la page */
    text-align: center;
  }
  #menu-deroulant li {
    /* on place les liens du menu horizontalement */
    display: inline-block;
  }
  #menu-deroulant ul li {
    /* on enlève ce comportement pour les liens du sous menu */
    display: inherit;
  }
  #menu-deroulant a {
    text-decoration: none;
    display: block;
    /**color: #FFFFFF;*/
  }
  #menu-deroulant ul {
    position: absolute;
    /* on cache les sous menus complètement sur la gauche */
    left: -999em;
    text-align: left;
    z-index: 1000;
  }
  #menu-deroulant li:hover ul {
    /* Au survol des li du menu on replace les sous menus */
    left: auto;
  }
</style>
<!-- Custom styles for this template -->
<link href="album.css" rel="stylesheet">
</head>


<body>
  <!-- tete de notre site -->
  <header>
    <!-- Barre de navigation de notre site -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
      <!-- bouton qui revient a notre page d'accueil -->
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img src="img/pierre.png"></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <!-- menu deroulant qui affiche les differentes categories -->
            <ul id="menu-deroulant">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="categories.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                <ul>
                  <li><a class="text-dark" href="livres.php">Livres</a></li>
                  <li><a class="text-dark" href="musique.php">Musique</a></li>
                  <li><a class="text-dark"href="vetements.php">Vêtements</a></li>
                  <li><a class="text-dark" href="sport.php">Sport et Loisirs</a></li>
                </ul>

              </li>
            </ul>
            <!-- bouton des ventesflash -->
            <a class="nav-link text-white" href="ventesflash.php">Ventes Flash</a>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <!-- bouton du panier -->
            <a href="panier.php" class="btn btn-lg btn-info"><img src=img/panier.png></a> 
            <!-- bouton deconnexion -->
            <a class="nav-link text-white" href="deco.php">Se déconnecter</a>
          </form>
        </div>
      </nav>
      
    </header>

    <br/> <br/>




    <section class="jumbotron text-center">
      <!-- Milieu de page de notre site -->
      
      <div class="py-5 text-center text-info">
        <p class="lead">Vous êtes administrateur et vendeur sur A MA ZONE ? Vous avez acces a des statistiques sur les differents Items et Vendeur</p>
      </div>
    </section>
    <div class="container">


		<?php
		 


		session_start(); // session ouverte

      define('DB_SERVER', 'localhost');
      define ('DB_USER', 'root');
      define ('DB_PASS', 'root');

// identifier le nom de la base de données 
      $database = "Projetweb";
//connecter l'utilsateur dans la BDD
      $db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
      $db_found = mysqli_select_db ($db_handle, $database);

// si la BDD existe, faire le traitement
$stock=0;
      $dataPoints = array();
      $dataPoints2 = array();
      $dataPoints3 = array();

      if ($db_found) {
        $sql = "SELECT* FROM Items";
        $result = mysqli_query ($db_handle, $sql);
        while ($data = mysqli_fetch_assoc($result)){
			  $un = array('y' => $data["StockVendu"], "label" => $data["Nom"] );
			  array_push($dataPoints, $un);


			  $deux= array('y' => $data["StockVendu"]*$data["Prix"], "label" => $data["Nom"]);
			  array_push($dataPoints2, $deux);

 			  $trois= array('y' => $data["Click"], "label" => $data["Nom"]);
			  array_push($dataPoints3, $trois);

        }// end while
    }//end if

// si la BDD n'existe pas 
    else {
      echo 'Database not found';
    }
		 
		?>



<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Stock vendu par produit"
	},
	axisY: {
		title: "Nombre de produit vendu",
		prefix: "",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Chiffre d'affaire par produit"
	},
	axisY: {
		title: "Chiffre d'affaire en €",
		prefix: "",
		suffix:  "€"
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0€",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Combien d'utilisateur on regarder les details d'un produit ?"
	},
	axisY: {
		title: "Nombre d'utilisateur"
	},
	data: [{
		type: "column",
		yValueFormatString: "#",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();
chart2.render();
chart.render();
 
}
</script>
<div class="row">
	<div id="chartContainer" style="height: 370px; width: 90%;"></div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="row">

	<div id="chartContainer2" style="height: 370px; width: 90%;"></div>
</div>
<div class="row">

	<div id="chartContainer3" style="height: 370px; width: 90%;"></div>
</div>


	</div>




    <!-- pied de page de notre site --> 
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Site A MA ZONE &copy; ECE A MA ZONE_2019</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
        <!-- liens de nos reseaux sociaux-->
        <p>Ou nous retrouver? Visiter notre<a href="https://www.facebook.com/A-MA-ZONE-2302826419965406/"> Facebook</a> ou notre page <a href="https://www.instagram.com/amazoneece/?hl=fr">Instagram</a>.</p>
        <p class="float-right">
          <a href="#">Haut de page</a><!-- bouton qui ramene en haut de la page -->
        </p>
      </footer>

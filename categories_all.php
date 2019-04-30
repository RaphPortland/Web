<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Album example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>



  <body>
    <header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <strong>AMA ZONE</strong>
      </a>

        <button type="button" class="btn btn-dark btn-lg">Panier</button>



    </div>
  </div>

</header>

<!-- 
  <section class="jumbotron text-center">
    <div class="container">
      <div class="text"> <h4> Voici la liste des articles toute categorie confondu : </h4></div>
    </div>
  </section>			-->

  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4"> </h1>
        <div class="list-group">
       		 <a href="categories_all.php" class="btn btn-dark btn-sm ">Tout</a> 
			<a href="#" class="btn btn-outline-dark btn-sm ">Vetements</a> 
			<a href="#" class="btn btn-outline-dark btn-sm ">Musique</a> 
			<a href="#" class="btn btn-outline-dark btn-sm ">Sport et loisirs</a> 
			<a href="#" class="btn btn-outline-dark btn-sm ">Livres</a> 
        </div>
      </div>



<?php 

define('DB_SERVER', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', 'root');

// identifier le nom de la base de données 

$database = "Projetweb";
//connecter l'utilsateur dans la BDD
$db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db ($db_handle, $database);

// si la BDD existe, faire le traitement

$i = 0;



    if ($db_found) {
        $sql = "SELECT* FROM Items";
        $result = mysqli_query ($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result)){

            	if($i%4 == 3){

            		echo " </div> <div class='row'> <div class='col-lg-3 col-md-6 mb-3'>
            	        <h1 class='my-4'> </h1> </div>";
            		//echo "on print : ". $i;
            	}
            	echo " <div class='col-lg-3 col-md-6 mb-3'>
            	        <h1 class='my-4'> </h1>
              <a href='article.php?param=".$data["Id"]."'><img class='card-img-top' src='http://placehold.it/700x400' alt=''></a>
              <div class='card-body'>
                <h5 class='card-title'>
                  <a href='#'>". $data['Nom'] ."</a>
                </h5>
            
                <h6>".$data['Prix']."€</h6>
                <p class='card-text'>".$data['Description']." </p>
              </div>
              <div class='card-footer'>
                <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>";

            	$i = $i +1;

               // echo 'ID : '.$data['Id'].'<br>';
                //echo 'Nom : '.$data['Nom'].'<br>';
                //echo 'Description : '.$data['Description'].'<br>';
                //echo 'Prix : '.$data['Prix'].'<br>';
                //echo 'Categorie : '.$data['Categorie'].'<br>';
            }// end while
    }//end if

// si la BDD n'existe pas 
    else {
        echo 'Database not found';
    }

// Fermer la connection 
mysqli_close($db_handle);
?>
		
</div>


<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Site AMA'ZONE &copy; ECE AMA'ZONE_2019</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
    <p>Ou nous retrouver? Visiter notre<a href="https://getbootstrap.com/"> Facebook</a> ou notre page <a href="/docs/4.3/getting-started/introduction/">Instagram</a>.</p>
 </footer>

</body>


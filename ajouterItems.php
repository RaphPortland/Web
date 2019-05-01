<?php

session_start();

    if($_SESSION['Email'] == NULL || $_SESSION['Email'] == ""){
      header('Location: index.html');

    }
    if($_GET["action"] =="ajout"){


            define('DB_SERVER', 'localhost');
            define ('DB_USER', 'root');
            define ('DB_PASS', 'root');

            $Id = $_POST["Id"];     
            $Nom = $_POST["Nom"];
            $Descri = $_POST["Descri"];
            $Prix = $_POST["Prix"];
            $Qtt = $_POST["Qtt"];
            $Categorie = $_POST["Categorie"];
            $note = 4;
            $email = "COUCOU";


            echo "Id :". $Id;
            echo "Nom :". $Nom;
            echo "Descri :". $Descri;
            echo "Prix :". $Prix;
            echo "Categorie :". $Categorie;
            echo "Qtt :". $Qtt;


            // identifier le nom de la base de données 

            $database = "Projetweb";
            //connecter l'utilsateur dans la BDD
            $db_handle = mysqli_connect (DB_SERVER, DB_USER, DB_PASS);
            $db_found = mysqli_select_db ($db_handle, $database);

            // si la BDD existe, faire le traitement

            if ($db_found) {
                $sql = "INSERT INTO Items (`Id`, `Nom`, `Description`, `Prix`, `Categorie`, `Note`, `Stock`, `Vendeur`) VALUES ('".$Id."', '".$Nom."','".$Descri."', '".$Prix."','".$Categorie."', '".$note."','".$Qtt."' ,'".$email."')";


            $result = mysqli_query($db_handle, $sql);
            #header('Location: profilvendeur.php');

            if($result) {
                  echo("<br>Data Input OK");
              } else {
                  echo("<br>Data Input Failed");
              }

            }//end if

        // si la BDD n'existe pas 
            else {
                echo 'Database not found';
            //header('Location: index.html');

            }

            // Fermer la connection 
            mysqli_close($db_handle);


    }
?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Ajouter un article</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

      
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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-white">
<header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <strong>AMA'ZONE ECE</strong>
      </a>

        <button type="button" class="btn btn-dark btn-lg"><img src="panier.jpg"></button>

    </div>
  </div>
</header>
      
<section class="jumbotron text-center">
    
  <div class="py-5 text-center">
    <h2>Ajouter un produit</h2>
    <p class="lead">Vous êtes vendeur ? Ajouter un ou plusieurs produits en complétant les informations suivantes.</p>
  </div>
</section>
    <div class="container">      
    <div class="row">
    <div class="col-md-12 order-md-1">
      <form class="needs-validation" method="POST" action="ajouterItems.php?action=ajout" novalidate >
          
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="Identifiant">Identifiant</label>
            <input type="text" class="form-control border border-dark" id="Identifiant" name = "Id" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control border border-dark" id="Nom" name = "Nom"  placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
              
          <div class="mb-3">
            <label for="Description">Description</label>
              <TEXTAREA type="text" class="form-control border border-dark" id="Description" name = "Descri" placeholder="" value="" required></TEXTAREA>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
       
          
          <div class="row">
          <div class="col-md-3 mb-2">
            <label for="Prix">Prix</label>
            <input type="number" class="form-control border border-dark" id="Prix" placeholder="" name = "Prix"  value="" required>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
            </div>

            <div class="col-md-3 mb-2">
              <label for="Quantité">Quantité</label>
            <input type="number" class="form-control border border-dark" id="Qtt" placeholder="" name = "Qtt"  value="" required>
              <div class="invalid-feedback">
              </div>
            </div>
              
            <div class="col-md-3 mb-2">
            <label for="Categorie">Catégorie</label>
            <select type="text" class="form-control border border-dark" id="Categorie" placeholder="" name = "Categorie" value="" required>
                <option value="Livre">Livre</option>
                <option value="Musique">Musique</option>
                <option value="Vetement">Vêtement</option>
                <option value="SportsEtLoisirs">Sports et loisirs</option>
          </select>
            </div> 
            
          <div class="col-md-3 mb-2">
            <label for="Vendeur">Vendeur</label>
            <p class="form-control border border-dark" id="Vendeur" ><?php echo $_SESSION["Email"];  ?></p>
            <div class="invalid-feedback">
            </div>
            </div>
        </div>
          
        
        <div class="mb-3">
          <label for="Video">Video</label>
          <input type="file" class="form-control border border-dark" id="Video" placeholder="">
          <div class="invalid-feedback">
          </div>
            </div>
            
          <div class="row">
          <div class="col-md-6 mb-3">
            <label for="Photos">Photos</label>
            <input type="hidden" class="form-control border border-dark" id="Photos" placeholder="" value="" ><br/>
              <input type="file" name="Photo1"/><br/>
              <input type="file" name="Photo2"/><br/>
              <input type="file" name="Photo3"/><br/>
              <input type="file" name="Photo4"/><br/>
            </div>
            <div class="col-md-6 mb-3">
                <br/>
                <input type="file" name="Photo5"/><br/>
              <input type="file" name="Photo6"/><br/>
              <input type="file" name="Photo7"/><br/>
              <input type="file" name="Photo8"/><br/>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div> 
        </div>

        
          
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter votre article</button>
      </form>
    </div>
  </div>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Site AMA'ZONE &copy; ECE AMA'ZONE_2019</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
    <p>Ou nous retrouver? Visiter notre<a href="https://getbootstrap.com/"> Facebook</a> ou notre page <a href="/docs/4.3/getting-started/introduction/">Instagram</a>.</p>
    <p class="float-right">
      <a href="#">Haut de page</a>
    </p>
   </footer>
</div>



</body>
</html>

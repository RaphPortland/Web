<?php
session_start();



?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Livraison</title>

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

    <header>

  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
  <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img src="img/pierre.png"></a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <ul id="menu-deroulant">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="categories.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
            <ul>
              <li><a class="text-dark" href="categories.html">Livres</a></li>
              <li><a class="text-dark" href="categories.html">Musique</a></li>
              <li><a class="text-dark"href="categories.html">Vêtements</a></li>
              <li><a class="text-dark" href="categories.html">Sport et Loisirs</a></li>
            </ul>

        </li>
      </ul>
      <a class="nav-link text-white" href="ventesflash.html">Ventes Flash</a>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <a href="panier.php" class="btn btn-lg btn-info"><img src=img/panier.png></a> 
      <a class="nav-link text-white" href="deco.php">Se déconnecter</a>
    </form>
  </div>
</nav>
      
</header>
      
<section class="jumbotron text-center">
    <br/> <br/>
  <div class="py-5 text-center text-info">
    <h2>Informations de livraison</h2>
    <p class="lead">Veuillez compléter les informations suivantes.</p>
  </div>
</section>
      
    <div class="container">      
    <div class="row">
    <div class="col-md-12 order-md-1">
      <form class="needs-validation" action="livraison_apres_panier.php" method="POST" >
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" name = "Nom" id="Nom" placeholder="Nom" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="Prenom">Prénom</label>
            <input type="text" class="form-control" name = "Prenom" id="Prenom" placeholder="Prénom" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
              <label for="Tel">Numéro de téléphone</label>
          <input type="tel" class="form-control" name = "Tel" id="Tel" placeholder="Numéro de téléphone" required>
          <div class="invalid-feedback">
            Please enter your number phone.
          </div>
            </div>
        </div>

        <div class="mb-3">
          <label for="Adresse1">Adresse 1</label>
          <input type="text" class="form-control" name = "Adresse1" id="Adresse1" placeholder="Adresse 1" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="Adresse2">Adresse 2 </label>
          <input type="text" class="form-control" name ="Adresse2" id="Adresse2" placeholder="Adresse 2">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="Ville">Ville</label>
            <input type="text" class="form-control" name = "Ville" id="Ville" placeholder="Ville" value="" required>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="CodePostal">Code postal</label>
            <input type="text" class="form-control" name = "CodePostal" id="CodePostal" placeholder="Code postal" value="" required>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="Pays">Pays</label>
            <input type="text" class="form-control" name = "Pays" id="Pays" placeholder="Pays" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
            </div>
        </div>
          
        <hr class="mb-4">
        <input class="btn btn-light btn-outline-info btn-lg btn-block" type="submit" value="Valider">
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
    <p>Ou nous retrouver? Visiter notre<a href="https://www.facebook.com/A-MA-ZONE-2302826419965406/"> Facebook</a> ou notre page <a href="https://www.instagram.com/amazoneece/?hl=fr">Instagram</a>.</p>
    <p class="float-right">
      <a href="#">Haut de page</a>
    </p>
</footer>
      
</div>
</body>
</html>



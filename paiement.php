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
    <title>Paiement</title>

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
    <h2>Informations de paiement</h2>
    <p class="lead">Veuillez compléter les informations suivantes.</p>
  </div>
</section>
      
    <div class="container">
    <div class="row">
        
    <div class="col-md-12 order-md-1">
        <div class="row">
        <div class="col-md-2">
          <label for="TypeCB">Type de la carte : </label>  
        </div>
            <div class="col-md-10">
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="master" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="master">MasterCard</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="visa" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="visa">Visa</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="american" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="american">American Express</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        </div>
        </div>
            
        <div class="row">
        <form class="needs-validation" method="POST" action="verif_payement.php">
          <div class="col-md-6 mb-3">
              
            <label for="NomCB">Nom de la carte</label>
            <input type="text" name = "Nomdecarte" class="form-control" id="NomCB" placeholder="Nom de la carte" required>
            <small class="text-muted">Nom complet affiché sur la carte</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
               
          <div class="col-md-6 mb-3">
            <label for="NumeroCB">Numéro de la carte</label>
            <input type="text" class="form-control" id="NumeroCB" name = "num_carte" placeholder="Numéro de la carte" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="Expiration">Date d'expiration</label>
            <input type="text" name="Date" class="form-control" id="Expiration" placeholder="Date d'expiration" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="CodeSecurite">Code de sécurité</label>
            <input type="text" name="coddesecu" class="form-control" id="CodeSecurite" placeholder="Code de sécurité" required>
            <small class="text-muted">(3 ou 4 chiffres, selon la carte)</small>
            <div class="invalid-feedback">
              Security code required
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
</div>
</body>
</html>

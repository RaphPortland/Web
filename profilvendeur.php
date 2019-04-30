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
    <title>Votre profil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

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
    <link href="form-validation.css" rel="stylesheet">
  </head>


  <body class="bg-light">

<header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <strong>AMA'ZONE ECE</strong>
      </a>

        <button type="button" class="btn btn-dark btn-lg"> Panier </button>

    </div>
  </div>
</header>



<section class="jumbotron text-center">

    
  <div class="py-5 text-center">
    <h2>Votre Profil</h2>
    <p class="lead">Vous êtes vendeur sur AMA'ZONE ? Vous pouvez mettre en vente un ou plusieurs articles !</p>
  </div>
</section>
<h1> <?php echo $_SESSION['Email']; ?> </h1>

    <div class="container">

    <div class="row"> 
      <div class="col-md-2">
        <h4>Votre profil</h4>
        <p><img src="img/raph.jpg"></p><br/><br/> 
      </div>
      <div class="col-md-4">
        <p><br/><br/>Nom: <?php echo $_SESSION['Nom']; ?> <br/>Prénom: <?php echo $_SESSION['Prenom']; ?> <br/> Pseudo: <?php echo $_SESSION['Pseudo']; ?><br/>E-mail: <?php echo $_SESSION['Email']; ?> </p>
      </div>
    </div>

    </div>

    <div class="content">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-5">
          <div class="card mb-4 shadow-sm">
            <a href="itemsenvente.html"><img src="img/itemsenvente.jpg" alt="responsive" class="img-thumbnail"></a> </text></svg>
            <div class="card-body">
              <p class="card-text"> Voir tous vos articles en vente</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="card mb-4 shadow-sm">
            <a href="ajouterItems.html"><img src="img/ajouteritems.jpg" alt="responsive" class="img-thumbnail"></a> </text></svg>
            <div class="card-body">
              <p class="card-text"> Ajouter un ou plusieurs articles</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
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
  </footer>

</div>

        <script src="form-validation.js"></script></body>
</html>

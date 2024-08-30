<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Au Pois Gourmand</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container text-center">
        <h1 class="mb-5">Au Pois Gourmand</h1>


        <?php
        $menu = isset($_GET['menu']) ? $_GET['menu'] : '';
        if (!empty($menu)) {
            echo '<h2>Merci pour votre commande !</h2>';
            echo '<img src="img/rome.jpg" alt="Description de l\'image" style="width:300px;height:auto;">';
            echo '<p>Votre formule ' . htmlspecialchars($menu) . ' arrive dans quelques instants...</p>';
            echo '<p>Nous vous souhaitons une bonne dégustation.</p>';
            echo '<p>Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</p>';
            echo '<p>Votre facture sera de ... €</p>';
            echo '<a href="atelier1.php" class="btn btn-primary mt-4">Choisir un autre menu</a>';
        } else {
        ?> 



        <div class="row">
        <div class="col-md-6">
        <div class="card">
        <img src="img/rome.jpg" class="card-img-top" alt="Formule Rome">
        <div class="card-body">
        <h5 class="card-title">Formule Rome</h5>
        <p class="card-text">Tomates buratina<br>Rizotto aux asperges<br>Panna cotta</p>
         <a href="atelier1.php?menu=Rome" class="btn btn-info btn-choose">Choisir</a>
         </div>
         </div>
         </div>
         <div class="col-md-6">
         <div class="card">
         <img src="img/nyork.jpg" class="card-img-top" alt="Formule New-York">
         <div class="card-body">
         <h5 class="card-title">Formule New-York</h5>
         <p class="card-text">César salade<br>Cheese burger<br>Cheesecake</p>
         <a href="atelier1.php?menu=New-York" class="btn btn-danger btn-choose">Choisir</a>
         </div>
         </div>
         </div>
         </div>
         <div class="row mt-4">
         <div class="col-md-6">
         <div class="card">
          <img src="img/delhi.jpg" class="card-img-top" alt="Formule Delhi">
          <div class="card-body">
         <h5 class="card-title">Formule Delhi</h5>
         <p class="card-text">Poppadoms<br>Agneau byriani<br>Lassi mangue</p>
           <a href="atelier1.php?menu=Delhi" class="btn btn-warning btn-choose">Choisir</a>
         </div>
         </div>
         </div>
          <div class="col-md-6">
          <div class="card">
         <img src="img/hanoi.jpg" class="card-img-top" alt="Formule Hanoï">
         <div class="card-body">
         <h5 class="card-title">Formule Hanoï</h5>
         <p class="card-text">Nems aux crevettes<br>Poulet saté<br>Perles de coco</p>
         <a href="atelier1.php?menu=Hanoï" class="btn btn-primary btn-choose">Choisir</a>
         </div>
         </div>
        </div>
        </div>
        <?php
        }
        ?>
    </div>
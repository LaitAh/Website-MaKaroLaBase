<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $absoluteUrl ?>/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="icon" href="<?= $absoluteUrl ?>/img/favicon.ico">
  <title>maKaro la Base</title>
  <meta name="description" content="Cuisine végétalienne sucrée et salée, faite maison, avec des produits paysans. 100% gourmande !">
  <meta property="og:title" content="maKaro la Base"/>
  <meta property="og:description" content="Cuisine végétalienne sucrée et salée, faite maison, avec des produits paysans. 100% gourmande !"/>
  <meta property="og:image" content="<?= $absoluteUrl ?>/img/banner.jpg"/>
  <meta property="og:url" content="https://www.makarolabase.com"/>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #fff;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto d-flex justify-content-between" style="width: 100%;">

          <li class="nav-item nav-element" id="nav-home">
            <a href="<?= $absoluteUrl ?>/" class="nav-link d-flex align-items-center">
              <img src="<?= $absoluteUrl ?>/img/nav/icon-logo.jpg" alt="Logo maKaro" class="nav-icon"> 
              home
            </a>
          </li>
          <li class="nav-item nav-element" id="nav-bakeryBox">
            <a href="<?= $absoluteUrl ?>/patisserie" class="nav-link d-flex align-items-center">
              <img src="<?= $absoluteUrl ?>/img/nav/icon-bakery.jpg" alt="Icône pâtisserie" class="nav-icon"> 
              pâtisserie
            </a>
          </li>
          <li class="nav-item nav-element" id="nav-bouffeBox">
            <a href="<?= $absoluteUrl ?>" class="nav-link d-flex align-items-center disabled"> 
              <img src="<?= $absoluteUrl ?>/img/nav/icon-bouffe.jpg" alt="Icône bouffeBox" class="nav-icon"> 
              bouffeBox
            </a>
          </li>
          <li class="nav-item nav-element" id="nav-beachBox">
            <a href="<?= $absoluteUrl ?>" class="nav-link d-flex align-items-center disabled">
              <img src="<?= $absoluteUrl ?>/img/nav/icon-beach.jpg" alt="Icône beachBox" class="nav-icon disabled"> 
              beachBox
            </a>
          </li>
          <li class="nav-item nav-element" id="nav-contact">
            <a href="<?= $absoluteUrl ?>/contact" class="nav-link d-flex align-items-center">
              <img src="<?= $absoluteUrl ?>/img/nav/icon-contact.jpg" alt="Icône contact" class="nav-icon"> 
              contact
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</body>
</html>
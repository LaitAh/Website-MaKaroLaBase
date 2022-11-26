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
  <title>maKaro la Base</title>
  <meta name="description" content="cuisine vegan, faite maison avec des produits paysans">
  <meta property="og:title" content="maKaro la Base"/>
  <meta property="og:description" content="cuisine vegan, faite maison avec des produits paysans"/>
  <meta property="og:image" content="<?= $absoluteUrl ?>/img/banner.jpg"/>
  <meta property="og:url" content="https://www.makarolabase.com"/>
</head>
<body>
  <header>
    <nav class="main-nav">
      <ul class="nav-list">
        <a href="#" class="nav-burgermenu">&#9776;</a>
        <li class="nav-element" id="nav-home">
          <a href="<?= $absoluteUrl ?>/" class="nav-link">
            <img src="<?= $absoluteUrl ?>/img/nav/icon-logo.jpg" alt="Logo maKaro" class="nav-icon">
            home
          </a>
        </li>
        <li class="nav-element" id="nav-bouffeBox">
          <a href="<?= $absoluteUrl ?>/bouffebox" class="nav-link">
            <img src="<?= $absoluteUrl ?>/img/nav/icon-bouffe.jpg" alt="Icône bouffeBox" class="nav-icon">
            bouffeBox
          </a>
        </li>
        <li class="nav-element" id="nav-beachBox">
          <a href="<?= $absoluteUrl ?>/beachbox" class="nav-link">
            <img src="<?= $absoluteUrl ?>/img/nav/icon-beach.jpg" alt="Icône beachBox" class="nav-icon">
            beachBox
          </a>
        </li>
        <li class="nav-element" id="nav-bakeryBox">
          <a href="<?= $absoluteUrl ?>/patisserie" class="nav-link">
            <img src="<?= $absoluteUrl ?>/img/nav/icon-bakery.jpg" alt="Icône pâtisserie" class="nav-icon">
            pâtisserie
          </a>
        </li>
        <li class="nav-element" id="nav-contact">
          <a href="<?= $absoluteUrl ?>/contact" class="nav-link">
            <img src="<?= $absoluteUrl ?>/img/nav/icon-contact.jpg" alt="Icône contact" class="nav-icon">
            contact
          </a>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>
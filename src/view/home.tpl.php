<main class="home">
  <img src="<?= $absoluteUrl ?>/img/banner.jpg" alt="Bannière avec le logo maKaro" class="img-banner">
  <h1 class="title">
    Cuisine vegan bio, faites maison, 100% gourmande
  </h1>
  <div class="delivery-details">
    <h3>Commandez la veille pour la livraison de 11h à 19h.</h3>
    <h4>Zone de livraison : Marseille du 1<sup>er</sup> au 12<sup>ème</sup> (voir Contact pour plus de détail)</h4>
  </div>

  <h2 class="box-title">Choisissez votre box</h2>
  <section class="box">
    <div class="menus" id="bakeryBox"><a href="#">pâtisserie</a></div>
    <div class="menus" id="bouffeBox"><span class="toCome"><a href="#">bouffeBox</a></span></div>
    <div class="menus" id="beachBox"><span class="toCome"><a href="#">beachBox</a></span></div>
  </section>

  <img class="separator" src="<?= $absoluteUrl ?>/img/separator.jpg" alt="Image de séparation">
  <?php
    require_once __DIR__ . '/../view/bakery.tpl.php';
  ?>
  <img class="separator" src="<?= $absoluteUrl ?>/img/separator.jpg" alt="Image de séparation">
  <?php
    require_once __DIR__ . '/../view/contact.tpl.php';
  ?>
</main>
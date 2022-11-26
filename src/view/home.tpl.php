<main class="home">
  <img src="<?= $absoluteUrl ?>/img/banner.jpg" alt="Bannière avec le logo maKaro" class="img-banner">
  <h1 class="title">
    cuisine <strong>vegan</strong>, faite maison avec des produits paysans <br/>
    <strong>100% gourmande</strong>
  </h1>

  <h2 class="box-title">choisissez votre box</h2>
  <section class="box">
    <div class="menus" id="bakeryBox"><a href="<?= $absoluteUrl ?>/patisserie">pâtisserie</a></div>
    <div class="menus" id="bouffeBox"><span class="toCome"><a href="">bouffeBox</a></span></div>
    <div class="menus" id="beachBox"><span class="toCome"><a href="">beachBox</a></span></div>
  </section>
  <div class="delivery-details">
    <a href="<?= $absoluteUrl ?>/contact" class="button">commander</a>
    <h3>commandez la veille pour la livraison de 11h à 19h.</h3>
    <h4>voir <a href="<?= $absoluteUrl ?>/contact" class="link">contact</a> pour plus de détails</h4>
  </div>

  <img class="separator" src="<?= $absoluteUrl ?>/img/separator.jpg" alt="Image de séparation">
  <?php
    require_once __DIR__ . '/../view/bakery.tpl.php';
  ?>
  <img class="separator" src="<?= $absoluteUrl ?>/img/separator.jpg" alt="Image de séparation">
  <?php
    require_once __DIR__ . '/../view/contact.tpl.php';
  ?>
</main>
<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Bauhaus | <?=SITE['name']?></title>
    <meta name="description" content="fue la escuela de arquitectura, diseño, artesanía y arte fundada en 1919 por Walter Gropius en Weimar (Alemania) y cerrada por las autoridades prusianas en manos del Partido Nazi.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <?php
        require 'app/components/sites_carousel.php';
        require 'app/components/single_page.php';
        require 'app/components/multi_page.php';
      ?>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>

<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Tienda| <?=SITE['name']?></title>
    <meta name="description" content="Me encanta la colaboración mutua entre profesional-cliente, prefiero la frase: Trabajo contigo. En vez de: Trabajo para ti.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5 bg-color">
      <section class="container">
        <h1 class="text-center">Artículos a la venta</h1>

        <div id="servicios" class="container text-dark">
          <div class="row justify-content-center align-items-center full-screen">
            <?php get_service_cards( SITE['service_cards'] ); ?>
          </div>
        </div>

      </section>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>

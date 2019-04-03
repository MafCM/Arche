<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <?php require 'app/components/meta_tags.php'; ?>
    <title>Museo | <?=SITE['name']?></title>
    <meta name="description" content="Aquí hay una selección de clientes felices y hermosos proyectos.">
  </head>
  <body class="pt-5">
    <?php require 'app/components/navbar.php'; ?>
    <main class="pt-5">
      <section class="container">
        <div class="heroscreen_background col12">
          <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
          <source src="img/rec.mp4" type="video/mp4" />
        </video/>
      </div>
      </section>
    </main>
    <?php require 'app/components/footer.php'; ?>
    <?php require 'app/components/scripts.php'; ?>
  </body>
</html>

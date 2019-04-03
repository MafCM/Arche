<?php require 'app/app.php'; ?>
<!doctype html>
<html lang="es">
<head>
  <?php require 'app/components/meta_tags.php'; ?>
  <title><?=SITE['name']?></title>
  <meta name="description" content="¿Necesitas un nuevo sitio web?
  Elaboro experiencias en línea, hermosas y atractivas. Soy Jonathan MirCha, Diseñador Web.">
</head>
<body class="pt-5">
  <?php require 'app/components/navbar.php'; ?>
  <main class="pt-5 text-white gradient-aqua">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <article class="col-12 col-lg-5 font-120">
          <h2>Arche Museo</h2>
          <p>
            Arche es un proyecto que desarrolla un museo interactivo, orientado al diseño que se aplicó en la escuela de la Bauhaus, en específico, de los profesores George Muche y Alfred Arndt, cuyo diseño de obras, se encofó más en su función que en su belleza. Todo esto para generar conciencia en la población de 15 años en adelante, de obtener recursos por su funcionalidad y no sólo por acumular cosas estéticamente bellas.            </p>
            <!-- <a href="#servicios" class="btn btn-lg btn-success">
            <b>Sí, ¡empecemos!</b>
          </a> -->
        </article>
        <article class="col-12 col-lg-7">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/001.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/002.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/003.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </article>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <article class="col-12 col-lg-5 order-lg-1 font-120">
          <h2>Objetivo</h2>
          <p>
            Crear un museo 3D inspirado en la escuela de
            Bauhaus para mostrar el trabajo de Alfred Arndt
            y Georg Muche, fusionando las áreas de ambos
            profesores (Diseño de Interiores y Arquitectura).            </p>

            <h2>Problemática</h2>
            <p>Lograr conciencia en las personas acumuladoras
              de recursos, por su fin “estético” y no por su uso funcional.</p>

              <h2>Público</h2>
              <p>Personas de 15 años en adelante interesadas
                en el diseño arquitectónico e industrial.</p>


              </article>

              <article class="col-12 col-lg-7">
                <img class="img-fluid" src="img/222.png" alt="cartel">
              </article>
            </div>
          </div>
          <div id="servicios" class="container text-dark">
            <div class="row justify-content-center align-items-center full-screen">
              <?php get_service_cards( SITE['service_cards'] ); ?>
            </div>
          </div>
        </main>
        <?php require 'app/components/footer.php'; ?>
        <?php require 'app/components/scripts.php'; ?>
      </body>
      </html>

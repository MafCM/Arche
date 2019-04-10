<form action="" method="post">
  <div class="form-group">
    <input id="nombre" name="nombre" placeholder="Escribe tu nombre" type="text" class="form-control" required>
  </div>
  <div class="form-group">
    <input id="email" name="email" placeholder="Escribe tu email" type="email" class="form-control" required>
  </div>
  <div class="form-group">
    <textarea name="comentarios" id="comentarios" placeholder="Déjanos tus comentarios" class="form-control" required></textarea>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-lg active bg-success text-white" value="Enviar">
  </div>
</form>
<?php
/* Hay dos métodos de envío de formularios GET (por la url) y POST (en las cabeceras del documento) */
echo '<h2>Datos por GET</h2>';
echo '<pre>';
  var_dump($_GET);
echo '</pre>';
echo '<br>';
echo '<h2>Datos por POST</h2>';
echo '<pre>';
  var_dump($_POST);
echo '</pre>';
?>

<h1 class="nombre-pagina">actualizar servicios</h1>
<p class="descripcion-pagina">Actualiza un servicio</p>


<?php 
include_once __DIR__.'/../templates/barra.php';
include_once __DIR__.'/../templates/alertas.php';
?>


<form method="POST" class="formulario">

    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Actualizar servicio">
</form>
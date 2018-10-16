<?php include_once 'includes/templates/header.php';?>


<?php
try {
    require_once('includes/funciones/bdconexion.php');//Conexion a la BD
    setlocale(LC_TIME,'spanish');
    $sql = "SELECT * FROM categoria_servicio "; //Es importante dejar un espacio entre la última letra y las comillas
    $resultado = $conn->query($sql);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<section class="servicios contenedor seccion">
    <ul class="lista-servicios clearfix">
        <?php while($categoria_servicio = $resultado -> fetch_assoc() ) { ?>
            <li>
                <div class="servicio">
                    <a class="servicio-info" href="#servicio<?php echo $categoria_servicio['id_cat_serv']; ?>">
                        <img src="img/<?php echo $categoria_servicio['imagen_cat_serv'] ?>" alt="imagen servicio">
                        <p><?php echo utf8_encode($categoria_servicio['nombre_cat_serv'])?></p>
                    </a>
                </div>
            </li>
            <div style="display:none;">
                <div class="servicio-info" id="servicio<?php echo $categoria_servicio['id_cat_serv']; ?>">
                    <h2><?php echo utf8_encode($categoria_servicio['nombre_cat_serv']) ?></h2>
                    <img src="img/<?php echo $categoria_servicio['imagen_cat_serv'] ?>" alt="imagen servicio">
                    <p><?php echo utf8_encode($categoria_servicio['descripcion_cat_serv']) ?></p>
                </div>

            </div>
        <?php } ?>
    </ul>
</section><!--servicios-->
<?php $conn->close();//cerramos la conexión a la BD ?>
</section>

<?php include_once 'includes/templates/footer.php'; ?>


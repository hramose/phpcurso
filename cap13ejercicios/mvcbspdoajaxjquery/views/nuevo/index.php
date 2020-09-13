

    <?php require 'views/header.php'; ?>
    <h1 class="center">Sección de Nuevo</h1>
<article>
    <seccion>
        <div><?php echo $this->mensaje; ?></div>
      

        <form action="<?php echo constant('URL'); ?>nuevo/crear" method="POST">
            <label for="">Matrícula</label><br>
            <input type="text" name="matricula" id=""><br>
            <label for="">Nombre</label><br>
            <input type="text" name="nombre" id=""><br>
            <label for="">Apellido</label><br>
            <input type="text" name="apellido" id=""><br>
            <input type="submit" value="Crear nuevo alumno">
        </form>
    </seccion>
</article>


    <?php require 'views/footer.php'; ?>
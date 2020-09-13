


    <?php require 'views/header.php'; ?>
    <h1 class="center">Actualizar <?php echo $this->controlleralumno->matricula; ?></h1>
    <article>
        <seccion>
        <div><?php echo $this->mensaje; ?></div>
        

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno/" method="POST">
            <label for="">Matrícula</label><br>
            <input type="text" disabled name="matricula" id="" value="<?php echo $this->controlleralumno->matricula; ?>"><br>
            <label for="">Nombre</label><br>
            <input type="text" name="nombre" value="<?php echo $this->controlleralumno->nombre; ?>"><br>
            <label for="">Apellido</label><br>
            <input type="text" name="apellido" value="<?php echo $this->controlleralumno->apellido; ?>"><br>
            <input type="submit" value="Actualizar  alumno">
        </form>
</seccion>
</article>

    <?php require 'views/footer.php'; ?>

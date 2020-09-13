
    <?php require 'views/header.php'; ?>
    <h1 class="center">Sección de consulta</h1>
    <article>
        <seccion>
        <div><?php echo $this->mensaje; ?></div>
  

        <table width="100%" id="tabla">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="tbody-alumnos">
            
        <?php
            include_once 'models/alumno.php';
            foreach ($this->controlleralumnos as $row) {
                $alumno = new Alumno();
                $alumno = $row;
        ?>
                <tr id="fila-<?php echo $alumno->matricula; ?>">
                    <td><?php echo $alumno->matricula; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Actualizar</a></td>
                    <td><button class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>">Eliminar Ajax</button></td> 
                </tr>
        <?php } ?>
            </tbody>
        </table>
           
        </seccion>
    </article>
    <?php require 'views/footer.php'; ?>


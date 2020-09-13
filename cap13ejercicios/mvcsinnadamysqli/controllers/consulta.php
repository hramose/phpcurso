<<?php



class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        // esta es para cargar http://localhost:8080/jagphpcurso/mvc/consulta
        $alumnos = $this->view->datos = $this->model->get();
        $this->view->controlleralumnos = $alumnos;
        $this->view->render('consulta/index');
    }
    //Ver alumno para editar

    function verAlumno($param = null){
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);

        session_start();
        $_SESSION["id_verAlumno"] = $alumno->matricula;

        $this->view->controlleralumno = $alumno;
        $this->view->render('consulta/detalle');
    }
//http://localhost:8080/jagphpcurso/mvc/consulta/actualizarAlumno/
    function actualizarAlumno($param = null){
        session_start();
        $matricula = $_SESSION["id_verAlumno"];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];


        unset($_SESSION['id_verAlumno']);

        if($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            $alumno = new Alumno();
            $alumno->matricula = $matricula;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->controlleralumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al alumno";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno($param = null){
        $controllermatricula = $param[0];

        if($this->model->delete($controllermatricula)){
            $mensaje ="Alumno eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar al alumno";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }



        echo $mensaje . 'Se elimino el alumno con id=' . $matricula;
       // $this->render();
    }

    
}

?>
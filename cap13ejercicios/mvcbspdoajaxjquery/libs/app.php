<?php

require_once 'controllers/errores.php';

class App{

    function __construct(){
        //Esto funciona para toda la applicacion el get url devuelve la url
        $url = isset($_GET['url'])? $_GET['url']: null;
        //Muestra si pasamos http://localhost:8080/jagphpcurso/mvc/fdfd fdfd
        echo $url . '<br>';
        $url = rtrim($url, '/');
            echo $url . '<br>';
        //convierte a array la variable del
        $url = explode('/', $url);
        var_dump($url);  
        if(empty($url[0])){
            //Si no encuentra texto adicional en la url siempre carga index.php
            $archivoController = 'controllers/index.php';
            require $archivoController;
            $controller = new Index();
            $controller->render();
            $controller->loadModel('index');
            return false;
        }else{
            //POr el contrario carga el ocntrolador que corresponda con el texto mandado por url
            $archivoController = 'controllers/' . $url[0] . '.php';
        }
        //Si el archivo existe se carga el controladodor.
        if(file_exists($archivoController)){
            require $archivoController;

            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // Se obtienen el número de param
            $nparam = sizeof($url);
            // si se llama a un método
            if($nparam > 1){
                // hay parámetros
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    // solo se llama al método
                    $controller->{$url[1]}();
                }
            }else{
                // si se llama a un controlador
                $controller->render();  
            }
        }else{
            $controller = new Errores();
        }
    }
    
}
?>
<?php

  
     require 'config/config.php';
    require 'libs/controller.php';
  
    require 'libs/view.php';
    require 'libs/model.php';
   
 
    require 'libs/app.php';
    
     require 'libs/database.php';
   
    //Esto es comuún a toda la applicación siempre estará disponible.
    $app = new App();
?>
<?php
   $jsondata = file_get_contents("ejemplo.json");
   $obj = json_decode($jsondata,true);
   print_r($obj);
     
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clases anónimas</title>
    </head>
    <body>
        <h1>Clases anónimas</h1>
        <?php
          interface Datos{
            public function detalle(string $nombre);
          }

          class Empresa {
            private $razonSocial;

            public function getRazonSocial(){
              return $this->razonSocial;
            }

            public function setRazonSocial(Datos $razonSocial){
              $this->razonSocial = $razonSocial;
            }
          }

          $empresa = new Empresa;
          $empresa->setRazonSocial( new class implements Datos {
              public function detalle(string $nombre){
                echo $nombre;
              }
            }
          );

          $empresa->getRazonSocial()->detalle("Anaya Multimedia");
          ?>
    </body>
</html>

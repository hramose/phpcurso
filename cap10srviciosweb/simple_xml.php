<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Lectura de un archivo XML</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!— Bootstrap —>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">        
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>Lectura de XML con SimpleXML</title>
    </head>
    <body>
      <div class="container">        
        <?php
        $biblioteca = simplexml_load_file("biblioteca.xml");
        foreach ($biblioteca->tema as $tema) {
            ?>
            <div class="row">

            <h2><?= $tema["id"] ?></h2>
                
                    <?php
                    foreach ($tema->libro as $libro) {
                        ?>

                            <div class="col-xs-6 col-md-3">
                            <img src="<?= $libro->imagen ?>" class="img-rounded">
                            <p class="text-primary"><?= $libro->titulo ?></p>
                            <p class="text-muted"><?= $libro->autor ?></p>
                            <p class="text-success"><?= $libro->editorial ?></p>
                            </div>                                       
                        <?php
                    }
                }
                ?>
        </div>
      </div>
    </body>
</html>
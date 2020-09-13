<?php
// Routes

$app->get('/libros', function ($request, $response, $args) {


	$base_datos_PDO = $this->db;
    $resultado = $base_datos_PDO->query ( "select * from libros" );

    $libros = array();
    
    foreach ( $resultado as $row ) {
      $libros[]  = array(
            "id" => $row["id"],
            "titulo" => $row["titulo"],
            "autor" => $row["autor"],
            "editorial" => $row["editorial"],
            "imagen" => $row["imagen"]
        );
    }
    return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($libros));
});

$app->get('/libros/{id}', function ($request, $response, $args) {

    $id = $request->getAttribute('id');

	$base_datos_PDO = $this->db;
    $resultado = $base_datos_PDO->query ( "select * from libros where id=$id" );

    $libros = array();
    
    foreach ( $resultado as $row ) {
      $libros[]  = array(
            "id" => $row["id"],
            "titulo" => $row["titulo"],
            "autor" => $row["autor"],
            "editorial" => $row["editorial"],
            "imagen" => $row["imagen"]
        );
    }
    return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($libros));
});

$app->post('/libros', function ($request, $response, $args) {

	$datos = $request->getParsedBody();
    $titulo = filter_var($datos['titulo'], FILTER_SANITIZE_STRING);
	$autor = filter_var($datos['autor'], FILTER_SANITIZE_STRING);
	$editorial = filter_var($datos['editorial'], FILTER_SANITIZE_STRING);
	$imagen = filter_var($datos['imagen'], FILTER_SANITIZE_STRING);


	$base_datos_PDO = $this->db;
    $resultado = $base_datos_PDO->query ( "insert into libros(titulo, autor, editorial, imagen) values('$titulo', '$autor', '$editorial', '$imagen')" );

    $id = $base_datos_PDO->lastInsertId();

	$resultado = $base_datos_PDO->query ( "select * from libros where id=$id" );

    $libros = array();
    
    foreach ( $resultado as $row ) {
      $libros[]  = array(
            "id" => $row["id"],
            "titulo" => $row["titulo"],
            "autor" => $row["autor"],
            "editorial" => $row["editorial"],
            "imagen" => $row["imagen"]
        );
    }
    return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($libros));
});

$app->put('/libros/{id}', function ($request, $response, $args) {

    $id = $request->getAttribute('id');

	$datos = $request->getParsedBody();
    $titulo = filter_var($datos['titulo'], FILTER_SANITIZE_STRING);
	$autor = filter_var($datos['autor'], FILTER_SANITIZE_STRING);
	$editorial = filter_var($datos['editorial'], FILTER_SANITIZE_STRING);
	$imagen = filter_var($datos['imagen'], FILTER_SANITIZE_STRING);


	$base_datos_PDO = $this->db;
    $resultado = $base_datos_PDO->query ( "update libros set titulo = '$titulo', autor = '$autor', editorial = '$editorial', imagen = '$imagen' where id = $id" );

	$resultado = $base_datos_PDO->query ( "select * from libros where id=$id" );

    $libros = array();
    
    foreach ( $resultado as $row ) {
      $libros[]  = array(
            "id" => $row["id"],
            "titulo" => $row["titulo"],
            "autor" => $row["autor"],
            "editorial" => $row["editorial"],
            "imagen" => $row["imagen"]
        );
    }
    return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($libros));
});

$app->delete('/libros/{id}', function ($request, $response, $args) {

    $id = $request->getAttribute('id');

	$base_datos_PDO = $this->db;

    $resultado = $base_datos_PDO->query ( "delete from libros where id = $id" );

	$mensaje = array(
            "status" => true,
            "message" => "Libro borrado correctamente"
        );    

    return $response->withStatus(200)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode($mensaje));
});


$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
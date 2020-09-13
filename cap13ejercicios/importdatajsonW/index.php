<?php 
require 'database.php';
if(isset($_POST['buttomImport'])) {
    copy($_FILES['jsonFile']['tmp_name'], 'jsonguardado/'.$_FILES['jsonFile']['name']);
    $data = file_get_contents('jsonguardado/'.$_FILES['jsonFile']['name']);
    $products = json_decode($data);    
    foreach ($products as $product) {
        $stmt = $conn->prepare('insert into product(name, price, quantity) values(:name, :price, :quantity)');
        $stmt->bindValue('name', $product->name);
        $stmt->bindValue('price', $product->price);
        $stmt->bindValue('quantity', $product->quantity);
        $stmt->execute();
         
    }
      $stmt = $conn->prepare('select * from product');
        $stmt->execute();
         while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      $datos = $fila[0] . " " . $fila[1] . " " . $fila[2] . "<br>";
      print $datos;
    }
    
}
?>
<html>
	<head>
		<title>Import JSON File</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			JSON File <input type="file" name="jsonFile">
			<br>
			<input type="submit" value="Import" name="buttomImport"> 
		</form>
	</body>
</html>
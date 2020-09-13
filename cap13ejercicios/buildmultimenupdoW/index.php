<?php require_once 'database.php'; ?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Menu - Default functionality</title>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
<style>
.ui-menu {
	width: 150px;
}
</style>
</head>
<body>
<?php 
$stmt = $conn->prepare('select * from menu where parentId is null');
$stmt->execute();
?>

<ul id="menu">
	<?php while($menu1 = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
		<li><?php echo $menu1->name; ?>
			<?php 
				$stmt1 = $conn->prepare('select * from menu where parentId = :id');
				$stmt1->bindValue('id', $menu1->id);
				$stmt1->execute();
			?>
			<?php if($stmt1->rowCount() > 0) { ?>
			<ul>
				<?php while($menu2 = $stmt1->fetch(PDO::FETCH_OBJ)) { ?>
						<li><?php echo $menu2->name; ?></li>
				<?php } ?>
			</ul>
			<?php } ?>
		</li>
	<?php } ?>
</ul>


</body>
</html>
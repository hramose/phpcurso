
<?php require 'connect.php'; ?>

<script type="text/javascript"
	src="js/jquery-3.4.1.js"></script>

<script type="text/javascript"
	src="js/jquery-ui.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$('#listProducts img').css({
			'z-index' : 100
		}).draggable({
			'opacity' : '0.5',
			'revert' : true,
			'cursor' : 'pointer'
		});

		function displayCart(data) {
            var s = '';
            var sum = 0;
            for (var i = 0; i < data.length; i++) {
                sum += parseInt(data[i].qty) * parseFloat(data[i].price);
                s += '<br><img src="images/' + data[i].photo + '" width="50" height="50">';
                s += '<br>Id: ' + data[i].id;
                s += '<br>Name: ' + data[i].name;
                s += '<br>Quantity: ' + data[i].qty;
                s += '<br>Sub Total: ' + (parseInt(data[i].qty) * parseFloat(data[i].price));
                s += '<br><a href="cart.php?productIdCart=' + i + '" class="delete">Delete</a>';
                s += '<br>--------------------------';
            }
            s += '<br>Totals: ' + sum;
            $('#cart').html(s);
        }

		$('#cart').droppable({
            drop: function (event, ui) {
                var productId = $(ui.draggable).siblings('.productId').val();                
                $.ajax({
                    type: 'GET',
                    url: 'cart.php?action=buy&id=' + productId,
                    success: function (data) {                    	
                        displayCart($.parseJSON(data));
                    }
                });
            }
        });

		$('#cart').ajaxComplete(function () {
            $('.delete').bind('click', function () {
                var productIdCart = $(this).attr('href').split('=');                
                $.ajax({
                    type: 'GET',
                    url: 'cart.php?action=delete&index=' + productIdCart[1],
                    success: function (data) {
                    	displayCart($.parseJSON(data));
                    }
                });
            });
        });
		
	});
</script>	

<div style="float: left; margin-right: 10px;" id="listProducts">
	<table cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Photo</th>
		</tr>
		<?php
			$result = mysqli_query($con, 'select * from product');
			while($product = mysqli_fetch_object($result)){
		?>
			<tr>
			<td><?php echo $product->id; ?></td>
			<td><?php echo $product->name; ?></td>
			<td><?php echo $product->price; ?></td>
			<td><img
				src="images/<?php echo $product->photo; ?>"
				width="120" height="100" class="productPhoto" /> 
				<input
				type="hidden" class="productId" value="<?php echo $product->id; ?>" /></td>
		</tr>
		<?php } ?>
	</table>
</div>
<a href="checkout.php">Terminar carro</a>

<div id="cart"
	style="width: 200px; min-height: 200px; border: 1px solid red; margin-left: 300px; padding: 5px;">

</div>	


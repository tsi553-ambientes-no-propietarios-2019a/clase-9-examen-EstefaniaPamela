<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<center><h1>Administrador</h1></center>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<center>
	<form action="php/process_registration.php" method="post">
		<div>
			<label>Nombre del producto: </label>
			<input type="text" name="productname" required="required">
			 <br/><br/>
		</div>
		
		<div>
			<label>Precio por unidad: </label>
			<input type="text" name="price" required="required">
			 <br/><br/>
		</div>

		</div>
			<button>Registrar</button>
			 <br/><br/>
		</div>

		<h2>LISTADO PRODUCTOS</h2>
	<table>
		<thead>
			<tr>
				
				<th>PRODUCTO     </th>
				<th>PRECIO     </th>
				
				
			</tr>
		</thead>
	</TABLE>
	<table>
		<thead>
			<tr>
				<th>CLIENTE     </th>
				<th>PRODUCTO     </th>
				<th>CANTIDAD-PEDIDA     </th>
				<th>TOATL A PAGAR     </th>
				
			</tr>
		</thead>
	</table>
		
	</form>
	</center>
</body>
</html>
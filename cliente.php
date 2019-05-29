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
	<center><h1>clientes</h1></center>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<center>
	<form action="php/process_registration.php" method="post">
		<div>
		<label>producto: </label>
			<select><option value ="1">1</option>></select> 
			 <br/><br/>
		
		<div>
			<label>Cantidad: </label>
			<input type="text" name="username" required="required">
			 <br/><br/>
		</div>
			<button>Registrar</button>
			 <br/><br/>
		</div>
	</form>
	</center>
</body>
</html>
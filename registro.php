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
	<h1>Registro de usuarios</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<center>
	<form action="php/process_registration.php" method="post">
		<div>
			<label>Nombre: </label>
			<input type="text" name="name" required="required">
			 <br/><br/>
		</div>
		<div>
			<label>Rol de Usuario: </label>
			<select>
				<option value ="0">seleccionar</option >
				<option value ="1">Administrador</option >
				<option value ="2 ">Cliente</option>
			</select> 
			 <br/><br/>
		</div>
		<div>
			<label>Nombre de usuario: </label>
			<input type="text" name="username" required="required">
			 <br/><br/>
		</div>
		<div>
			<label>Contraseña</label>
			<input type="password" name="password" required="required">
			 <br/><br/>
		</div>
		<div>
			<label>confirmar Contraseña</label>
			<input type="password" name="password" required="required">
			 <br/><br/>
		</div>
		<div>
			<button>Registrarme</button>
			 <br/><br/>
		</div>
	</form>
	</center>
</body>
</html>
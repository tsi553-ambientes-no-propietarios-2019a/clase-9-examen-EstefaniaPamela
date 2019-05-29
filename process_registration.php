<?php 
include('../common/utils.php');

if($_POST) {
	if ( isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql_insert = "INSERT INTO user
		(username, password)
		VALUES ($username', MD5('$password'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registro.php');
}
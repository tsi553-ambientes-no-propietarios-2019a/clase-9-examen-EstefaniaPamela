<?php 
session_start();


$conn = new mysqli('localhost', 'root', '', 'users');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

function getProducts($conn) {
	$user_id = $_SESSION['user']['id'];
	$sql = "SELECT *
		FROM user
		WHERE username ='$id'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}

		return $products;
}

/*function getStore($conn) {
	$user_id = $_SESSION['user']['id'];
	$sql = "SELECT *
		FROM store
		WHERE store='$user_id'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../store.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$store = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$store[] = $row;
			}
		}

		return $store;
}*/

//echo $_SERVER['SCRIPT_NAME'];
//echo $_SERVER["HTTP_HOST"];


if ($_SERVER['SCRIPT_NAME'] != '/clase9/index.php' && $_SERVER['SCRIPT_NAME'] != '/clase9/process_login.php' && $_SERVER['SCRIPT_NAME'] != '/clase9/process_login.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . 'clase9/index.php');

} elseif( $_SERVER['SCRIPT_NAME'] == '/clase9/index.php' && isset($_SESSION['user']) ) {
echo 'go home';
	redirect($_SERVER["HTTP_HOST"] . 'clase9/index.php');
}


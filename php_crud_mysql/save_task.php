<?php

	include('db.php');

	if (isset($_POST['save_task'])) {
	$nombre = $_POST['nombre'];

	$query = "INSERT INTO Persona(nombre) VALUES ('$nombre')";
	$result = mysqli_query($conn, $query);
	if(!$result) {
	die("Query Failed.");
	}

	$_SESSION['message'] = 'Name Saved Successfully';
	$_SESSION['message_type'] = 'success';
	header('Location: index.php');

	}

?> 

<?php

header('Content-Type: text/html; charset=utf-8');
function open_database() {
	try {
		$conn = new mysqli("localhost","root","admin","ejc");
		return $conn;
	} catch(Exception $e) {
		echo $e->getMessage();
		return null;
	}
}
function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch(Exception $e) {
		echo $e->getMessage();
	}
}
 ?>
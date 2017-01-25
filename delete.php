<?php 

require_once('dao/pessoaDAO.php');
if(isset($_GET['id'])) {
	remove($_GET['id']));
} else {
	die("Erro: Codigo não identificado");
}

 ?>
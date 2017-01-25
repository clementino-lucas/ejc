<?php 

include 'includes/banco_dados.php';
//iniciando a sessão
session_start();
//recebendo os dados digitados na tela de login e armazenando em variáveis
$login = $_POST['usuario'];
$senha = $_POST['senha'];
//conexão com o banco
$database = open_database();
//consultando usuário e senha no banco
$sql = "SELECT * FROM usuario WHERE usuario = '$login' AND senha = '$senha'";
$resultado = $database->query($sql);
//se a consulta foi bem sucedida e trouxe mais de 1 linha será armazenado o login e a senha na sessão
if($resultado->num_rows > 0) {
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location: principal.php');
//caso não retorne nenhum registro retornará para a página de login
} else {
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location: index.php');
}

 ?>
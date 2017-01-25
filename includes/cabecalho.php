<!DOCTYPE html>
<html>
	<head>
		<?php
			//abrindo sessão
			session_start();
			//se as variáveis estiverem vazias retorna para a página de login
			if((!isset($_SESSION['login']) == true) && (!isset($_SESSION['senha']) == true)) {
				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				header('location: index.php');
			}
		?>
		<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
		<title>EJC - Paróquia de São Pio X</title>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.mask.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
			footer {
				font-size: 10px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#minhaBarra" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="principal.php" class="navbar-brand">EJC - Paróquia de São Pio X</a>
				</div>
				<div class="collapse navbar-collapse" id="minhaBarra">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Gincana <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="cadastroPessoa.php">Cadastrar pessoa física</a></li>
								<li><a href="#">Cadastrar equipes</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main class="container">
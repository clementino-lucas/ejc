<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>EJC - Paróquia de São Pio X</title>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container-login">
			<div class="row">
				<div class="pen-title">
					<h1>Acesso ao sistema</h1>
				</div>
				<div class="container">
					<div class="card"></div>
					<div class="card">
						<h1 class="title">Login</h1>
						<form action="validaUsuario.php" method="post">
							<div class="input-container">
								<input type="text" id="usuario" required="required" name="usuario">
								<label for="usuario">Nome de usuário</label>
								<div class="bar"></div>
							</div>
							<div class="input-container">
								<input type="password" id="password" required="required" name="senha">
								<label for="password">Senha</label>
								<div class="bar"></div>
							</div>
							<div class="button-container">
								<button type="submit"><span>Entrar</span></button>
							</div>
							<div class="footer">
								<a href="#">Esqueceu sua senha?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
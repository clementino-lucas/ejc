<?php 
include 'includes/banco_dados.php';

function consulta($tabela = null,$codigo = null) {
	$database = open_database();
	$registro = null;
	if($codigo) {
		$sql = 	"SELECT * FROM ".$tabela." WHERE codigo = ".$codigo;
		$resultado = $database->query($sql);
		if($resultado->num_rows > 0) {
			$registro = $resultado->fetch_assoc();
		}
	} else {
		$sql = 	"SELECT * FROM ".$tabela;
		$resultado = $database->query($sql);
		if($resultado->num_rows > 0) {
			$registro = $resultado->fetch_all(MYSQLI_ASSOC);
		}
	}
	close_database($database);
	return $registro;
}
function consultaCodigo() {
	$database = open_database();
	$codigo = null;
	$sql = "SELECT * FROM codigo_pessoa";
	$resultado = $database->query($sql);
	if ($resultado->num_rows > 0) {
		$codigo = $resultado->fetch_all(MYSQLI_ASSOC);
		foreach ($codigo as $cod) {
			$codPessoa = $cod['codigo'];
		}
	}
	close_database($database);
	return $codPessoa;
}
//código para adicionar uma pessoa
function add() {
	//abrir a conexão e conectar ao banco
	$database = open_database();
	//se a variável codPessoa não estiver vazia insere os dados no banco
	if(!empty($_POST['codPessoa'])) {
		$codigo = $_POST['codPessoa'];
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$numero_ecc = $_POST['numero_ecc'];
		$radioEjc = $_POST['radioEjc'];
		$sql = "INSERT INTO pessoa (codigo,nome,endereco,numero,bairro,telefone,email,numero_ecc,fez_ejc) VALUES ('$codigo','$nome','$endereco','$numero','$bairro','$telefone','$email','$numero_ecc','$radioEjc')";
		$persistence = $database->query($sql);
		//se ocorrer a persistência dos dados, será redirecionado para a página de sucesso, caso ocorra um erro
		//aparecerá mensagem de erro
		if($persistence) {
			header('location: sucesso.php?id='.$codigo.'&action=save');
		} else {
			echo "<br>";
			echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>";
			echo "<span aria-hidden='true'>&times;</span></button>";
			echo "<span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span>";
			echo "<span class='sr-only'>Sucesso:</span>";
			echo "  Erro ao tentar cadastrar pessoa.";
			echo "</div>";
		}
	}
}
//código para editar uma pessoa
function edit() {
	$database = open_database();
	if(!empty($_POST['codPessoa'])) {
		$codigo = $_POST['codPessoa'];
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$bairro = $_POST['bairro'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$numero_ecc = $_POST['numero_ecc'];
		$radioEjc = $_POST['radioEjc'];
		$sql = "UPDATE pessoa SET nome = '$nome', endereco = '$endereco', numero = '$numero', bairro = '$bairro', telefone = '$telefone', email = '$email', numero_ecc = '$numero_ecc', fez_ejc = '$radioEjc' WHERE codigo = $codigo";
		$persistence = $database->query($sql);
		if($persistence) {
			header('location: sucesso.php?id='.$codigo.'&action=edit');
		} else {
			echo "<br>";
			echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>";
			echo "<span aria-hidden='true'>&times;</span></button>";
			echo "<span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span>";
			echo "<span class='sr-only'>Sucesso:</span>";
			echo "  Erro ao tentar atualizar registro.";
			echo "</div>";
		}
	}
}
function remove($codigo = null) {
	$database = open_database();
	if($codigo) {
		$sql = "DELETE FROM pessoa WHERE codigo = $codigo";
		$persistence = $database->query($sql);
		if($persistence) {
			header('location: sucesso.php?id='.$codigo.'&action=remove');
		} else {
			echo "<br>";
			echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>";
			echo "<span aria-hidden='true'>&times;</span></button>";
			echo "<span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span>";
			echo "<span class='sr-only'>Sucesso:</span>";
			echo "  Erro ao tentar excluir registro.";
			echo "</div>";
		}
	}
}
/*function consultaUsuario($table = null, $user = null, $password = null) {
	$database = open_database();
	if($user) {
		$sql = "SELECT * FROM $table WHERE usuario = '$user' AND senha = '$password'";
		$resultado = $database->query($sql);
		if ($resultado->num_rows > 0) {
			header('location: principal.php');
		} else {
			echo "<br>";
			echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>";
			echo "<span aria-hidden='true'>&times;</span></button>";
			echo "<span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>";
			echo "<span class='sr-only'>Sucesso:</span>";
			echo "  Usuário ou senha inválidos.";
			echo "</div>";
		}
		close_database($database);
	}
}*/

 ?>
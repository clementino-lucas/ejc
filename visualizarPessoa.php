<?php require_once 'includes/cabecalho.php'; ?>
<?php 
	require_once 'dao/pessoaDAO.php';
	$pessoa = consulta('pessoa',$_GET['id']);
?>

<h2>Visualizar Pessoa Física</h2>
	<dl class="dl-horizontal">
		<dt>Código:</dt>
		<dd><?php echo $pessoa['codigo']; ?></dd>
		<dt>Nome:</dt>
		<dd><?php echo $pessoa['nome']; ?></dd>
		<dt>Endereço:</dt>
		<dd><?php echo $pessoa['endereco'].", ".$pessoa['numero']; ?></dd>
		<dt>Bairro:</dt>
		<dd><?php echo $pessoa['bairro']; ?></dd>
		<dt>Telefone:</dt>
		<dd><?php echo $pessoa['telefone']; ?></dd>
		<dt>Email:</dt>
		<dd><?php echo $pessoa['email']; ?></dd>
	</dl>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="editaPessoa.php?id=<?php echo $pessoa['codigo'] ?>" class="btn btn-primary">Editar</a>
			<a href="consultaPessoa.php" class="btn btn-default">Voltar</a>
		</div>
	</div>

<?php require_once 'includes/rodape.php'; ?>
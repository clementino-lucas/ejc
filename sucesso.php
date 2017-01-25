<?php require_once 'includes/cabecalho.php'; ?>
<?php
	require_once 'dao/pessoaDAO.php';
	$pessoa = consulta('pessoa',$_GET['id']);
 ?>

<br>
<?php if(!$_GET['action']=='remove') : ?>
	<?php if($_GET['action']=='edit') : ?>
		<div class='alert alert-success alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
			</button>
			<span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span>
			<span class='sr-only'>Sucesso:</span>
			Registro alterado com sucesso.
		</div>
	<?php elseif($_GET['action']=='save') : ?>
		<div class='alert alert-success alert-dismissible' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
				<span aria-hidden='true'>&times;</span>
			</button>
			<span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span>
			<span class='sr-only'>Sucesso:</span>
			Registro adicionado com sucesso.
		</div>
	<?php endif; ?>
	<h2>Pessoa Física</h2>
	<dl class="dl-horizontal">
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
<?php else : ?>
	<div class='alert alert-success alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Fechar'>
			<span aria-hidden='true'>&times;</span>
		</button>
		<span class='glyphicon glyphicon-floppy-saved' aria-hidden='true'></span>
		<span class='sr-only'>Sucesso:</span>
		Registro excluido com sucesso.
	</div>
<?php endif; ?>
<a href="principal.php" class="btn btn-primary">Voltar a tela inicial</a>
<a href="cadastroPessoa.php" class="btn btn-default">Novo cadastro</a>

<?php require_once 'includes/rodape.php'; ?>
<?php require_once 'includes/cabecalho.php'; ?>
<?php 
	require_once 'dao/pessoaDAO.php';
	$retorno = consulta('pessoa');
?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Consulta de Pessoas</h2>
		</div>
		<div class="col-sm-6 text-right h2">
			<a href="cadastroPessoa.php" class="btn btn-primary">
				<i class="fa fa-plus"></i> Nova pessoa
			</a>
			<a href="consultaPessoa.php" class="btn btn-default">
				<i class="fa fa-refresh"></i> Atualizar
			</a>
		</div>
	</div>
</header>
<hr>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if($retorno) : ?>
		<?php foreach($retorno as $ret) : ?>
		<tr>
			<td><?php echo $ret['codigo'] ?></td>
			<td><?php echo $ret['nome'] ?></td>
			<?php if(empty($ret['endereco'])) : ?>
				<td><?php echo $ret['endereco'] ?></td>
			<?php else : ?>
				<td><?php echo $ret['endereco'].", ".$ret['numero'] ?></td>
			<?php endif; ?>
			<td><?php echo $ret['telefone'] ?></td>
			<td><?php echo $ret['email'] ?></td>
			<td class="actions text-right">
				<a href="visualizarPessoa.php?id=<?php echo $ret['codigo'] ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
				<a href="editaPessoa.php?id=<?php echo $ret['codigo'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
				<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php else : ?>
		<tr>
			<td colspan="6">Nenhum registro encontrado!</td>
		</tr>
	<?php endif; ?>
	</tbody>
</table>

<?php require_once 'includes/rodape.php'; ?>
<?php require_once 'includes/cabecalho.php'; ?>

<h1>Tela Inicial</h1>
<hr />
<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="consultaPessoa.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Consulta de Pessoas</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="equipe.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-users fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Consulta de Equipe</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php include 'modal.php'; ?>
<?php include 'includes/rodape.php'; ?>
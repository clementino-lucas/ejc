<?php require_once 'includes/cabecalho.php'; ?>
<?php 
include 'dao/pessoaDAO.php';
$codigo = consultaCodigo();
add();
?>

<h2>Cadastro de Pessoa</h2>
<form action="cadastroPessoa.php" method="post">
	<hr />
	<div class="row">
		<div class="form-group col-md-1">
			<label for="id">Código</label>
			<input type="text" class="form-control" name="codPessoa" value="<?php echo $codigo; ?>" align="right" readonly="readonly" >
		</div>
		<div class="form-group col-md-2">
			<label for="dt_cadastro">Data de Cadastro</label>
			<input type="text" class="form-control" name="data_cadastro" >
		</div>
		<div class="form-group col-md-9">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label for="endereco">Endereço</label>
			<input type="text" class="form-control" name="endereco">
		</div>
		<div class="form-group col-md-1">
			<label for="numero">Número</label>
			<input type="text" class="form-control" name="numero">
		</div>
		<div class="form-group col-md-5">
			<label for="bairro">Bairro</label>
			<input type="text" class="form-control" name="bairro">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="telefone">Telefone</label>
			<input type="text" class="form-control" name="telefone">
		</div>
		<div class="form-group col-md-7">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email">
		</div>
		<div class="form-group col-md-2">
			<label for="dt_nascimento">Data de Nascimento</label>
			<input type="text" class="form-control" name="data_nascimento" maxlength="10" onkeypress="formatar('##/##/####',this)">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-2">
			<label for="dt_casamento">Data de Casamento</label>
			<input type="text" class="form-control" name="data_casamento" maxlength="10" onkeypress="formatar('##/##/####',this)">
		</div>
		<div class="form-group col-md-2">
			<label for="numero_ecc">ECC nº</label>
			<input type="text" class="form-control" name="numero_ecc" maxlength="3" />
		</div>
		<div class="form-group col-md-4">
			<div class="row">
				<label for="fez_ejc">Fez EJC?</label>
			</div>
			<div class="row">
				<label class="radio-inline">
					<input type="radio" name="radioEjc" value="1"> Sim
				</label>
				<label class="radio-inline">
					<input type="radio" name="radioEjc" value="0"> Não
				</label>
			</div>
		</div>
	</div>
	<div class="row" id="actions">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Salvar</button>
			<a href="principal.php" class="btn btn-default">Cancelar</a>
		</div>
	</div>
</form>

<?php require_once 'includes/rodape.php'; ?>
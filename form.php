<!DOCTYPE html>
<html lang='pt-br'>
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<style>
	@font-face {
		font-family: 'Olivetta Medium otf';
	}
	body {
		color: #9D61B0;
	}
	.btn-purple.disabled, .btn-purple:disabled {
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
	.btn-purple {
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
</style>
<body>
	
	<section>
		<div class="container" id="inscricao">
			<h1><strong>Escolha</strong> o tipo de parceiro que você quer ser</h1>
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6"></div>
			</div>
			<div class="col-md-12">
				prencha o formulário abaixo, seu perfil será analisado entre 45 e 60 dias. Se você for o tipo de parceiro que estamos procurando, entraremos em contato
			</div>
			<div class="col-md-6">
				<form method="POST" action="phpmailer.php">
					<div class="form-group form-sm">
						<strong><label for="inputNome">nome</label></strong>
						<input type="text" name="inputNome" id="inputNome" class="form-control" required autofocus />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputTelefone">telefone</label></strong>
						<input type="tel" name="inputTelefone" id="inputTelefone" maxlength="13" class="form-control" required OnKeyPress='formatar("## #####-####", this)' />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputEmail">e-mail</label></strong>
						<input type="email" name="inputEmail" id="inputEmail" class="form-control" required />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputEndereco">endereço</label></strong>
						<input type="text" name="inputEndereco" id="inputEndereco" class="form-control" required />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputCNPJ">CNPJ</label></strong>
						<input type="text" name="inputCNPJ" id="inputCNPJ" maxlength="14" class="form-control" OnKeyPress="formatar('##.###.###/####-##', this)" />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputAnvisa">você possui certificado da anvisa?</label></strong><br>
						<input type="radio" id="simAnvisa" name="Anvisa" value="sim">
						<label for="simAnvisa">sim</label>
						<input type="radio" id="naoAnvisa" name="Anvisa" value="não">
						<label for="naoAnvisa">não</label>
					</div>
					<div class="form-group form-sm">
						<strong><label for="tempoMercado">há quanto tempo você está no mercado?</label></strong>
						<input type="text" name="tempoMercado" id="tempoMercado" class="form-control" required />
					</div>
					<div class="form-group form-sm">
						<strong><label for="lojaFisicaOnline">possui loja física e/ou online?</label></strong><br>
						<input type="radio" id="simLoja" name="LojaFisicaOnline" value="sim">
						<label for="simLoja">sim</label>
						<input type="radio" id="naoLoja" name="LojaFisicaOnline" value="não">
						<label for="naoLoja">não</label>
					</div>
					<!-- <div class="form-group form-sm">
						<strong><label for="vendeOutraMaquiagem">vende outras marcas de maquiagem?</label></strong><br>
						<input type="radio" id="simMaquiagem" name="vendeMaquiagem" value="simMaquiagem">
						<strong><label for="simMaquiagem">sim</label></strong>
						<input type="radio" id="naoMaquiagem" name="vendeMaquiagem" value="naoMaquiagem">
						<strong><label for="naoMaquiagem">não</label></strong>
						Qual: <input type="text" name="vendeMaquiagem" id="simMaquiagem" class="form-control">
					</div> -->
					<strong><label for="vendeOutraMaquiagem">vende outras marcas de maquiagem?</label></strong><br><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="sim">
						<label class="form-check-label" for="inlineRadio1">sim</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="não">
						<label class="form-check-label" for="inlineRadio2">não</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label" for="inlineRadio3">&nbsp&nbsp Qual: &nbsp</label></strong>
						<input class="form-check-input form-group" type="text" name="inlineRadioOptions2" id="inlineRadio3">
					</div>

					<div class="form-group form-sm">
						<strong><label for="localArmazenarProdutos">você possui um local para armazenar os produtos?</label></strong><br>
						<input type="radio" id="simLocal" name="localProdutos" value="sim">
						<label for="simLocal">sim</label>
						<input type="radio" id="naoLocal" name="localProdutos" value="não">
						<label for="naoLocal">não</label>
					</div>
					<div class="form-group form-sm">
						<strong><label for="vendedores">quantos vendedores internos e externos?</label></strong><br>
						<input type="text" name="vendedores" id="vendedores" class="form-control" required />
					</div>
					





					<div>
						<!-- <button type="submit" class="btn btn-dark btn-lg">Inscrever-se</button><br/><p></p> -->
						<input type="submit" value="Inscrever-se" name="inscrever-se" id="inscrever-se" class="btn btn-lg btn-purple"><br/><br/>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

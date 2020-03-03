<!DOCTYPE html>
<html lang='pt-br'>
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<style>
	* {
		font-family: 'Monteserrant Regular';
	}
	body {
		color: #9D61B0;
	}
	h1 {
		text-align: center;
		padding: 10px;
	}
	.btn-purple.disabled, .btn-purple:disabled {
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
	.btn-purple:hover {
		color: #9D61B0;
		background-color: #fff;
		border-color: #9D61B0;
	}
	.btn-purple{
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
</style>
<body>
	
	<section>
		<div class="container" id="inscricao">
			<h1><strong>Cadastre</strong> seu currículo</h1>
			<div class="col-md-6">
				<form method="POST" action="phpmailerCV.php" enctype="multipart/form-data">
					<div class="form-group form-sm">
						<strong><label for="inputNome">nome</label></strong>
						<input type="text" name="inputNome" id="inputNome" class="form-control" required autofocus />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputEmail">e-mail</label></strong>
						<input type="email" name="inputEmail" id="inputEmail" class="form-control" required />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputTelefone">telefone</label></strong>
						<input type="tel" name="inputTelefone" id="inputTelefone" maxlength="13" class="form-control" required OnKeyPress='formatar("## #####-####", this)' />
					</div>
					<div class="form-group form-sm">
						<strong><label for="areaInteresse" class="font-bold">área de interesse</label></strong>
						<select class="form-control" id="areaInteresse" name="areaInteresse">
							<option>X</option>
							<option>Y</option>
							<option>Z</option>
						</select>

					</div>
					<div class='form-group form-sm input-wrapper'>
						<strong><label for='input-file'>
							Anexe seu currículo
						</label></strong><br>
						<input id='enviarCV' name="enviarCV" type='file' value=''><br><br>
					</div>
					<div>
						<input type="submit" value="cadastrar" name="cadastrar" id="cadastrar" class="btn btn-lg btn-purple"><br/><br/>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</script>
</body>
</html><!DOCTYPE html>
<html lang='pt-br'>
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<style>
	* {
		font-family: 'Monteserrant Regular';
	}
	body {
		color: #9D61B0;
	}
	h1 {
		text-align: center;
		padding: 10px;
	}
	.btn-purple.disabled, .btn-purple:disabled {
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
	.btn-purple:hover {
		color: #9D61B0;
		background-color: #fff;
		border-color: #9D61B0;
	}
	.btn-purple{
		color: #fff;
		background-color: #9D61B0;
		border-color: #9D61B0;
	}
</style>
<body>
	
	<section>
		<div class="container" id="inscricao">
			<h1><strong>Cadastre</strong> seu currículo</h1>
			<div class="col-md-6">
				<form method="POST" action="phpmailerCV.php" enctype="multipart/form-data">
					<div class="form-group form-sm">
						<strong><label for="inputNome">nome</label></strong>
						<input type="text" name="inputNome" id="inputNome" class="form-control" required autofocus />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputEmail">e-mail</label></strong>
						<input type="email" name="inputEmail" id="inputEmail" class="form-control" required />
					</div>
					<div class="form-group form-sm">
						<strong><label for="inputTelefone">telefone</label></strong>
						<input type="tel" name="inputTelefone" id="inputTelefone" maxlength="13" class="form-control" required OnKeyPress='formatar("## #####-####", this)' />
					</div>
					<div class="form-group form-sm">
						<strong><label for="areaInteresse" class="font-bold">área de interesse</label></strong>
						<select class="form-control" id="areaInteresse" name="areaInteresse">
							<option>X</option>
							<option>Y</option>
							<option>Z</option>
						</select>

					</div>
					<div class='form-group form-sm input-wrapper'>
						<strong><label for='input-file'>
							Anexe seu currículo
						</label></strong><br>
						<input id='enviarCV' name="enviarCV" type='file' value=''><br><br>
					</div>
					<div>
						<input type="submit" value="cadastrar" name="cadastrar" id="cadastrar" class="btn btn-lg btn-purple"><br/><br/>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</script>
</body>
</html>

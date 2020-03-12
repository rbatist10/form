	<style>
		* {
			box-sizing: border-box;
			
		}
		body {
			color: #9D61B0;
		}
		.btn-purple.disabled, .btn-purple:disabled {
			color: #fff;
			background-color: #ed7f9f;
			border-color: #ed7f9f;
		}
		.btn-purple {
			color: #fff;
			background-color: #ed7f9f;
			border-color: #ed7f9f;
			padding: 4px 19px;
			margin-left: 5px;
		}
		input.inputEmail {
			width: 180px;
			height: 33px;
			border-style: none;
			margin-left: -8px;
		}
	</style>
	
	<section>
		<form action="https://www.rubyrose.com.br/newsletter/list.php" method="POST">
			<input type="email" name="email" id="email" class="form-group form-sm inputEmail">
			<input type="submit" value="cadastrar" class="btn btn-md btn-purple">
		</form>
	</section>

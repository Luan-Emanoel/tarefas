<?php include("../classes/conexao.php");
include("../includes/topo.php");?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tela de Login</title>
	</head>
	<body style="background-color: indianred;">
		<div class="container">
			<div class="row align-items-center" style="height: 100%; width: 75%; margin-left: 35%;">
				<div class="col-4 col-sm-3 col-xs-12" style="text-align: center; ">
					<form method="post"action="login.php" style=" overflow: hidden; padding: 20px 0; border: 2px solid black; border-radius: 25px; box-shadow:	2px 2px 5px 1px black;" >
						<p>
							<label class="text-white">Nome: </label>
							<input type="text" name="txtNome" required/></p>
						<p>
							<label class="text-white">Senha: </label>
							<input type="password" name="txtSenha" required/></p>
						<p>
							<input type="submit" class="btn btn-primary" name="enviar"/>
							<input type="reset" class="btn btn-secondary" name="limpar"></p>
					</form>
				</div>
			</div>
		</div>
		<?php include("../includes/rodape.php") ?>
	</body>
</html>
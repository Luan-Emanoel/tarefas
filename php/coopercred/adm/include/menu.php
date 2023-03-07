<?php
echo "<h3 class='text-white'>Menu de navegação</h3>"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta http-equiv="content-Type" content ="text/html; charset=iso 8859-1">
</head>
<body>
	<div class="row">
		<div class="col-md-2 col-sm-6">
			<div class="list-group " action="principal.php">
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="?secao=carretas">Carretas</a></button>
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="?secao=pecas">Peças</a></button>
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="?secao=banner">Banner</a></button>
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="?secao=parceiros">Parceiros</a></button>
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="../fpdf/relatorio.php">Relatório</a></button>
				<button type="button" class="list-group-item bg-secondary list-group-item-action"><a class="text-white" style="text-decoration: none;" href="logout.php">Sair</a></button>
			</div>
		</div>
	</div>
</body>
</html>

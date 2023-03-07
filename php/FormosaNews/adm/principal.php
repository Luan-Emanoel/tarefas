<?php include_once("../classes/conexao.php");
	  include_once("validarcookie.php");
	  include_once("verurl.php");
?>


<html>
	<head>
		<meta charset="utf-8"/>
		<title class="text-white">Tela principal</title>
		
	</head>
	<body style="background-color: indianred;">
		<header>
			<?php include("../includes/topo.php")?>
			<h1 class="text-white">Pagina Principal</h1>
		</header>
		<nav>
			<?php include("../includes/menu.php")?>
		</nav>
		
		<article>
			<?php
			$red =new verURL();
			$red->trocarUrl(@$_GET['secao']);
			?>

		<footer>
			<?php include("../includes/rodape.php")?>
		</footer>
	</body>
</html>
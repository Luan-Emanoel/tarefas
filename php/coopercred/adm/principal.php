<?php include_once("../classes/conexao.php");
	  include_once("validarcookie.php");
	  include_once("verurl.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="../css/bootstrap.css"/>
		<script src="../js/bootstrap.js"></script>
		<meta charset="utf-8"/>
		<title class="text-white">Tela principal</title>
		
	</head>
	<body style="background-color: SeaGreen;">
		<header>
		</header>
		<nav>
			<?php include("include/menu.php")?>
		</nav>
		<input type="hidden" name="editar" id="edit">
		<article>
			<?php
			$red =new verURL();
			$red->trocarUrl(@$_GET['secao']);
			?>
		</article>
	</body>
</html>
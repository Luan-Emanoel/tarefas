<?php include_once "verUrl.php"?>
<!DOCTYPE html>
<html lang="pt">
<meta charset="utf-8">
<head>
<title>Coopercred Implementos Rodoviarios</title>
<link rel="icon" type="image/png" sizes="32x32" href="img/ico.png">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/app.css"/>

</head>
<body>
<header>
<?php include "include/topo.php";?>
</header>
<section>
	<article>
		<?php
		$red =new verURL();
		$red->trocarUrl(@$_GET['secao']);
		?>
	</article>
</section>
<footer>
<?php include "include/rodape.php";?>
</footer>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
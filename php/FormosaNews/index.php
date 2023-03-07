<?php include("classes/conexao.php");
include_once("classes/manipuladados.php")?>

<html>
	<head>
		<?php include("includes/topo.php") ?>
		<link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
	</head>
	<body style="background-color: indigo;">
	<?php 
	$busca = new manipuladados();
	$busca->setTable("noticias");
	$resultado = $busca->getAllDataTable();
	while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
		<div class="card text-white bg-secondary mb-3" style="max-width: 45%;">
		  <div class="row g-0">
		    <div class="col-md-4">
				<img src="<?=$row['url']?>" class="img-fluid rounded-start"/>
			</div>
			 <div class="col-md-8">
			 	<div class="card-body">
				<h1 class="card-title"><?=$row['titulo'];?></h1>
				<p class="card-text">
					<?=$row['descricao'];?>
				</p>
				</div>
			</div>
		</div>
	</div>

				<br/><br/><br/><br/>
	<?php } ?>
<?php include("includes/rodape.php") ?>
	</body>
</html>
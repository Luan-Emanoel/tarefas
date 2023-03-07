<?php
	include_once("../../classes/conexao.php");
	include_once("validarcookie.php");
	include_once("../verurl.php");

$op = $_POST['botao'];
$Id = $_POST['recId'];


switch ($op) {
	case 'excluir':
		$deletar = new manipuladados();
		$deletar->setTable("noticias");
		$deletar->setFieldId("id");
		$deletar->setValueId($Id);
		$deletar->delete();
		echo '<script>alert("'.$deletar->getStatus().'");</script>';
		echo "<script>location = '../principal.php';</script>";

		break;
	
	default:
		$modif = new manipuladados();
		$modif->setTable("noticias");
		$modif->setFields("id = '$Id'");
		$resultado = $modif->getSpecific();
		?>
		<html>
		<link rel="stylesheet" href="../../css/bootstrap.css"/>
    	<script src="../../js/bootstrap.js"></script>
			<head>
				<meta charset="utf-8"/>
				<title class="text-white">Tela principal</title>
				
			</head>
			<body style="background-color: indianred;">
				<header>
					<?php include("../../includes/topo.php")?>
					<h1 class="text-white">Editar noticia</h1>
				</header>
				<nav>
					<?php include("../../includes/menu.php")?>
				</nav>
				<?php while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
					<form method="post" enctype="multipart/form-data" action="verifEdit.php" class="editar">
					  <div class="row">
							<div class="col-3">
								<label for="titulo" class="form-label text-white">Titulo</label>
								<input type="text" class="form-control text-white bg-secondary" value="<?=$row['titulo']?>" name="txtTitulo" aria-describedby="titulo">
						    </div>
					    <br/>
						</div>
						<div class="row">
						  	<div class="col-4">
						    	<label for="descricao" class="form-label text-white">Descrição</label>
						    	<textarea type="text" class="form-control text-white bg-secondary" name="txtDescricao"><?=$row['descricao']?></textarea>
							  	<input type="submit" class="btn btn-primary" name="enviar1" value="enviar"/>
								<input type="hidden" value="<?=$Id?>" name="Id">
							</div>
						</div>
					</form>
				<?php } ?>
			</body>
			<footer>
				<?php include("../../includes/rodape.php")?>
			</footer>
			</body>
		</html>
		<?php		
			}
		?>
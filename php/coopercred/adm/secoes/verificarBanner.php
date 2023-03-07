<?php include("../../classes/conexao.php");
include_once("../../classes/manipuladados.php");

$op = $_POST['botao'];
$deletarId = $_POST['recId'];


switch ($op) {
	case 'excluir':
		$deletar = new manipuladados();
		$deletar->setTable("banner");
		$deletar->setFieldId("id");
		$deletar->setValueId($deletarId);
		$deletar->delete();
		echo '<script>alert("'.$deletar->getStatus().'");</script>';
		echo "<script>location = '../principal.php';</script>";

		break;
	
	default:

		$modif = new manipuladados();
		$modif->setTable("banner");
		$modif->setFields("id = '$deletarId'");
		$resultado = $modif->getSpecific();
		?>
		<html>
		<link rel="stylesheet" href="../../css/bootstrap.css"/>
    	<script src="../../js/bootstrap.js"></script>
			<head>
				<meta charset="utf-8"/>
				<title class="text-white">modificar banner</title>
				
			</head>
			<body style="background-color: SeaGreen;">
				<nav>
					<?php include("../include/menu.php")?>
				</nav>
				<br/>
				<?php while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
					<form method="post" enctype="multipart/form-data" action="verifEditBanner.php" class="editar">
						<div class="row">
						  	<div class="col-4">
						    	<div class="row g-0">
							       	<div class="mb-3 ms-0 form-check">
									    <label for="descricao" class="form-label text-white">Enviar arquivo</label>
									    <input type="file" class="form-control text-white bg-secondary" name="arquivo">
									</div>	
							  	<input type="submit" class="btn btn-primary" name="enviar1" value="enviar"/>
								<input type="hidden" value="<?=$deletarId?>" name="Id">
							</div>
						</div>
					</form>
				<?php } ?>
		</html>
		<?php		
			}
		?>
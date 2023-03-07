<?php include("../../classes/conexao.php");
include_once("../../classes/manipuladados.php");

$op = $_POST['botao'];
$deletarId = $_POST['recId'];


switch ($op) {
	case 'excluir':
		$deletar = new manipuladados();
		$deletar->setTable("produtos");
		$deletar->setFieldId("cod");
		$deletar->setValueId($deletarId);
		$deletar->delete();
		echo '<script>alert("'.$deletar->getStatus().'");</script>';
		echo "<script>location = '../principal.php';</script>";

		break;
	
	default:
		
		$modif = new manipuladados();
		$modif->setTable("produtos");
		$modif->setFields("cod = '$deletarId'");
		$resultado = $modif->getSpecific();
		?>
		<html>
		<link rel="stylesheet" href="../../css/bootstrap.css"/>
    	<script src="../../js/bootstrap.js"></script>
			<head>
				<meta charset="utf-8"/>
				<title class="text-white">modificar parceiros</title>
				
			</head>
			<body style="background-color: SeaGreen;">
				<nav>
					<?php include("../include/menu.php")?>
				</nav>
				<br/>
				<?php while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
					<form method="post" enctype="multipart/form-data" action="verifEditProdutos.php" class="editar">
						
						<div class="row">
						  	<div class="col-3">
								<label for="titulo" class="form-label text-white">Nome</label>
								<input type="text" class="form-control text-white bg-secondary" value="<?=$row['nome']?>" name="txtnome" aria-describedby="titulo">
						    </div>
					    <br/>
						</div>
						<div class="row">
						  	<div class="col-3">
								<label for="titulo" class="form-label text-white">preço</label>
								<input type="text" class="form-control text-white bg-secondary" value="<?=$row['preco']?>" name="txtpreco" aria-describedby="titulo">
						    </div>
					    <br/>
						</div>
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
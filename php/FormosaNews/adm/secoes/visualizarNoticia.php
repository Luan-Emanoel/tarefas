<?php
include_once("../classes/manipuladados.php");
	echo"<h1 class='text-white'>Editar notícia<h1>";
	
	$busca = new manipuladados();
	$busca->setTable("noticias");
	$resultado = $busca->getAllDataTable();


	while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
		<form method="post" action="secoes/verificar.php">
		<div class="card text-white bg-secondary mb-3" style="max-width: 60%; max-height: 400px; overflow: auto;">
		  <div class="row g-0">
		    <div class="col-md-4">
				<img src="<?='../'.$row['url']?>" class="img-fluid rounded-start"/>
			</div>
			 <div class="col-md-8">
			 	<div class="card-body">
				<h1 class="card-title" style='font-size: 42px;'><?=$row['titulo'];?></h1>
				<p class="card-text" style="font-size: 28px;">
					<?=$row['descricao'];?>
				</p>
				
				</div>
			</div>
		</div>
	</div>
	<div>

	<input type="hidden" name="recId" value="<?=$row['id'];?>">
	<button type="submit" style="display: inline-block;" class="list-group-item bg-primary text-white" name="botao" value="editar">Editar</button>
	<button type="submit" style="display: inline-block;" class="list-group-item bg-danger text-white" name="botao" value="excluir">Deletar</button>
</div>
</form>
				<br/><br/><br/><br/>
	<?php } ?>

	

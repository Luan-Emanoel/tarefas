<form method="post" enctype="multipart/form-data" action="secoes/cadastrarBanner.php" class="login">
	<div class="row">
		<div class="col-4">
			<div class="mb-3 ms-0 form-check">
			    <label for="descricao" class="form-label text-white">Enviar arquivo</label>
			    <input type="file" class="form-control text-white bg-secondary" name="arquivo">
			</div>
			<input type="submit" class="btn btn-primary" value="enviar"/>
			<input type="reset" class="btn btn-secondary" value="limpar"/>
		</div>
	</div>
</form>
<?php
  
  $busca = new manipuladados();
 	$busca->setTable("banner");
	$resultado = $busca->getAllDataTable();


  while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
    <form method="post" action="secoes/verificarBanner.php">
    <div class="card text-white bg-secondary mb-3" style="max-width: 60%; max-height: 400px; overflow: auto;">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="<?='../'.$row['url']?>" class="img-fluid rounded-start"/>
      </div>
       <div class="col-md-8">
        <div class="card-body">
        
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
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8">
	<title></title>

</head>
<body>
<h1 class="text-white">Cadastrar Peças</h1>

<form method="post" enctype="multipart/form-data" action="secoes/cadastrarPecas.php" class="login">
  <div class="row">
  <div class="col-3">
    <label for="titulo" class="form-label text-white">Nome</label>
    <input type="text" class="form-control text-white bg-secondary" name="txtNome" aria-describedby="titulo">
  </div>
  <br/>
  <label for="descricao" class="form-label text-white">Preço</label>
</div> 
<div class="row"> 
   <div class="col-md-4" style="display: flex;">
        <label class="text-white me-2">R$ </label>
        <input type="text" class="form-control text-white bg-secondary" name="txtPreco" aria-describedby="preco">
   </div>
 </div>
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
</div>
<?php
  
  $busca = new manipuladados();
  $resultado = $busca->getPecas();


  while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
    <form method="post" action="secoes/verificarProdutos.php">
    <div class="card text-white bg-secondary mb-3" style="max-width: 60%; max-height: 400px; overflow: auto;">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="<?='../'.$row['url']?>" class="img-fluid rounded-start"/>
      </div>
       <div class="col-md-8">
        <div class="card-body">
        <h1 class="card-title" style='font-size: 42px;'><?=$row['nome'];?></h1>
        <p class="card-text" style="font-size: 28px;">
          <?=$row['preco'];?>
        </p>
        
        </div>
      </div>
    </div>
  </div>
  <div>

  <input type="hidden" name="recId" value="<?=$row['cod'];?>">
  <button type="submit" style="display: inline-block;" class="list-group-item bg-primary text-white" name="botao" value="editar">Editar</button>
  <button type="submit" style="display: inline-block;" class="list-group-item bg-danger text-white" name="botao" value="excluir">Deletar</button>
</div>
</form>
        <br/><br/><br/><br/>
  <?php } ?>
</body>
</html>
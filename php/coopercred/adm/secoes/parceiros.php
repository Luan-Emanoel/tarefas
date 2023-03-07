<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8">
	<title></title>

</head>
<body>
<h1 class="text-white">Cadastrar Parceiros</h1>

<form method="post" enctype="multipart/form-data" action="secoes/cadastrarParceiros.php" class="login">
  <div class="row">
  <div class="col-4">
    <label for="titulo" class="form-label text-white">Nome</label>
    <input type="text" class="form-control text-white bg-secondary" name="txtNome" aria-describedby="titulo">
  <label for="descricao" class="form-label text-white">Endereço</label>
  <input type="text" class="form-control text-white bg-secondary" name="txtEndereco" aria-describedby="titulo">
  <label for="descricao" class="form-label text-white">Telefone</label>
  <input type="text" class="form-control text-white bg-secondary" name="txtTelefone" aria-describedby="titulo">
      <div class="mb-3 ms-0 form-check">
      	<label for="descricao" class="form-label text-white">Enviar arquivo</label>
        <input type="file" class="form-control text-white bg-secondary" name="arquivo">
      </div>
      <input type="submit" class="btn btn-primary" value="enviar"/>
  </div>
</form>
</div>
<?php
  
  $busca = new manipuladados();
  $busca->setTable("parceiros");
  $resultado = $busca->getAllDataTable();


  while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
    <form method="post" action="secoes/verificarParceiros.php">
    <div class="card text-white bg-secondary mb-3" style="max-width: 60%; max-height: 400px; overflow: auto;">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="<?='../'.$row['url']?>" class="img-fluid rounded-start"/>
      </div>
      <div class="col-md-8">
        <div class="card-body">
        <h3 class="card-title" style='font-size: 28px;'><?=$row['nome'];?></h3>
        <h3 class="card-text" style='font-size: 18px;'><?=$row['endereco'];?></h3>
        <p class="card-text" style="font-size: 18px;">
          <?=$row['telefone'];?>
        </p>
        
        </div>
      </div>
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
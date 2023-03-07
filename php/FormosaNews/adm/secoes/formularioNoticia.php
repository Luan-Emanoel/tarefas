<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8">
	<title></title>

</head>
<body>
<h1 class="text-white">Formulário de noticias</h1>

<form method="post" enctype="multipart/form-data" action="secoes/cadastrarNoticia.php" class="login">
  <div class="row">
  <div class="col-3">
    <label for="titulo" class="form-label text-white">Titulo</label>
    <input type="text" class="form-control text-white bg-secondary" placeholder="De um titulo para a sua noticia" name="txtTitulo" aria-describedby="titulo">
  </div>
  <br/>
</div>
<div class="row">
  <div class="col-4">
    <label for="descricao" class="form-label text-white">Descrição</label>
    <textarea type="text" placeholder="De uma descrição para a sua noticia" class="form-control text-white bg-secondary" name="txtDescricao"></textarea>
  <div class="mb-3 form-check">
  	<label for="descricao" class="form-label text-white">Enviar arquivo</label>
    <input type="file" class="form-control text-white bg-secondary" name="arquivo">
  </div>
  <input type="submit" class="btn btn-primary" value="enviar"/>
  <input type="reset" class="btn btn-secondary" value="limpar"/>
</div>
</div>
</form>
</body>
</html>
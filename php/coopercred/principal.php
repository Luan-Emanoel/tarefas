<?php    include_once("classes/manipuladados.php");?>
<!DOCTYPE html>
<html lang="pt">
<meta charset="utf-8">
<head>
<title>Coopercred Implementos Rodoviarios</title>
<link rel="icon" type="image/png" sizes="32x32" href="img/ico.png">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/app.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>

<body>
<aside>
	
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.png" class="d-block w-100" alt="...">
    </div>

    <?php 
                $busca = new manipuladados();
                $busca->setTable("banner");
                $resultado = $busca->getAllDataTable();
                while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>

        <div class="carousel-item">
          <img src="<?=$row['url']?>" class="d-block w-100" alt="...">
        </div>
        <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</aside>


<section class="container">
	<div class="row">
		<center>
			<h2 style="font-style: italic;">Conheça Nossos <span style="color: green;">Produtos</span></h2>
			<h3>Carretas | Peças</h3>
			<button class="btn redondo btn-success">ESTOQUE COMPLETO</button>
		</center>
	</div>
	<div class="row justify-content-between">
		<article class="col-lg-3 col-md-5 col-sm-12">
			<p>Carreta 1</p>
			<p>
				<img src="img/carreta1.jpg">
			</p>
		</article>
		<article class="col-lg-3 col-md-5 col-sm-12">
			<p>Carreta 2</p>
			<p>
				<img src="img/carreta2.jpg">
			</p>
		</article>
		<article class="col-lg-3 col-md-5 col-sm-12">
			<p>Carreta 3</p>
			<p>
				<img src="img/carreta3.jpg">
			</p>
		</article>
	</div>
</section>
<section class="container" >
	<div class="row justify-content-between" >

<article class="col-lg-6 col-sm-12" >
	<h3>
		Sobre A Coopercred Implementos
	</h3>
	<p>
		Somos a CooperCred Implementos Rodoviários, uma empresa que, assim como você, é apaixonada pela estrada! Especializados na revenda de carretas e peças, nós estamos localizados em Patos de Minas/MG e atuamos em todo o Brasil. Prezamos muito pela qualidade dos nosso produtos, serviço e pela excelência no atendimento, buscando sempre uma relação de confiança, parceria e amizade com nossos clientes, pelos quais temos muito orgulho e admiração. Trabalhamos com o comércio de implementos rodoviários de todas as marcas e modelos, como graneleiras, basculantes, bitrens, bi-caçambas, baús, siders e rodotrens. Além de grande variedade em peças para sua carreta, com a representação de grandes marcas, como Braslux, Vinilona Sansuy, Suspensys, Fras-le e muito mais! Não deixe de conferir o nosso estoque. Que esse seja o primeiro passo para uma parceria de sucesso. Aguardamos o seu contato!
	</p>
</article>
<figure class="col-lg-6 d-none d-lg-block" >
<img src="img/sobre.jpg" style="width: 80%">
</figure>
	</div>
</section>
<br><br><br><br><br>


</body>

</html>
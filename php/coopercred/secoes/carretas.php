<?php
   include_once("classes/manipuladados.php");
?>

<!DOCTYPE html>
<html lang="pt">
<meta charset="utf-8">


<body>

<section class="container">
	 <div class="row justify-content-md-center">
	 	<?php 
				$busca = new manipuladados();
				$resultado = $busca->getCarreta();
				while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>
		<div class="col-md-5 col-sm-12 col-lg-4">
			
			<div class="card" style="width: 18rem;">
			  <img src="<?=$row['url']?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title" style="text-align: center;"><?=$row['nome'];?></h5>
			    <h3 class="card-text" style="color: green; text-align: center;">R$<?=$row['preco'];?></h3>
			  </div>
			</div>
				
	

		</div>	
		<?php } ?>
	</div>
</section>
<br/><br/><br/><br/><br/><br/>
<div class="row justify-content-md-center container">
		<div class="col-lg-4"></div>
		<div class="col-lg-8">
			<div class="row  justify-content-md-center container" style="background-color: seagreen; height: 100px; text-align: center;">
				<div class="col-md-10">
					  <div class="text-white">
					 <div style="padding: 40px 0;" ><h3 style="font-weight: bold; padding: 0; border-radius: 0;">VEJA TAMBÉM NOSSO ESTOQUE DE PEÇAS</h3> </div> </div>
				</div>
				<div class="col-md-2">
					<div style="padding: 40px 0;">
					<button type="button" onclick="location.href='?secao=pecas';" class="btn btn-outline-light" >Ver Peças</button>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
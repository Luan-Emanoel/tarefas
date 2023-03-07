<?php
   include_once("classes/manipuladados.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

<section class="container">
    <h2 style="font-style: italic;" class="text-center mt-5">Nossos <span style="color: green;">Parceiros</span></h2>
  </section>

<section class="container">
     <div class="row justify-content-between mt-5">
        <?php 
                $busca = new manipuladados();
                $busca->setTable("parceiros");
                $resultado = $busca->getAllDataTable();
                while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){?>

        <div class="col-lg-4 col-md-6 col-sm-12">
            

              <img src="<?=$row['url']?>" class="card-img-top" alt="..." style="width: 200px; height: auto;  display: block; margin-left: auto; margin-right: auto;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?=$row['nome'];?></h5>
                <h3 class="card-text" style="color: gray; text-align: center; font-size: 15px"><?=$row['endereco'];?></h3>
                <h3 class="card-text" style="color: gray; text-align: center; font-size: 15px"><?=$row['telefone'];?></h3>
              </div>

                
    

        </div>  
        <?php } ?>
    </div>
</section>

</body>
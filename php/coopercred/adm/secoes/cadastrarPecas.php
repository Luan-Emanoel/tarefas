<?php
include_once("../../classes/manipuladados.php");
function converte($String){
	return iconv("UTF-8", "ISO8859-1", $String);
}
$nome = $_POST['txtNome'];
$preco = $_POST['txtPreco'];

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco= "imgbanco/".$nomearquivosalvo;
$urllocalsalvo = "../../imgbanco/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

$cadastra = new manipuladados();
$cadastra->setTable("produtos");
$cadastra->setFields("tipo, nome, preco, url");
$cadastra->setDados("'P', '$nome', '$preco', '$urlbanco'");
$cadastra->insert();
echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../principal.php';</script>";
?>
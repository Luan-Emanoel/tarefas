<?php
include_once("../../classes/manipuladados.php");
function converte($String){
	return iconv("UTF-8", "ISO8859-1", $String);
}
$nome = $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco= "imgbanco/".$nomearquivosalvo;
$urllocalsalvo = "../../imgbanco/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

$cadastra = new manipuladados();
$cadastra->setTable("parceiros");
$cadastra->setFields("endereco, nome, telefone, url");
$cadastra->setDados("'$endereco', '$nome', '$telefone', '$urlbanco'");
$cadastra->insert();
echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../principal.php';</script>";
?>
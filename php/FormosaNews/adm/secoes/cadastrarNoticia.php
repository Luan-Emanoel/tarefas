<?php
include_once("../../classes/manipuladados.php");
function converte($String){
	return iconv("UTF-8", "ISO8859-1", $String);
}
$titulo = $_POST['txtTitulo'];
$descricao = $_POST['txtDescricao'];

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco= "imgnoticias/".$nomearquivosalvo;
$urllocalsalvo = "../../imgnoticias/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

//echo '<script>alert("O seu certificado foi enviado");</script>';
//echo "Titulo ".$titulo."<br/>Descricao: ".$descricao."<br/>URL: ".$urlbanco;

$cadastra = new manipuladados();
$cadastra->setTable("noticias");
$cadastra->setFields("titulo, descricao, url");
$cadastra->setDados("'$titulo', '$descricao', '$urlbanco'");
$cadastra->insert();
echo '<script>alert("'.$cadastra->getStatus().'");</script>';
echo "<script>location = '../principal.php';</script>";
?>
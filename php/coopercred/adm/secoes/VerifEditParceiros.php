<?php
	include_once("../../classes/conexao.php");
	include_once("validarcookies.php");
	include_once("../verurl.php");
	function converte($String){
	return iconv("UTF-8", "ISO8859-1", $String);
}

		$Id = $_POST['Id'];
		$nome = $_POST['txtnome'];
		$endereco = $_POST['txtendereco'];
		$telefone = $_POST['txttelefone'];

		$editar = new manipuladados();
		$editar->setTable("parceiros");
		$editar->setFieldId("cod");
		$editar->setValueId($Id);
		$nomearquivosalvo = converte($_FILES['arquivo']['name']);
		$urlbanco= "imgbanco/".$nomearquivosalvo;
		$urllocalsalvo = "../../imgbanco/".$nomearquivosalvo;
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
		$editar->setFields("endereco='$endereco', nome='$nome',telefone='$telefone' , url='$urlbanco'");
		$editar->update();
		echo '<script>alert("'.$editar->getStatus().'");</script>';
		echo "<script>location = '../principal.php';</script>";
	?>
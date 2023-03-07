<?php
	include_once("../../classes/conexao.php");
	include_once("validarcookie.php");
	include_once("../verurl.php");
	function converte($String){
	return iconv("UTF-8", "ISO8859-1", $String);
}

		$Id = $_POST['Id'];
		$titulo = $_POST['txtTitulo'];
		$descricao = $_POST['txtDescricao'];

		$editar = new manipuladados();
		$editar->setTable("noticias");
		$editar->setFieldId("id");
		$editar->setValueId($Id);
		$nomearquivosalvo = converte($_FILES['arquivo']['name']);
		$urlbanco= "imgnoticias/".$nomearquivosalvo;
		$urllocalsalvo = "../../imgnoticias/".$nomearquivosalvo;
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
		$editar->setFields("titulo='$titulo', descricao='$descricao', url='$urlbanco'");
		$editar->update();
		echo '<script>alert("'.$editar->getStatus().'");</script>';
		echo "<script>location = '../principal.php';</script>";
	?>
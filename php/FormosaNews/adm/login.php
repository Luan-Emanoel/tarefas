<?php
include_once("../classes/manipuladados.php");
$manipula = new manipuladados();
$login = $_POST['txtNome'];
$password = $_POST['txtSenha'];
$linhas = $manipula->validarLogin($login,$password);

if ($linhas == 0){
	echo '<script>alert("Usuário ou Senha do Adm não cadastrado ou incorreto(s)");</script>';
	echo "<script>location = 'index.php';</script>";
}else{
	setcookie("nome_usuario", $login);
	setcookie("senha_usuario", $password);
	header("location:principal.php");
}
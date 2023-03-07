<?php
include_once("conexao.php");
class manipuladados extends conexao{

protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId;
public function setTable($t){
	$this->table = $t;
}
public function setFields($f){
	$this->fields=$f;
}
public function setDados($d){
	$this->dados = $d;
}
public function getStatus(){
	return $this->status;
}

public function setFieldId($fid){
	$this->fieldId = $fid;
}
public function setValueId($vid){
	$this->valueId = $vid;
}



public function insert(){
	$this-> sql = "INSERT INTO $this->table($this->fields) VALUES($this->dados)";
	if(self::execSQL($this->sql)){
		$this->status= "Cadastro com Sucesso!!!";
	}else{
		$this->status = "Erro ao cadastrar".mysqli_error();
	}

}
public function update(){
	$this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId='$this->valueId'";
	if(self::execSQL($this->sql)){
		$this->status= "Alterado com Sucesso!!!";
	}else{
		$this->status = "Erro ao alterar a tabela ".$this->table ." ".mysqli_error();
	}
}

public function delete(){
	$this->sql = "DELETE FROM $this->table WHERE $this->fieldId='$this->valueId'";
	if(self::execSQL($this->sql)){
		$this->status= "Deletado com Sucesso!";
	}else{
		$this->status = "Erro ao deletar tabela ".$this->tablej." ".mysqli_error();
	}
}

public function getAllDataTable(){
	$this->sql = "SELECT * FROM $this->table";
	$this->qr = self::execSQL($this->sql);
	return $this->qr;
}

public function getSpecific(){
	$this->sql = "SELECT * FROM $this->table WHERE $this->fields";
	$this->qr = self::execSQL($this->sql);
	return $this->qr;
}


public function validarLogin($login, $password)
{
	$this->sql = "SELECT * FROM adm WHERE usuario = '$login' and senha = '$password'";
	$this->qr = self::execSQL($this->sql);
	$linhas = @mysqli_num_rows($this->qr);
	return $linhas;
}
public function getCarreta()
{
	$this->sql = "SELECT * FROM produtos WHERE tipo = 'C'";
	$this->qr = self::execSQL($this->sql);
	return $this->qr;
}
public function getPecas()
{
	$this->sql = "SELECT * FROM produtos WHERE tipo = 'P'";
	$this->qr = self::execSQL($this->sql);
	return $this->qr;
}


}
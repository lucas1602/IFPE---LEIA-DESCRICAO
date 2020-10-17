<?php

Class Assunto {
	private $pdo;
	public $msgErro="";

	public function conectar($dbnome, $host, $usuario, $senha)
	{
		global $pdo;
		global $msgErro;
		try
		{
			$pdo = new PDO("mysql:dbname=".$dbnome.";host=".$host.';charset=utf8',$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro - $e->getMessage();
		}
	}


	public function novaquestao($titulo, $descricao)
	{
		global $pdo;
		#verifica se existe assunto
		$sql = $pdo->prepare("SELECT id FROM assuntos WHERE titulo=:t");
		$sql->bindValue(":t", $titulo);
		$sql->execute();

		if($sql->rowCount()>0)
		{
			return false; #tem cadastro
		}
		else
		{
			$sql = $pdo->prepare("INSERT INTO assuntos (titulo, descricao, alternativa) VALUES (:t, :d, :a)");
			$sql->bindValue(":t", $titulo);
			$sql->bindValue(":d", $descricao);
			$sql->bindValue(":a", "X");
			$sql->execute();
			return true;
		}

	}
}

?>
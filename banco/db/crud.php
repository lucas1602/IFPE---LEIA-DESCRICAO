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

	public function ler($id)
	{
		global $pdo;
		global $msgErro;

		$sql= $pdo->prepare("SELECT * FROM assuntos WHERE id=:i");
		$sql->bindValue(":i", $id);
		$sql->execute();
		if($sql->rowCount()>0)
		{
			$dados = $sql->fetch();
			return $dados;
		}
		else
		{
			return [];
		}
	}


	public function lerassunto($id)
	{
		global $pdo;
		global $msgErro;

		$sql= $pdo->prepare("SELECT * FROM assuntos1 WHERE id=:i");
		$sql->bindValue(":i", $id);
		$sql->execute();
		if($sql->rowCount()>0)
		{
			$dados = $sql->fetch();
			return $dados;
		}
		else
		{
			return [];
		}
	}

	public function novaquestao($titulo, $descricao, $correta, $errada1, $errada2, $errada3)
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
			$sql = $pdo->prepare("INSERT INTO assuntos (titulo, descricao, correta, errada1, errada2, errada3) VALUES (:t, :d, :c, :e1, :e2, :e3)");
			$sql->bindValue(":t", $titulo);
			$sql->bindValue(":d", $descricao);
			$sql->bindValue(":c", $correta);
			$sql->bindValue(":e1", $errada1);
			$sql->bindValue(":e2", $errada2);
			$sql->bindValue(":e3", $errada3);
			$sql->execute();
			return true;
		}
	}

	public function novoassunto($titulo, $descricao, $imagem, $pagina)
	{
		global $pdo;
		#verifica se existe assunto
		$sql = $pdo->prepare("SELECT id FROM assuntos1 WHERE titulo=:t");
		$sql->bindValue(":t", $titulo);
		$sql->execute();

		if($sql->rowCount()>0)
		{
			return false; #tem cadastro
		}
		else
		{
			$sql = $pdo->prepare("INSERT INTO assuntos1 (titulo, descricao, imagem, pagina) VALUES (:t, :d, :i, :p)");
			$sql->bindValue(":t", $titulo);
			$sql->bindValue(":d", $descricao);
			$sql->bindValue(":i", $imagem);
			$sql->bindValue(":p", $pagina);
			$sql->execute();
			return true;
		}
	}

}

?>
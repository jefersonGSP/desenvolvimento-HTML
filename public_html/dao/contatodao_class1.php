<?php
require '../persistence/conexaobanco_class.php';


class ComprarDao{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }
    public function destruct()
    {   
    }
    public function Comprar($c)
    {
        try {
            $stat = $this->conexao->prepare("INSERT INTO comprar001(cpf,nome,localizacao)VALUES (?,?,?)");
            $stat->bindValue(1, $c->getCpf());
            $stat->bindValue(2, $c->getNome());
            $stat->bindValue(3, $c->getLocalizacao());
            $stat->execute();
        } catch (PDOException $e) {
            echo "Erro ao comprar" . $e;
        }
    }

    public function buscarComprar()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM comprar001");
            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, "comprar001");
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar comprar" . $e;
        }
    }

   /* public function Comprou($comprou)
    {
        try {
            $stat = $this->conexao->prepare("INSERT INTO comprou001(cod)VALUES (?)");
            $stat->bindValue(1, $comprou->cpf);

            $stat->execute();
        } catch (PDOException $e) {
            echo "comprou Erro" . $e;
        }
    }

    public function buscarComprou()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM comprou001");
            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, "comprou001");
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar comprou" . $e;
        }
    }*/
}
?>

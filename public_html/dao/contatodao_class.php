<?php
require '../persistence/conexaobanco_class.php';


class CadastroDao{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }
    public function destruct()
    {   
    }
    public function Cadastro($c)
    {
        try {
            $stat = $this->conexao->prepare('INSERT INTO cadastro(cpf,email,senha) VALUES (?,?,?)');
            $stat->bindValue (1, $c->getCpf());
            $stat->bindValue(2, $c->getEmail());
            $stat->bindValue(3, $c->getSenha());
            $stat->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar" . $e;
        }
    }
    public function buscarCadastro()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM cadastro");
            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, "cadastro");
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar cadastro" . $e;
        }
    }
   

/* public function Cadastrou($c2)
    {
        try {
            $stat = $this->conexao->prepare("INSERT INTO cadastrou(id)VALUES (?)");
            $stat->bindValue(1, $c2->id);
            $stat->execute();
        } catch (PDOException $e) {
            echo "Erro no id" . $e;
        }
    }
    public function buscarCadastrou()
    {
        try {
            $stat = $this->conexao->query("SELECT * FROM cadastrou");
            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS, "cadastrou");
            $this->conexao = null;
            return $array;
        } catch (PDOException $e) {
            echo "Erro ao buscar id" . $e;
        }
    }*/





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

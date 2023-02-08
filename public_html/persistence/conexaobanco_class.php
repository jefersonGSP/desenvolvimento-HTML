<?php
class ConexaoBanco extends PDO
{




    public static $instance = null;

    public function __construct($dns, $user, $pass)
    {
        parent::__construct($dns, $user, $pass);
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new ConexaoBanco("mysql:dbname=shop_rataria;host=localhost","root","");
            } catch (PDOException $e) {
                echo "Erro ao conectar" . $e;
            }
        }
        return self::$instance;
    }
}

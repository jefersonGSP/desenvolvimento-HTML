<?php
class Comprar
{
    private $cpf;
    private $nome;
    private $localizacao;

    public  function Comprar($cpf, $nome, $localizacao)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->localizacao = $localizacao;
    }
    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }


    public function setNome($nome)
    {
        return $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }


    public function setLocalizacao($localizacao)
    {
        return $this->localizacao = $localizacao;
    }
    public function getLocalizacao()
    {
        return $this->localizacao;
    }


    public function toString()
    {

        return "<hr> CPF: " . $this->cpf .
            "<hr> Nome: " . $this->nome .
            "<hr>Localização: " . $this->localizacao
            . "<hr><h4>Compra feita com sucesso!</h4>";
    }
}

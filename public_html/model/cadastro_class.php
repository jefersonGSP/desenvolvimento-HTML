<?php
class Cadastro
{
    private $cpf;
    private $email;
    private $senha;

    public  function Cadastro($cpf, $email, $senha)
    {
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function setCpf($cpf)
    {
        return $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }


    public function setEmail($email)
    {
        return $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }


    public function setSenha($senha)
    {
        return $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }


    public function toString()
    {

        return "<hr> CPF: " . $this->cpf .
            "<hr> Email: " . $this->email .
            "<hr> Senha: " . $this->senha
            . "<hr><h4>Você foi cadastrado com sucesso!</h4>";
    }
}

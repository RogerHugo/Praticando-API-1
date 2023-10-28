<?php
class Pessoa{
    public $id;
    public $nome;
    public $data_nascimento;
    public $altura;
    public $nacionalidade;
    public $sexo;

    public function __construct($id, $nome, $data_nascimento, $altura, $nacionalidade, $sexo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->altura = $altura;
        $this->nacionalidade = $nacionalidade;
        $this->sexo = $sexo;
    }
}
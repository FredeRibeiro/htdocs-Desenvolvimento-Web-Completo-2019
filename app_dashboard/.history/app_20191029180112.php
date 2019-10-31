<?php

class Dashboard
{
    public $data_inicio;
    public $data_fim;
    public $numeroVendas;
    public $totalVendas;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }
}

class Conexao
{
    private $host = 'locahost';
    private $dbname = 'dashboard';
    private $user = 'root';
    private $senha = '';

    public function conectar(){
        try {
            
        } catch (\Throwable $th) {
            echo
                }
    }

}


<?php
/**
  * summary
  */
 class Pessoa
 {
     /**
      * summary
      */
     public function __construct()
     {
         echo 'Objeto Iniciado';
         $this->nome = $nome;
     }

     public function __destruct(){
     	echo 'Objeto Removido';
     }

     public function __get($atributo){
     	return $this->$atributo;
     }

     public function correr()
     {
     	return $this->__get('nome').'está correndo';
     	
     }
 } 

 $pessoa = new Pessoa('Jorge');
 echo '<br> Nome: '.pessoa->__get('nome');
 echo '<br>'.pessoa->correr();
 echo '<br>';
 ?>
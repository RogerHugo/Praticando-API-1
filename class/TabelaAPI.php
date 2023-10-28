<?php
include "Pessoa.php";

class TabelaAPI
 {
   private $conn;
   private $tabela;
   private $instancias = array();

   public function __construct($conn,$tabela)
   {
      $this->conn = $conn;
      $this->tabela = $tabela;
      $this->PegaDadosBD(); 
   }

   public function PegaDadosBD()
   {
      $sql = "select * from $this->tabela;";
      $query = mysqli_query($this->conn, $sql);
      
      while($row = mysqli_fetch_assoc($query))
      {
         $id = $row['id'];
         $nome = $row['nome'];
         $data_nascimento = $row['data_nascimento'];
         $altura = $row['altura'];
         $nacionalidade = $row['nacionalidade'];
         $sexo = $row['sexo'];

         $instancia = new Pessoa($id, $nome, $data_nascimento, $altura, $nacionalidade, $sexo);
         $this->instancias[] = $instancia;
      }
   }
   public function GetAllInstancias()
   {
         return $this->instancias;
   }

}
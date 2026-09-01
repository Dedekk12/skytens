<?php
class Poder
{
   private int $id_poder;
   private string $nome_poder;
   private int $custo;
   private int $tempo_espera;
   private string $descricao;
   private string $duracao;
   private int $id_raca;

   function getId_poder(): int
   {
      return $this->id_poder;
   }
   function setId_poder($arg)
   {
      $this->id_poder = $arg;
   }
   function getNome_poder(): string
   {
      return $this->nome_poder;
   }
   function setNome_poder($arg)
   {
      $this->nome_poder = $arg;
   }
   function getCusto(): int
   {
      return $this->custo;
   }
   function setCusto($arg)
   {
      $this->custo = $arg;
   }
   function getTempo_espera(): int
   {
      return $this->tempo_espera;
   }
   function setTempo_espera($arg)
   {
      $this->tempo_espera = $arg;
   }
   function getDescricao(): string
   {
      return $this->descricao;
   }
   function setDescricao($arg)
   {
      $this->descricao = $arg;
   }
   function getDuracao(): string
   {
      return $this->duracao;
   }
   function setDuracao($arg)
   {
      $this->duracao = $arg;
   }
   function getId_raca(): int
   {
      return $this->id_raca;
   }
   function setId_raca($arg)
   {
      $this->id_raca = $arg;
   }

   function __toString()
   {
      return  "nome_poder :" . $this->nome_poder . "<br>" .
         "custo :" . $this->custo . "<br>" .
         "tempo_espera :" . $this->tempo_espera . "<br>" .
         "descricao :" . $this->descricao . "<br>" .
         "duracao :" . $this->duracao . "<br>" .
         "id_raca :" . $this->id_raca . "<br>";
   }
}

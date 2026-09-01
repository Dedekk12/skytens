<?php
class Raca
{
   private int $id_raca;
   private int $nome_raca;
   private string $habilidade;
   private string $bonus_incial;

   function getId_raca(): int
   {
      return $this->id_raca;
   }
   function setId_raca($arg)
   {
      $this->id_raca = $arg;
   }
   function getNome_raca(): int
   {
      return $this->nome_raca;
   }
   function setNome_raca($arg)
   {
      $this->nome_raca = $arg;
   }
   function getHabilidade(): string
   {
      return $this->habilidade;
   }
   function setHabilidade($arg)
   {
      $this->habilidade = $arg;
   }
   function getBonus_incial(): string
   {
      return $this->bonus_incial;
   }
   function setBonus_incial($arg)
   {
      $this->bonus_incial = $arg;
   }

   function __toString()
   {
      return  "nome_raca :" . $this->nome_raca . "<br>" .
         "habilidade :" . $this->habilidade . "<br>" .
         "bonus_incial :" . $this->bonus_incial . "<br>";
   }
}

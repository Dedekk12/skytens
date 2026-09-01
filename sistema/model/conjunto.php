<?php
class Conjunto
{
   private int $id_conjunto;
   private string $nome_conjunto;
   private string $armadura;
   private string $arma;
   private string $pocao;

   function getId_conjunto(): int
   {
      return $this->id_conjunto;
   }
   function setId_conjunto($arg)
   {
      $this->id_conjunto = $arg;
   }
   function getNome_conjunto(): string
   {
      return $this->nome_conjunto;
   }
   function setNome_conjunto($arg)
   {
      $this->nome_conjunto = $arg;
   }
   function getArmadura(): string
   {
      return $this->armadura;
   }
   function setArmadura($arg)
   {
      $this->armadura = $arg;
   }
   function getArma(): string
   {
      return $this->arma;
   }
   function setArma($arg)
   {
      $this->arma = $arg;
   }
   function getPocao(): string
   {
      return $this->pocao;
   }
   function setPocao($arg)
   {
      $this->pocao = $arg;
   }

   function __toString()
   {
      return  "nome_conjunto :" . $this->nome_conjunto . "<br>" .
         "armadura :" . $this->armadura . "<br>" .
         "arma :" . $this->arma . "<br>" .
         "pocao :" . $this->pocao . "<br>";
   }
}

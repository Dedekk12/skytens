<?php
class Personagem
{
   private int $id_personagem;
   private string $nome;
   private float $fisico;
   private float $mental;
   private string $genero;
   private float $vigor;
   private float $mana;
   private int $id_conjunto;
   private int $id_poder;
   private int $id_raca;

   function getId_personagem(): int
   {
      return $this->id_personagem;
   }
   function setId_personagem($arg)
   {
      $this->id_personagem = $arg;
   }
   function getNome(): string
   {
      return $this->nome;
   }
   function setNome($arg)
   {
      $this->nome = $arg;
   }
   function getFisico(): float
   {
      return $this->fisico;
   }
   function setFisico($arg)
   {
      $this->fisico = $arg;
   }
   function getMental(): float
   {
      return $this->mental;
   }
   function setMental($arg)
   {
      $this->mental = $arg;
   }
   function getGenero(): string
   {
      return $this->genero;
   }
   function setGenero($arg)
   {
      $this->genero = $arg;
   }
   function getVigor(): float
   {
      return $this->vigor;
   }
   function setVigor($arg)
   {
      $this->vigor = $arg;
   }
   function getMana(): float
   {
      return $this->mana;
   }
   function setMana($arg)
   {
      $this->mana = $arg;
   }
   function getId_conjunto(): int
   {
      return $this->id_conjunto;
   }
   function setId_conjunto($arg)
   {
      $this->id_conjunto = $arg;
   }
   function getId_poder(): int
   {
      return $this->id_poder;
   }
   function setId_poder($arg)
   {
      $this->id_poder = $arg;
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
      return  "nome :" . $this->nome . "<br>" .
         "fisico :" . $this->fisico . "<br>" .
         "mental :" . $this->mental . "<br>" .
         "genero :" . $this->genero . "<br>" .
         "vigor :" . $this->vigor . "<br>" .
         "mana :" . $this->mana . "<br>" .
         "id_conjunto :" . $this->id_conjunto . "<br>" .
         "id_poder :" . $this->id_poder . "<br>" .
         "id_raca :" . $this->id_raca . "<br>";
   }
}

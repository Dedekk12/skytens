<?php
require_once( __DIR__ ."/Poder.php");
require_once( __DIR__ ."/Raca.php");
require_once( __DIR__ ."/Conjunto.php");


class Personagem
{
    //Atributos
    private int $id_personagem;
    private string $nome;
    private float $fisico;
    private float $mental;
    private string $genero;
    private float $vigor;
    private float $mana;
    private Conjunto $conjunto;
    private Poder $poder;
    private Raca $raca;


    //Métodos
    



    //Gets & SEts

    /**
     * Get the value of id_personagem
     */
    public function getIdPersonagem(): int
    {
        return $this->id_personagem;
    }

    /**
     * Set the value of id_personagem
     */
    public function setIdPersonagem(int $id_personagem): self
    {
        $this->id_personagem = $id_personagem;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of fisico
     */
    public function getFisico(): float
    {
        return $this->fisico;
    }

    /**
     * Set the value of fisico
     */
    public function setFisico(float $fisico): self
    {
        $this->fisico = $fisico;

        return $this;
    }

    /**
     * Get the value of mental
     */
    public function getMental(): float
    {
        return $this->mental;
    }

    /**
     * Set the value of mental
     */
    public function setMental(float $mental): self
    {
        $this->mental = $mental;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of vigor
     */
    public function getVigor(): float
    {
        return $this->vigor;
    }

    /**
     * Set the value of vigor
     */
    public function setVigor(float $vigor): self
    {
        $this->vigor = $vigor;

        return $this;
    }

    /**
     * Get the value of mana
     */
    public function getMana(): float
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     */
    public function setMana(float $mana): self
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get the value of conjunto
     */
    public function getConjunto(): Conjunto
    {
        return $this->conjunto;
    }

    /**
     * Set the value of conjunto
     */
    public function setConjunto(Conjunto $conjunto): self
    {
        $this->conjunto = $conjunto;

        return $this;
    }

    /**
     * Get the value of poder
     */
    public function getPoder(): Poder
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }

    /**
     * Get the value of raca
     */
    public function getRaca(): Raca
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca(Raca $raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}

<?php

final class Conjunto
{
    //Atributos
    private int $id_conjunto;
    private string $nome_conjunto;
    private string $armadura;
    private string $arma;
    private string $pocao;


    //Métodos
    


    /**
     * Get the value of id_conjunto
     */
    public function getIdConjunto(): int
    {
        return $this->id_conjunto;
    }

    /**
     * Set the value of id_conjunto
     */
    public function setIdConjunto(int $id_conjunto): self
    {
        $this->id_conjunto = $id_conjunto;

        return $this;
    }

    /**
     * Get the value of nome_conjunto
     */
    public function getNome(): string
    {
        return $this->nome_conjunto;
    }

    /**
     * Set the value of nome_conjunto
     */
    public function setNomeConjunto(string $nome_conjunto): self
    {
        $this->nome_conjunto = $nome_conjunto;

        return $this;
    }

    /**
     * Get the value of armadura
     */
    public function getArmadura(): string
    {
        return $this->armadura;
    }

    /**
     * Set the value of armadura
     */
    public function setArmadura(string $armadura): self
    {
        $this->armadura = $armadura;

        return $this;
    }

    /**
     * Get the value of arma
     */
    public function getArma(): string
    {
        return $this->arma;
    }

    /**
     * Set the value of arma
     */
    public function setArma(string $arma): self
    {
        $this->arma = $arma;

        return $this;
    }

    /**
     * Get the value of pocao
     */
    public function getPocao(): string
    {
        return $this->pocao;
    }

    /**
     * Set the value of pocao
     */
    public function setPocao(string $pocao): self
    {
        $this->pocao = $pocao;

        return $this;
    }
}

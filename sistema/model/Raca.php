<?php


class Raca
{
    //Atributos
    private int $id_raca;
    private string $nome_raca;
    private string $habilidade;
    private string $bonus_incial;


    //Métodos
    


    /**
     * Get the value of id_raca
     */
    public function getIdRaca(): int
    {
        return $this->id_raca;
    }

    /**
     * Set the value of id_raca
     */
    public function setIdRaca(int $id_raca): self
    {
        $this->id_raca = $id_raca;

        return $this;
    }

    /**
     * Get the value of nome_raca
     */
    public function getNome(): string
    {
        return $this->nome_raca;
    }

    /**
     * Set the value of nome_raca
     */
    public function setNomeRaca(string $nome_raca): self
    {
        $this->nome_raca = $nome_raca;

        return $this;
    }

    /**
     * Get the value of habilidade
     */
    public function getHabilidade(): string
    {
        return $this->habilidade;
    }

    /**
     * Set the value of habilidade
     */
    public function setHabilidade(string $habilidade): self
    {
        $this->habilidade = $habilidade;

        return $this;
    }

    /**
     * Get the value of bonus_incial
     */
    public function getBonusIncial(): string
    {
        return $this->bonus_incial;
    }

    /**
     * Set the value of bonus_incial
     */
    public function setBonusIncial(string $bonus_incial): self
    {
        $this->bonus_incial = $bonus_incial;

        return $this;
    }
}
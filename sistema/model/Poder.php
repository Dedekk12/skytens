<?php


class Poder
{
    //Atributos
       private int $id_poder;
        private string $nome_poder;
        private int $custo;
        private int $tempo_espera;
        private string $descricao;
        private string $duracao;

    //Métodos



       /**
        * Get the value of id_poder
        */
       public function getIdPoder(): int
       {
              return $this->id_poder;
       }

       /**
        * Set the value of id_poder
        */
       public function setIdPoder(int $id_poder): self
       {
              $this->id_poder = $id_poder;

              return $this;
       }

        /**
         * Get the value of nome_poder
         */
        public function getNome(): string
        {
                return $this->nome_poder;
        }

        /**
         * Set the value of nome_poder
         */
        public function setNomePoder(string $nome_poder): self
        {
                $this->nome_poder = $nome_poder;

                return $this;
        }

        /**
         * Get the value of custo
         */
        public function getCusto(): int
        {
                return $this->custo;
        }

        /**
         * Set the value of custo
         */
        public function setCusto(int $custo): self
        {
                $this->custo = $custo;

                return $this;
        }

        /**
         * Get the value of tempo_espera
         */
        public function getTempoEspera(): int
        {
                return $this->tempo_espera;
        }

        /**
         * Set the value of tempo_espera
         */
        public function setTempoEspera(int $tempo_espera): self
        {
                $this->tempo_espera = $tempo_espera;

                return $this;
        }

        /**
         * Get the value of descricao
         */
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of duracao
         */
        public function getDuracao(): string
        {
                return $this->duracao;
        }

        /**
         * Set the value of duracao
         */
        public function setDuracao(string $duracao): self
        {
                $this->duracao = $duracao;

                return $this;
        }
}

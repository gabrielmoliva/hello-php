<?php
// model de usuario
    include("config.php");
    class Cliente
    {
        private $nome;
        private $telefone;
        private $data_nasc;
        private $cpf;
        private $email;

        public function __construct($nome, $telefone, $data_nasc, $cpf = null, $email = null)
        {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->data_nasc = $data_nasc;
            $this->cpf = $cpf;
            $this->email = $email;
        }

        public function save($cliente)
        {

        }

        public function getAll()
        {

        }

        public function getByTelefone($telefone)
        {
        }

        public function update()
        {
        }

        public function delete()
        {
        }
    }
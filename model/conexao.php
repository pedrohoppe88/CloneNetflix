<?php
    class ConexaoMysql 
    {
        protected $mysqli;
        protected $server = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $database = 'netflix';

        public function getConnection()
        {
            return $this->mysqli;
        }

        //conectar banco de dados

        

    }
?>
<?php

      class Conexao 
      {
            protected $host = 'localhost';
            protected $dbname = 'netflix';
            protected $user = 'root';
            protected $password = 'asasasas';

            protected $conn;

            public function connect()
            {
                  $this->conn = null;

                  try {
                        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
                        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  } catch (PDOException $e) {
                        echo 'Erro de conexão: ' . $e->getMessage();
                  }

                  return $this->conn;

            }

                  public function close()
                  {
                        $this->conn = null;
                  }
            }

            $db = new Conexao();
            $conn = $db->connect();

            if($conn)
            {
                  echo "conectado com sucesso";
            } else {
                  echo "Não foi possível conectar.";
            }

?>
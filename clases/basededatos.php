<?php
    class Conectar{
        private $host;
        private $user;
        private $pass;
        private $database;
        private $conn;

        public function __construct(){
            $this->user='root';
            $this->pass='';
            $this->database='proyecto_godoy';
            $this->host='127.0.0.1';
        }

        public function conecta(){
            $this->conn= new mysqli($this->host, $this->user, $this->pass, $this->database);
            if($this->conn->connect_errno){
                die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
            }
        }

        public function cerrarbd(){
            $this->conn->close();
        }
            
        public function ejecutar($sql){
            $result = $this->conn->query($sql);
            return $result;
        }
            
        public function renglones(){
            return $this->conn->affected->rows;
        }
    }
?>
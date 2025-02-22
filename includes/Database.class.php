<?php 
    class DataBase{
        private $host = 'localhost:3306';
        private $user = 'test';
        private $password = 'test';
        private $datebase = 'code_pills';

        public function getConnection(){
            $hostDB = "mysql:host=".$this->host.";dbname=".$this->datebase.";";

            try{
                $connection = new PDO($hostDB,$this->user,$this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $connection;
            } catch(PDOException $e){
                die("ERROR:".$e->getMessage());
            }
        }
    }


?>
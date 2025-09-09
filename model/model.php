<?php

    class ModelPlanet extends Connection{
        private $conn;

        public function __construct(){
           $database = new Connection();
           $this->conn = $database->$connect();

        }

        public function getAll(){
            $query = "SELECT * FROM informasi_planet";
            $result = mysqli_query($this->conn, $query);

            $planets = [];
            if($result && mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    $planet[]=$row;
                }
            }
            return $planets;
        }
    }

?>
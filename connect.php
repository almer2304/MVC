<?php

class Connection{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "informasi_planet";

    public function connect(){
        $connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        return ($connect);

        if($connect){
            echo "koneksi kamu berhasil";
        }
        else{
            echo "connect gagal";
        }
    }
}

?>
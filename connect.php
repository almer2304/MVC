<?php

class Connection{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "informasi_planet";

    public function connect($connect){
        $connect = mysqli_connect($hostname, $username, $password, $database);
        return ($connect);

        if($connect){
            echo "koneksi kamu berhasil";
        }
    }
}

?>
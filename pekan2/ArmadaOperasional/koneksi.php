<?php

if (!function_exists('connectDB')) {
    function connectDB(){
        static $armadaPdo = null;
        if($armadaPdo === null){

            $db_type= "mysql";
            $db_host= "127.0.0.1";
            $db_name= "db_wad";
            $username = "root";
            $password= "";

            try {
                $conf = "$db_type:host=$db_host;dbname=$db_name;charset=utf8mb4";
                $armadaPdo = new PDO($conf, $username, $password);
                $armadaPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $armadaPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die("Koneksi database gagal: " . $e->getMessage());
            }
        }
        return $armadaPdo;
    }
}
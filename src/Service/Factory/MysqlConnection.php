<?php namespace App\Service\Factory ; ?>
<?php use \PDO; ?>
<?php

class MysqlConnection
{
    public static function instance():PDO{
        $attributes = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        return new PDO(
            "mysql:host=localhost;dbname=random_text;charset=utf8mb4;",
            "root","root",$attributes
        );
    }
}
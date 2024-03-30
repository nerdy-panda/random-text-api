<?php namespace App\Service\Singleton ; ?>
<?php
    use \PDO;
    use App\Service\Factory\MysqlConnection as MysqlConnectionFactory;
?>
<?php

class MysqlConnection
{
    protected static PDO $instance;
    public static function instance():PDO{
        if (isset(static::$instance))
            return static::$instance;
        return static::$instance = MysqlConnectionFactory::instance();
    }

}
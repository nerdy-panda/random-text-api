<?php

namespace App\Service;

use App\Service;

class Text
{
    public function random(array $columns = ['*'] , int $limit = 1 ):array {
        $columnString = implode(",",$columns);
        $query = "select {$columnString} from `texts` order by rand() limit :rowCount ";
        $statement = dbConnection()->prepare($query);
        $statement->bindValue(":rowCount",$limit,\PDO::PARAM_INT);
        $executed = $statement->execute();
        return $statement->fetchAll();
    }
    public function randomSingle(array $columns = ['*']):object
    {
        $record = $this->random($columns,1);
        return $record[0];
    }

}
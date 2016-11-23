<?php

namespace amirat\hw3\models;

require_once("Model.php");

class ModelChecker extends Model
{
    public function getData($data)
    {
        $config = include("../configs/config.php");

        $con=mysqli_connect($config['host'],$config['username'],$config['password'],$config['database']);


        mysqli_stmt_execute($stmt);

        mysqli_stmt_fetch($result);

        return $result;

    }
}

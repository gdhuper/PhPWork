<?php


namespace amirat\hw3\models;

require("Model.php");

class ModelUploaded extends Model
{
    public function insertdb($userid,$imagename, $caption){
        $config = include("../configs/config.php");

       connect_mysql();
               return true;
    }
}

<?php

namespace amirat\hw3\controllers;

require_once('Controller.php');

class ControllerChecking extends Controller
{
    public function maincontrol(){

 
        $trythis=$imagedata->getData();
        $arr2=array();
        while($row=mysqli_fetch_array($data))
        {
            $arr2[]=$row;
        }

        $mainRender->renderlogged($arr2,$trythis);
    }
}

<?php

namespace amirat\hw3\controllers;

include('../hw3/src/controllers/controller.php');





class InsideController extends Controller
{
    function __construct()
    {

    }

    public function maincontrol()
    {
        $arr=array();
        while($row=mysqli_fetch_array($data))
        {
            $arr[]=$row;
        }

        $mainRender->render($arr);
    }
}
?>
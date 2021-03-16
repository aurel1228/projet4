<?php

require_once('models/Model.php');
class Controller {

    public $model;

    public function __construct()
    {
        $this->models = new Model();
    }


    public function invoke()
    {
        $reslt = $this->models->getlogin();
        if($reslt == 'login')
        {
            include 'views/ViewAfterlogin.php';
        }
        else
        {
            include 'views/ViewLogin.php';
        }

    }



}




?>
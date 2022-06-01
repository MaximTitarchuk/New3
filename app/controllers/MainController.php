<?php

namespace app\controllers;


use app\models\Main;
use RedBeanPHP\R;
use wfm\App;
use wfm\Cache;


/** @property Main $model */
class MainController extends AppController
{

    public function indexAction()
    {


        $this->setMeta(___('Test'), ___(''), ___(''));
    }

}
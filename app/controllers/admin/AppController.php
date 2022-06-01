<?php


namespace app\controllers\admin;


use app\models\admin\User;
use app\models\AppModel;
use app\widgets\language\Language;
use RedBeanPHP\R;
use wfm\App;
use wfm\Controller;

class AppController extends Controller
{

    public false|string $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);

        
    }

}
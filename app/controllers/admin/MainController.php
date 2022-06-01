<?php


namespace app\controllers\admin;


use RedBeanPHP\R;

class MainController extends AppController
{

    public function indexAction()
    {
    

        $title = 'Главная страница';
        $this->setMeta('Админка/Главная страница');
        $this->set(compact('title'));
    }

}
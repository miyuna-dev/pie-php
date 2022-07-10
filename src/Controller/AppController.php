<?php

namespace src\Controller;

class AppController extends \Core\Controller
{
    public function indexAction()
    {
        $this->render('index');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 19.08.2016
 * Time: 22:55
 */

namespace app\controllers;


class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex($name = 'guest')
    {
        $message = "Привет мир";
        return $this->render('index', ['message' =>$message, 'name' => $name]);
    }

    public function actionShow()
    {
        return $this->render('show', compact('post'));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 19.08.2016
 * Time: 22:55
 */

namespace app\controllers;
use Yii;
use yii\helpers\Html;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex($name = 'guest')
    {

        return $this->render('index', ['message' =>$message, 'name' => $name]);
    }

    public function actionShow()
    {
        $this->view->title = Html::encode('<em>>>Some Article</em>');
        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => 'ключевики'
        ]);
        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => 'описание страницы'
        ]);
        return $this->render('show', compact('post'));
    }

    public function actionAjax()
    {
        print_r(Yii::$app->request->post());
        return ('END');
    }
}
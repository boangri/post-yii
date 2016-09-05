<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 19.08.2016
 * Time: 22:55
 */

namespace app\controllers;

use app\models\Category;
use app\models\TestForm;
use Yii;
use yii\helpers\Html;

class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex($name = 'guest')
    {
        $post = TestForm::findOne(1);
        $post->email = 'xinu@yandex.ru';
        $post->save();

        //$post = TestForm::findOne(2);
        //$post->delete();

        //return 'Updated';
        $model = new TestForm();

        if ($model->load(Yii::$app->request->post()) ) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка!');
            }

        }
        $this->view->title = 'Test Form';
        return $this->render('test', compact('model'));
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
        $cats = Category::find()->with('products')->all();
        //$cats = Category::find()->where('id = 694')->with('products')->all();

        return $this->render('show', compact('cats'));
    }

    public function actionAjax()
    {
        print_r(Yii::$app->request->post());
        return ('END');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 20.08.2016
 * Time: 15:41
 */

namespace app\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    /**
     * @return Action
     */
    public function actionIndex()
    {
        return $this->render('admin');
    }
}
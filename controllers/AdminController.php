<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 20.08.2016
 * Time: 15:41
 */

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        // 'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    /**
     * @return Action
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
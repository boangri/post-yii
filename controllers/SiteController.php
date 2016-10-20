<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Portfolio;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('main');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionPortfolio()
    {
        $data = Portfolio::getData();
        return $this->render('portfolio', ['data' => $data]);
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionP404()
    {
        return $this->render('404');
    }

    public function actionError()
    {
        return $this->render('error', [
            'name' => 'Ошибка!!!',
            'message' => 'Произошла ошибка!',
        ]);
    }

    public function actionLogin()
    {
        $data['access_status'] = 'access_granted';
        return $this->render('login', ['data' => $data]);
    }
}

<?php

namespace app\controllers;

//use Yii;
//use yii\filters\AccessControl;
use yii\web\Controller;
//use yii\filters\VerbFilter;
//use app\models\LoginForm;
//use app\models\ContactForm;

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
        return $this->render('portfolio');
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionP404()
    {
        return $this->render('p404');
    }
}

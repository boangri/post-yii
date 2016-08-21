<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 19.08.2016
 * Time: 22:55
 */

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\HttpException;

class PostController extends AppController
{
    public function actionIndex()
    {
        $query = Post::find()->select('id, title, excerpt')->orderBy('id desc');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 2,
            'pageSizeParam' => false,
            'forcePageParam' => false,
        ]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
            'posts' => $posts,
            'pages' => $pages,
        ]);
    }

    public function actionView()
    {
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if (empty($post)) throw new HttpException('404', 'Такой страницы нет...');
        return $this->render('view', compact('id', 'post'));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 20.08.2016
 * Time: 20:39
 */

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
}
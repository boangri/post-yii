<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 01.09.2016
 * Time: 10:32
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return 'categories';
    }
}
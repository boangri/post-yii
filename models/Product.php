<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 02.09.2016
 * Time: 9:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'products';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}
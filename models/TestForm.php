<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 25.08.2016
 * Time: 11:19
 */

namespace app\models;


use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
//    public $name;
//    public $email;
//    public $text;
    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'text' => 'Ваше сообщение',
        ];
    }

    public function rules () {
        return [
            [['name', 'text'], 'required', ],
            ['email', 'email'],
        ];
    }
}
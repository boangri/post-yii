<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 25.08.2016
 * Time: 11:19
 */

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;
    
    public function attributeLabels(){
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'text' => 'Ваше сообщение',
        ];
    }

    public function rules () {
        return [
            [['name', 'email'], 'required', ],
            ['email', 'email'],
            ['name', 'string', 'min' => 2, 'max' => 4],
        ];
    }
}
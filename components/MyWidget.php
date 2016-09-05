<?php

/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 05.09.2016
 * Time: 10:44
 */

namespace app\components;

use yii\base\Widget;

class MyWidget extends Widget 
{

    public $name;

    public function init() {
        parent::init();
        if($this->name === null) $this->name = 'Guest';
    }

    public function run() {
        //return '<h2>hello ' . $this->name . '</h2>';
        return $this->render('my', ['name' => $this->name]);
    }
            
}
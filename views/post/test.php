<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>

<h1><?=$this->title?></h1>

<?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal', 'id' => 'myform']]) ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php $form = ActiveForm::end() ?>

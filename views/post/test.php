<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>

<h1><?=$this->title?></h1>


<?php if(Yii::$app->session->hasFlash('success')) : ?>
<div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;
            </span>
    </button>
    <?php echo Yii::$app->session->getFlash('success'); ?>
</div>
<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('error')) : ?>
<div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;
            </span>
    </button>
    <?php echo Yii::$app->session->getFlash('error'); ?>
</div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal', 'id' => 'myform']]) ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php $form = ActiveForm::end() ?>

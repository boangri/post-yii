<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Страница авторизации';
?>

<h1><?= $this->title ?></h1>
<div>
	<?php $form = ActiveForm::begin([
		'id' => 'login-form',
		'options' => ['class' => 'form-horizontal'],
		'fieldConfig' => [
			'template' => "<tr></tr><td>{label}</td><td>{input}<div class=\"col-lg-8\">{error}</div></td></tr>",
			'labelOptions' => ['class' => 'col-lg-1 control-label'],
		],
	]); ?>

	<table class="login">
		<tr>
			<th colspan="2">Авторизация</th>
		</tr>
		<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
		<?= $form->field($model, 'password')->passwordInput() ?>
		<?= $form->field($model, 'rememberMe')->checkbox([
			'template' => "<tr></tr><td>{input}</td><td>{label}<div class=\"col-lg-8\">{error}</div></td></tr>",
		]) ?>
		<tr>
			<th colspan="2" style="text-align: center">
				<?= Html::submitButton('Войти', ['name' => 'btn', 'style' => "width: 150px; height: 30px;"]) ?>
			</th>
		</tr>
	</table>

<?php ActiveForm::end(); ?>
</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\motorista $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="motorista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_carteira')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funcionario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

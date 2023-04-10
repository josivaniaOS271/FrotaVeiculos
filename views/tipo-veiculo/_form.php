<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\tipoveiculo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tipoveiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano')->textInput() ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'combustivel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

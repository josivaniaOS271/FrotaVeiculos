<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TipoVeiculoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tipoveiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'ano') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'combustivel') ?>

    <?php // echo $form->field($model, 'cor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

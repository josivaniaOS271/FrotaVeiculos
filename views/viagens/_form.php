<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\viagens $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="viagens-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dataHora')->textInput() ?>

    <?= $form->field($model, 'saida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n_passageiros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'administrador_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\viagemrealizada $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="viagemrealizada-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'veiculos_id')->textInput() ?>

    <?= $form->field($model, 'motoristas_id')->textInput() ?>

    <?= $form->field($model, 'viagens_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

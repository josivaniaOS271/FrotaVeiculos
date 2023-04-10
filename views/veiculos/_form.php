<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\veiculos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="veiculos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chassi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_veiculo_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

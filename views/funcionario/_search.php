<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FuncionarioSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="funcionario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'endereco') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

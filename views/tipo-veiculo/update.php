<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\tipoveiculo $model */

$this->title = 'Update Tipoveiculo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipoveiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoveiculo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\viagemrealizada $model */

$this->title = 'Update Viagemrealizada: ' . $model->veiculos_id;
$this->params['breadcrumbs'][] = ['label' => 'Viagemrealizadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->veiculos_id, 'url' => ['view', 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viagemrealizada-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

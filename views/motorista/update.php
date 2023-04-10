<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\motorista $model */

$this->title = 'Update Motorista: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Motoristas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motorista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

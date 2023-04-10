<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\viagens $model */

$this->title = 'Update Viagens: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Viagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viagens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

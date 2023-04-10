<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\viagemrealizada $model */

$this->title = $model->veiculos_id;
$this->params['breadcrumbs'][] = ['label' => 'Viagemrealizadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="viagemrealizada-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'veiculos_id',
            'motoristas_id',
            'viagens_id',
        ],
    ]) ?>

</div>

<?php

use app\models\viagemrealizada;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ViagemRealizadaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Viagemrealizadas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viagemrealizada-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Viagemrealizada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'veiculos_id',
            'motoristas_id',
            'viagens_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, viagemrealizada $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id]);
                 }
            ],
        ],
    ]); ?>


</div>

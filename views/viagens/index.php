<?php

use app\models\viagens;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ViagensSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Viagens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viagens-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Viagens', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dataHora',
            'saida',
            'destino',
            'n_passageiros',
            //'status',
            //'administrador_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, viagens $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

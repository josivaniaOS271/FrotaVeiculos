<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\veiculos $model */

$this->title = 'Create Veiculos';
$this->params['breadcrumbs'][] = ['label' => 'Veiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="veiculos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

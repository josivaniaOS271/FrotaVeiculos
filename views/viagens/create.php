<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\viagens $model */

$this->title = 'Create Viagens';
$this->params['breadcrumbs'][] = ['label' => 'Viagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viagens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

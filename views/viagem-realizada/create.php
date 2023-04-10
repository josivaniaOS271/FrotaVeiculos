<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\viagemrealizada $model */

$this->title = 'Create Viagemrealizada';
$this->params['breadcrumbs'][] = ['label' => 'Viagemrealizadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viagemrealizada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

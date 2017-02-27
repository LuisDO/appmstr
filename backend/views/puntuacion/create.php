<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Puntuacion $model
 */

$this->title = 'Create Puntuacion';
$this->params['breadcrumbs'][] = ['label' => 'Puntuacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntuacion-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Puntuacion $model
 */

$this->title = 'Update Puntuacion: ' . ' ' . $model->PuntuacionID;
$this->params['breadcrumbs'][] = ['label' => 'Puntuacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PuntuacionID, 'url' => ['view', 'id' => $model->PuntuacionID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="puntuacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

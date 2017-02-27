<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Sugerencias $model
 */

$this->title = 'Update Sugerencias: ' . ' ' . $model->SugerenciasID;
$this->params['breadcrumbs'][] = ['label' => 'Sugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SugerenciasID, 'url' => ['view', 'id' => $model->SugerenciasID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sugerencias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

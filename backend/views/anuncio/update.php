<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Anuncio $model
 */

$this->title = 'Update Anuncio: ' . ' ' . $model->AnuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AnuncioID, 'url' => ['view', 'id' => $model->AnuncioID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anuncio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

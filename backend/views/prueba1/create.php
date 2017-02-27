<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Prueba1 $model
 */

$this->title = 'Create Prueba1';
$this->params['breadcrumbs'][] = ['label' => 'Prueba1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prueba1-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

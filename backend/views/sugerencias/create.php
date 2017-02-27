<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Sugerencias $model
 */

$this->title = 'Create Sugerencias';
$this->params['breadcrumbs'][] = ['label' => 'Sugerencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sugerencias-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

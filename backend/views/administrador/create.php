<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Administrador $model
 */

$this->title = 'Create Administrador';
$this->params['breadcrumbs'][] = ['label' => 'Administradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrador-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

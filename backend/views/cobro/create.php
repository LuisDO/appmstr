<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Cobro $model
 */

$this->title = 'Create Cobro';
$this->params['breadcrumbs'][] = ['label' => 'Cobros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cobro-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Tipoventa $model
 */

$this->title = 'Create Tipoventa';
$this->params['breadcrumbs'][] = ['label' => 'Tipoventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoventa-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

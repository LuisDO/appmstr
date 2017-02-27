<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Tipocuenta $model
 */

$this->title = 'Create Tipocuenta';
$this->params['breadcrumbs'][] = ['label' => 'Tipocuentas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipocuenta-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

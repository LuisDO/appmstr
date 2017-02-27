<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Tipocuenta $model
 */

$this->title = 'Update Tipocuenta: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipocuentas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipocuenta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

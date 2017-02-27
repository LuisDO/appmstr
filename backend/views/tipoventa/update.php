<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Tipoventa $model
 */

$this->title = 'Update Tipoventa: ' . ' ' . $model->TipoventaID;
$this->params['breadcrumbs'][] = ['label' => 'Tipoventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TipoventaID, 'url' => ['view', 'id' => $model->TipoventaID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoventa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

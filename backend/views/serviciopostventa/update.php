<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Serviciopostventa $model
 */

$this->title = 'Update Serviciopostventa: ' . ' ' . $model->ServiciopostventaID;
$this->params['breadcrumbs'][] = ['label' => 'Serviciopostventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ServiciopostventaID, 'url' => ['view', 'id' => $model->ServiciopostventaID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="serviciopostventa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

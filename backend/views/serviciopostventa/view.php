<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\Serviciopostventa $model
 */

$this->title = $model->ServiciopostventaID;
$this->params['breadcrumbs'][] = ['label' => 'Serviciopostventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciopostventa-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= DetailView::widget([
        'model' => $model,
        'condensed' => false,
        'hover' => true,
        'mode' => Yii::$app->request->get('edit') == 't' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel' => [
            'heading' => $this->title,
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'Descripcion',
            'Estatus',
            'ServiciopostventaID',
            'VentaID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->ServiciopostventaID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

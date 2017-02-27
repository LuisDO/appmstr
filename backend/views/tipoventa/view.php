<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\Tipoventa $model
 */

$this->title = $model->TipoventaID;
$this->params['breadcrumbs'][] = ['label' => 'Tipoventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoventa-view">
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
            'TipoventaID',
            'ServiciopostventaID',
            'VentaID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->TipoventaID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

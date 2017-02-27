<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;
use kartik\widgets\RangeInput;

/**
 * @var yii\web\View $this
 * @var app\models\Puntuacion $model
 */

$this->title = $model->PuntuacionID;
$this->params['breadcrumbs'][] = ['label' => 'Puntuacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntuacion-view">
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
            //'Puntaje',
            [
              'attribute'=>'Puntaje',
              'type'=>DetailView::INPUT_WIDGET,
              'widgetOptions'=>[
                'class'=>RangeInput::className(),
                ]
            ],
            'Descripcion',
            'Estatus',
            'PuntuacionID',
            'VentaID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->PuntuacionID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

use kartik\widgets\FileInput;
use kartik\widgets\RangeInput;
/**
 * @var yii\web\View $this
 * @var app\models\Anuncio $model
 */

$this->title = $model->AnuncioID;
$this->params['breadcrumbs'][] = ['label' => 'Anuncios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anuncio-view">
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
            'Nombre',
            'Descripcion:ntext',
            'Precio',
            'Ubicacion',
            //'Imagen:ntext',
            [
            'attribute' => 'Imagen',
            'type'=>DetailView::INPUT_WIDGET,
            'widgetOptions'=>[
              'class'=>FileInput::classname(),
              'pluginOptions'=>[
                'allowedFileExtension'=>['jpg','gif','png'],
              ]
            ]
            ],
            [
                'attribute' => 'fechaCreacion',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            [
                'attribute' => 'fechaCaducidad',
                'format' => [
                    'date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date']))
                        ? Yii::$app->modules['datecontrol']['displaySettings']['date']
                        : 'd-m-Y'
                ],
                'type' => DetailView::INPUT_WIDGET,
                'widgetOptions' => [
                    'class' => DateControl::classname(),
                    'type' => DateControl::FORMAT_DATE
                ]
            ],
            'Estatus',
            'AnuncioID',
            'CategoriaID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->AnuncioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

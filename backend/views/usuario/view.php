<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

use kartik\widgets\Select2;

/**
 * @var yii\web\View $this
 * @var app\models\Usuario $model
 */

$this->title = 'Modificar';
//$this->title2=$model->UsuarioID;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= DetailView::widget([
        'model' => $model,
        'condensed' => false,
        'hover' => true,
        'mode' => Yii::$app->request->get('edit') == 't' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel' => [
            'heading'=> $this->title,
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'Nombre',
            'Apellido',

            'Pais',
            //'Estado',
            [
            'attribute'=>'Estado',
            'type'=>DetailView::INPUT_WIDGET,
            'widgetOptions'=>[
              'class'=>Select2::className(),
              ]
            ],
            'Email:email',
            'Telefono',
            'Documentoid',
            'Contrase',
            'Foto:ntext',
            'Tipo',
            'Estatus',
            'UsuarioID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->UsuarioID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

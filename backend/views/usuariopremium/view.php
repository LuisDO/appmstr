<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var app\models\Usuariopremium $model
 */

$this->title = $model->UsuariopremiumID;
$this->params['breadcrumbs'][] = ['label' => 'Usuariopremia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuariopremium-view">
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
            'Tipo',
            'Estatus',
            'UsuariopremiumID',
        ],
        'deleteOptions' => [
            'url' => ['delete', 'id' => $model->UsuariopremiumID],
        ],
        'enableEditMode' => true,
    ]) ?>

</div>

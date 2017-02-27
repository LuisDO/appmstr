<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Cobro $model
 */

$this->title = 'Update Cobro: ' . ' ' . $model->CobroID;
$this->params['breadcrumbs'][] = ['label' => 'Cobros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CobroID, 'url' => ['view', 'id' => $model->CobroID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cobro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

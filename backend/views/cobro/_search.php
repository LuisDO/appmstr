<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\CobroSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="cobro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Monto') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Hora') ?>

    <?= $form->field($model, 'Estatus') ?>

    <?php // echo $form->field($model, 'CobroID') ?>

    <?php // echo $form->field($model, 'TipoventaID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

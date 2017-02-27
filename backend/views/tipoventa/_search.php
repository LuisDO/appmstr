<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\TipoventaSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="tipoventa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Estatus') ?>

    <?= $form->field($model, 'TipoventaID') ?>

    <?= $form->field($model, 'ServiciopostventaID') ?>

    <?= $form->field($model, 'VentaID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

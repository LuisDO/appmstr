<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\UsuarioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Apellido') ?>

    <?= $form->field($model, 'Pais') ?>

    <?= $form->field($model, 'Estado') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Documentoid') ?>

    <?php // echo $form->field($model, 'Contrase') ?>

    <?php // echo $form->field($model, 'Foto') ?>

    <?php // echo $form->field($model, 'Tipo') ?>

    <?php // echo $form->field($model, 'Estatus') ?>

    <?php // echo $form->field($model, 'UsuarioID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

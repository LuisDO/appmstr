<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\AnuncioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="anuncio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Precio') ?>

    <?= $form->field($model, 'Ubicacion') ?>

    <?= $form->field($model, 'Imagen') ?>

    <?php // echo $form->field($model, 'fechaCreacion') ?>

    <?php // echo $form->field($model, 'fechaCaducidad') ?>

    <?php // echo $form->field($model, 'Estatus') ?>

    <?php // echo $form->field($model, 'AnuncioID') ?>

    <?php // echo $form->field($model, 'CategoriaID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

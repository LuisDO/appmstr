<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use kartik\widgets\RangeInput;

/**
 * @var yii\web\View $this
 * @var app\models\Puntuacion $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="puntuacion-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            //  'Puntaje' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Puntaje...']],

            'VentaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Venta ID...']],

            'Descripcion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Descripcion...', 'maxlength' => 50]],

            'Estatus' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estatus...', 'maxlength' => 50]],

        ]

    ]);
    // Usage with ActiveForm and model. Check the model validation (e.g. value > 5).
    echo $form->field($model, 'Puntaje')->widget(RangeInput::classname(), [
        'options' => ['placeholder' => 'Puntea el anuncion (0 - 5)...'],
        'html5Options' => ['min' => 0, 'max' => 10],
        'addon' => ['append' => ['content' => '<i class="glyphicon glyphicon-star"></i>']]
    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>

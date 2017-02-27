<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

use kartik\widgets\FileInput;
use kartik\widgets\RangeInput;

/**
 * @var yii\web\View $this
 * @var app\models\Anuncio $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="anuncio-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'Descripcion' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Descripcion...','rows' => 6]],
            //'Imagen' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Imagen...','rows' => 6]],

            'Precio' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Precio...']],

            'CategoriaID' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Categoria ID...']],

            'fechaCreacion' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'fechaCaducidad' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'Nombre' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre...', 'maxlength' => 50]],

            'Ubicacion' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Ubicacion...', 'maxlength' => 50]],

            'Estatus' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estatus...', 'maxlength' => 50]],

        ]

    ]);
    echo $form->field($model, 'Imagen')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]);


    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>

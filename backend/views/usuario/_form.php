<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

use kartik\widgets\Select2;

/**
 * @var yii\web\View $this
 * @var app\models\Usuario $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            //'Telefono' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Telefono...']],

            'Foto' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Foto...','rows' => 6]],

            'Nombre' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre...', 'maxlength' => 50]],

            'Apellido' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Apellido...', 'maxlength' => 50]],

           'Pais' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Pais...', 'maxlength' => 50]],

        //  'Estado' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estado...', 'maxlength' => 50]],

            //'Email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 50]],

            'Documentoid' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Documentoid...', 'maxlength' => 50]],

            'Contrase' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Contrase...', 'maxlength' => 50]],

            'Tipo' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tipo...', 'maxlength' => 50]],

            'Estatus' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Estatus...', 'maxlength' => 50]],

        ]

    ]);

$data = [
    "Lara" => "Lara",
    "Cojedes" => "Cojedes",
    "Zulia" => "Zulia",
    "Merida" => "Merida"
];
    echo '<label class="control-labe">Estados</label>';
    echo Select2::widget([
    'model' => $model,
    'attribute' => 'Estado',
    'data' => $data,
    'options' => ['placeholder' => 'Selecciona un estado ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);


echo $form->field($model, 'Telefono', [
    'feedbackIcon' => ['default' => 'phone']
])->textInput(['placeholder'=>'Enter phone number...']);

// multiple feedback icons
echo $form->field($model, 'Email', [
    'feedbackIcon' => [
        'default' => 'envelope',
        'success' => 'ok',
        'error' => 'exclamation-sign',
        'defaultOptions' => ['class'=>'text-primary']
    ]
])->textInput(['placeholder'=>'Ingresa un correo electronico valido...']);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Registrar') : Yii::t('app', 'Actualizar'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>

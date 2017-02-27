<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use kartik\label\LabelInPlace;
use kartik\widgets\RangeInput;

/* @var $this yii\web\View */
/* @var $model app\models\Equipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_Marca')->textInput() ?>

    <?= $form->field($model, 'Codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?php 
	//$form->field($model, 'Descripcion')->textarea(['rows' => 6]) 
	?>
	 <?php
	 $config = ['template'=>"{input}\n{error}\n{hint}"]; 
	echo $form->field($model, 'Descripcion', $config)->widget(LabelInPlace::classname(),['type' => LabelInPlace::TYPE_TEXTAREA],['htmlOptions' =>['rows' => 6]] );
 ?>

    <?php
	//= $form->field($model, 'DepreciacionAlquiler')->textInput(['maxlength' => true]) 
	?>
<?php 


echo $form->field($model, 'DepreciacionAlquiler', $config)->widget(RangeInput::classname(),([
    'name' => 'DepreciacionAlquiler',
    'html5Options' => ['min' => 0, 'max' => 100, 'step' => 1, 'length'=>10, 'size'=>10],
    'options' => ['placeholder' => 'Depreciacion en Alquiler...'], 
    'addon' => ['append' => ['content' => '%']],
]));
?>
    <?= $form->field($model, 'Precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prueba */

$this->title = 'Create Prueba';
$this->params['breadcrumbs'][] = ['label' => 'Pruebas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prueba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

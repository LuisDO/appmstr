<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Serviciopostventa $model
 */

$this->title = 'Create Serviciopostventa';
$this->params['breadcrumbs'][] = ['label' => 'Serviciopostventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="serviciopostventa-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

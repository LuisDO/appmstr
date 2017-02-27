<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Usuariopremium $model
 */

$this->title = 'Create Usuariopremium';
$this->params['breadcrumbs'][] = ['label' => 'Usuariopremia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuariopremium-create">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

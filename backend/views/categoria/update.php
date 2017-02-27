<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Categoria $model
 */

$this->title = 'Update Categoria: ' . ' ' . $model->CategoriaID;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CategoriaID, 'url' => ['view', 'id' => $model->CategoriaID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Usuariopremium $model
 */

$this->title = 'Update Usuariopremium: ' . ' ' . $model->UsuariopremiumID;
$this->params['breadcrumbs'][] = ['label' => 'Usuariopremia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UsuariopremiumID, 'url' => ['view', 'id' => $model->UsuariopremiumID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuariopremium-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

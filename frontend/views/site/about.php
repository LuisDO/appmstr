<?php
//use yii\helpers\Html;
use kartik\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

echo Html::icon('pencil');
echo Html::icon('plus', ['class' => 'text-success']);
echo Html::icon('trash', ['style' => 'color: red; font-size: 2em']);

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>

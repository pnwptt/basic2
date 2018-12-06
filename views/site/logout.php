<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Logout';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-logout">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Logout Complete</p>

    <a href="index.php?r=site/index">Back to Index</a>

    <div class="col-lg-offset-1" style="color:#999;">

    </div>
</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CSLoan */

$this->title = 'Update Csloan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Csloans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="csloan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

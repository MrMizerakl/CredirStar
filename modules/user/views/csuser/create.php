<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CSUser */

$this->title = 'Create Csuser';
$this->params['breadcrumbs'][] = ['label' => 'Csusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CSUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Csusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csuser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name:ntext',
            'last_name:ntext',
            'email:ntext',
            'personal_code',
            'phone',
            'active:boolean',
            'dead:boolean',
            'lang:ntext',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CSUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Csusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Csuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name:ntext',
            'last_name:ntext',
            'email:ntext',
            'personal_code',
            // 'phone',
            // 'active:boolean',
            // 'dead:boolean',
            // 'lang:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

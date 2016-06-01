<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Complainantsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Complaint';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complainant-index" style="background-color: #f2f2f2">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'dob',
            'address',
            'mail',
            // 'contact',
            // 'sid',
            // 'place',
            // 'cid',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

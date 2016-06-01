<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Complainant */

$this->title = 'Create Complaint';
//$this->params['breadcrumbs'][] = ['label' => 'Complainants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complainant-create" style="background-color: #f2f2f2">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

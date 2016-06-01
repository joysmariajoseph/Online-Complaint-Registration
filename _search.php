<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Complainantsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complainant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'sid') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

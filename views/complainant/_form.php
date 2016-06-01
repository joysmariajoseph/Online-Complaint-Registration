<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\Helpers\ArrayHelper;
use app\models\Stations;
use app\models\Complaints;
/* @var $this yii\web\View */
/* @var $model app\models\Complainant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complainant-form"  >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) 
   // $n=textInput(['maxlength' => true])
    ?>
    <?= $form->field($model, 'dob')->textInput() ?>
    
     <?= $form->field($model, 'gid')->radioList(ArrayHelper::map(\app\models\Gender::find()->all(),'gid','gname')); ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'sid')->dropDownList(ArrayHelper::map(Stations::find()->all(),'sid','sname')); ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid')->dropDownList(ArrayHelper::map(Complaints::find()->all(),'cid','cname')) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'aid')->textInput(['readonly' => true, 'value' => 'Not Registered']) ?> 


    <div class="form-group">
 
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
             'data' => [
                'confirm' => 'Your Complaint has been registered. Your track id is  ',
               

              
                'method' => 'post',
            ],

            ]) 
       
            ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>

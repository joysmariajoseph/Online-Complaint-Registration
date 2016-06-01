<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\Helpers\ArrayHelper;
use app\models\Stations;
use app\models\Complaints;

/* @var $this yii\web\View */
/* @var $model app\models\Complainant */

$this->title = 'Update Complainant: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Complainants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="complainant-update">

   <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'aid')->textInput(['maxlength' => true]) ?> 


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
             'data' => [
                'confirm' => 'updated',
                'method' => 'post',
            ],

           // <?php echo (Html::link('LinkText',array('site/view'),array('class'=>'btn_registro')); 
            ]) 
         // return $this->redirect(['Complainant/update']);
        // ['class' => 'btn btn-primary',
       
            ?>
            </div>

  <?php ActiveForm::end(); ?>
  </div> 



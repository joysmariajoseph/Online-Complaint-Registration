<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\Helpers\ArrayHelper;
use app\models\Stations;
use app\models\Complaints;

/* @var $this yii\web\View */
/* @var $model app\models\Complainant */


$this->title = 'Track Complaint';
$this->params['breadcrumbs'][] = $this->title;



//$model = new \app\models\Complainant;


 //$model = new Complainant();



 //we are trying to display the details corresponding to the given track id... we are on the work... cuurently the redirection creates errors....


?>




 <div>  
<?php $form = ActiveForm::begin(); ?>
     Enter your track id:

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?> 


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Track' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary',
             'data' => [
                'confirm' => 'Your tracking status is sent to your mail',
                'method' => 'post',
            ],

            ]) 
       
            ?>
            </div>


        
<?php ActiveForm::end(); ?>
</div>

        
       
           
            
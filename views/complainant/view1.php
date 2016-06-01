<?php




use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\Complainant */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Complainants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="complainant-view" >

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'name',
            'dob',
            'address',
            'mail',
            'contact',
            'stations.sname',
            'place',
            'complaints.cname',
            'description',
            'approval.aname',
        ],
    ]) ?>

</div>

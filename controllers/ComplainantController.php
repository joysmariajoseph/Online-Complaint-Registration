<?php

namespace app\controllers;

use Yii;
use app\models\Complainant;
use app\models\Complainantsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;



/**
 * ComplainantController implements the CRUD actions for Complainant model.
 */
class ComplainantController extends Controller
{

    /**
     * @inheritdoc

     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access'=>[
                'class'=>AccessControl::className(),
                    'only'=>['index','delete'],
                    'rules'=>[
                    [
                    'allow'=>true,'roles'=>['@'],
                    ],
                    ],
                    ],   
        ];
    }

    /**
     * Lists all Complainant models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Complainantsearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Complainant model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {    

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


public function actionView1($id)
    {    

        return $this->render('view1', [
            'model' => $this->findModel($id),
        ]);
    }






        
    /**
     * Creates a new Complainant model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Complainant();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           
            return $this->redirect(['view1', 'id' => $model->id]);
                
           // important return $this->redirect(['site/index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Complainant model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }




public function actionTrack()
    {
      
      $model= new complainant();
       if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
         //return $this->redirect(['view', '57']);
          return $this->redirect(['view1', 'id']);


        //  return $this->redirect(['site/index', 'id' => $model->id]);
        } else {
            return $this->render('track', [
                'model' => $model,
            ]);
        }

      
    }

    
  
    /**
     * Deletes an existing Complainant model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Complainant model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Complainant the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Complainant::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



   




}

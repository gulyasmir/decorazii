<?php

namespace backend\controllers;

use Yii;
use backend\models\Example;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ExampleController implements the CRUD actions for Example model.
 */
class ExampleController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Example models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Example::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Example model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Example model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Example();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			
			$imageName = time();
			$model->file = UploadedFile::getInstance($model, 'file');
			if(!(empty($model->file)))
			{
				
				
				$image = 'example_'.$imageName.'.'.$model->file->extension;
				$model->image =$image ;
				$image = '../../frontend/web/images/example/'.$image;
				$model->file->saveAs($image, false);
			   
			  $model->save();
			}
			
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Example model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			$imageName = time();
			$model->file = UploadedFile::getInstance($model, 'file');
			if(!(empty($model->file)))
				{
					$old_img = $model->image;
					if (file_exists($old_img)) {
				//	unlink($old_img);
					}
				
				$image = 'example_'.$imageName.'.'.$model->file->extension;
				$model->image =$image ;
				$image = '../../frontend/web/images/example/'.$image;
				$model->file->saveAs($image, false);
			   
			  $model->save();
			}
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Example model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
			$old_img = $model->image;
			if (file_exists($old_img)) {
					unlink($old_img);
					}
				
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Example model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Example the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Example::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

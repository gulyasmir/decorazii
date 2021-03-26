<?php

namespace backend\controllers;

use Yii;
use backend\models\Galerey;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * GalereyController implements the CRUD actions for Galerey model.
 */
class GalereyController extends Controller
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
     * Lists all Galerey models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Galerey::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Galerey model.
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
     * Creates a new Galerey model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Galerey();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
			
			$imageName = time();
			$model->file = UploadedFile::getInstance($model, 'file');
			if(!(empty($model->file)))
			{
				
				
				$image = 'galerey_'.$imageName.'.'.$model->file->extension;
				$model->image =$image ;
				$image = '../../frontend/web/images/galerey/'.$image;
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
     * Updates an existing Galerey model.
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
					unlink('../../frontend/web/images/galerey/'.$old_img);
				}
				
				
				$image = 'gelerey_'.$imageName.'.'.$model->file->extension;
				$model->image =$image ;
				$image = '../../frontend/web/images/galerey/'.$image;
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
     * Deletes an existing Galerey model.
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
     * Finds the Galerey model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galerey the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galerey::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

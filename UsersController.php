<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Users;

/**
* CRUD 
*/
class UsersController extends controller
{

	// index Function

	public function actionIndex()
	{
		$model=Users::find()->all();
      return $this->render('index',['model' => $model]);
	}


	// Create Function

	public function actionCreate()
	{
		$model=new Users();

        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['index']);
        }
		return $this->render('create',['model' => $model]);
	}

	// update Function

	public function actionUpdate($id)
	{
		 $model = Users::find()->where(['id' => $id])->one();
 
        // id not found
        if($model === null)
         return $this->redirect(['index']);
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['index']);
        }

      return $this->render('update',['model' => $model]);
	}

	//delete function
	public function actionDelete($id)
	{
		$model = Users::find()->where(['id' => $id])->one();
 
        // id not found
        if($model === null)
         return $this->redirect(['index']);
        // deleted record
       $model->delete();
       return $this->redirect(['index']);
	}


	public function actionView($id)
	{
		 $model = Users::find()->where(['id' => $id])->one();
 
        // id not found
        if($model === null)
         return $this->redirect(['index']);
        

      return $this->render('view',['model' => $model]);
	}
}
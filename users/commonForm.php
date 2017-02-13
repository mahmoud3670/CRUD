<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

 
 $form = ActiveForm::begin(); 
 
   echo   $form->field($model, 'name')->textInput(['maxlength' => true]); 
   echo   $form->field($model, 'username')->textInput(['maxlength' => true]);
   echo   $form->field($model, 'password')->passwordInput(['maxlength' => true]); 
   echo   $form->field($model, 'email')->textInput(['maxlength' => true]);
   echo   $form->field($model, 'mobile')->textInput(['maxlength' => true]);
   echo   $form->field($model, 'gender')->radioList(array('1'=>'male',2=>'fmale'));

   echo  Html::submitButton($model->isNewRecord ? 'Create New Record ^_^' : 'Update '.$model->name.' ^_^',
    ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); 
   ?>
 
   <?php ActiveForm::end(); ?> 

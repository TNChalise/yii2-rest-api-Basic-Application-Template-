<?php

/**
 * Description of entry-form
 *
 * @author TNChalise <teknarayanchalise@lftechnology.com>
 * @created_on : 12 Dec, 2014, 2:24:05 PM
 * @package 

 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

echo $form->field($model, 'username');
echo $form->field($model, 'email');

echo Html::submitButton('Submit',$html = ['name' => 'login','class' => 'btn btn-primary']);

ActiveForm::end();

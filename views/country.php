<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form ActiveForm */
?>
<div class="country">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'code') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'population') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- country -->

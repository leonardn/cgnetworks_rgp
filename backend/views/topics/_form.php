<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pages;
/* @var $this yii\web\View */
/* @var $model backend\models\Topics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'page_id')->textInput() ?>

    <?= $form->field($model, 'page_id')->dropDownList(
    		ArrayHelper::map(Pages::find()->All(), 'page_id', 'title'),
    		['prompt' => 'Select Page']
    	)
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

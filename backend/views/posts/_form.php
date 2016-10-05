<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topic_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_views')->textInput() ?>

    <?= $form->field($model, 'number_of_likes')->textInput() ?>

    <?= $form->field($model, 'number_of_dislikes')->textInput() ?>

    <?= $form->field($model, 'number_of_comments')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'is_allow_comment')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_private')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'publish' => 'Publish', 'pending' => 'Pending', 'draft' => 'Draft', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

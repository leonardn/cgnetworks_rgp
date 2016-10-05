<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Media */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="media-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput() ?>

    <?= $form->field($model, 'caption')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alt_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'media_type')->dropDownList([ 'image' => 'Image', 'audio' => 'Audio', 'video' => 'Video', 'other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'number_views')->textInput() ?>

    <?= $form->field($model, 'number_of_likes')->textInput() ?>

    <?= $form->field($model, 'number_of_dislikes')->textInput() ?>

    <?= $form->field($model, 'number_of_comments')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'is_private')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

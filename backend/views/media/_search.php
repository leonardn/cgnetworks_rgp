<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MediaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="media-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'media_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'caption') ?>

    <?php // echo $form->field($model, 'alt_text') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'media_type') ?>

    <?php // echo $form->field($model, 'number_views') ?>

    <?php // echo $form->field($model, 'number_of_likes') ?>

    <?php // echo $form->field($model, 'number_of_dislikes') ?>

    <?php // echo $form->field($model, 'number_of_comments') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'is_private') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

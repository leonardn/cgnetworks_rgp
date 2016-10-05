<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */
/* @var $form yii\widgets\ActiveForm 


<!--<div class="post-form">

    <?php //$form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'topic_id')->textInput() ?>

    <?php //$form->field($model, 'user_id')->textInput() ?>

    <?php //$form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'number_of_views')->textInput() ?>

    <?php //$form->field($model, 'number_of_likes')->textInput() ?>

    <?php //$form->field($model, 'number_of_dislikes')->textInput() ?>

    <?php //$form->field($model, 'number_of_comments')->textInput() ?>

    <?php //$form->field($model, 'created_date')->textInput() ?>

    <?php //$form->field($model, 'is_allow_comment')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?php //$form->field($model, 'is_private')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?php //$form->field($model, 'status')->dropDownList([ 'publish' => 'Publish', 'pending' => 'Pending', 'draft' => 'Draft', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?php //Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php //ActiveForm::end(); ?>

</div>-->
*/
?>


<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'content')->textarea(['rows' => 6, 'maxlength' => 150])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'SUBMIT' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success right' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

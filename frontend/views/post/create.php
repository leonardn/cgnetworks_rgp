<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Post */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>-->
<h2 id="textarea_feedback">Submit a Post (150 Word Limit)</h2>
    <div class="row">
        <div class="columns large-2 medium-2 small-16 topic-posting-left">
          <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=64&h=64">
        </div>
        <div id="create-topic-posting" class="columns large-13 medium-13 small-16 topic-posting-right">
			<?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
    <div class="columns"></div>
</div>

<?php
$script = <<< JS
    var text_max = 150;
    $('#textarea_feedback').html('Submit a Post (' + text_max + ' Word Limit)');
    $('#post-content').keyup(function() {
      var text_length = $('#post-content').val().length;
      var text_remaining = text_max - text_length;
      $('#textarea_feedback').html('Submit a Post (' + text_remaining + ' Word Limit)');
    });
JS;
$this->registerJs($script);
?>

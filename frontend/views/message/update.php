<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserMessage */

$this->title = 'Update User Message: ' . ' ' . $model->user_message_id;
$this->params['breadcrumbs'][] = ['label' => 'User Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_message_id, 'url' => ['view', 'id' => $model->user_message_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

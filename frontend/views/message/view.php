<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserMessage */

$this->title = $model->user_message_id;
$this->params['breadcrumbs'][] = ['label' => 'User Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_message_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_message_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_message_id',
            'user_id',
            'to_user_id',
            'message:ntext',
            'created_date',
            'is_read',
        ],
    ]) ?>

</div>

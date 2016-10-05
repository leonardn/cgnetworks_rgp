<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Topics */

$this->title = 'Update Topics: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->topic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="topics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\UserMessage */

$this->title = 'Message';
$this->params['breadcrumbs'][] = ['label' => 'User Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-message-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

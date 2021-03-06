<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Media';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Media', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'media_id',
            'user_id',
            'title',
            'url:url',
            'caption:ntext',
            // 'alt_text',
            // 'description:ntext',
            // 'media_type',
            // 'number_views',
            // 'number_of_likes',
            // 'number_of_dislikes',
            // 'number_of_comments',
            // 'created_date',
            // 'is_private',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

use frontend\models\User;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="user-message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Compose', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
    //echo "<pre>"; print_r($dataProvider->models); echo "</pre>" ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_message_id',
            'user_id',
            'to_user_id',
            'message:ntext',
            'created_date',
            // 'is_read',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>-->
<div class="row">
    <div class="column large-16 medium-16 small-16">
      <?= Yii::$app->UserComponent->staticMenuHeader() ?>
    </div>
</div>
<div class="row">
    <div class="column large-16 medium-16 small-16">
      <div class="account-title">Your Messages</div>
    </div>
</div>

<?php 
foreach($dataProvider->models as $messageData) {
  $user = User::findOne($messageData->user_id);
?>
<div class="row">
    <div class="account-messages-list">
      <div class="columns large-2 medium-2 small-16 messages-left">
        <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=200&h=200">
        <div class="friend-count">2,000</div>
      </div>
      <div class="columns large-11 medium-11 small-16 messages-right">
        <div class="messages-user-name">
          <?= Html::a($user->first_name.' '.$user->last_name, ['/user/view', 'id' => $user->id]) ?>
        </div>
        <p>
          <?= $messageData->message ?>
        </p>
        <!--<p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittiis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum.........</p>-->
      </div>
      <div class="columns large-3 medium-3 small-16">
        <div class="messages-post-time"><?= $messageData->created_date ?></div>
        <div class="messages-buttons">
          <a href="" class="messages-reply">Reply</a>
        </div>
      </div>
      <div class="list-border-bottom"><span></span></div>
    </div>
</div>
<?php 
}
?>

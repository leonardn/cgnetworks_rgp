<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

//use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Pages */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="columns large-11 medium-11 small-16">
  <div class="topic-posting-content">

    <div class="topic-posting-form-content">
      
          <!--<form>
            <textarea id="textarea" name="content" maxlength="150"></textarea>

            <input type="submit" value="SUBMIT">
          </form>-->

          <!--<p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque.Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus</p>
          <button class="btn-primary">EMBED VIDEO</button>
          <button class="btn-primary">UPLOAD IMAGE</button>
          <input type="submit" value="SUBMIT">-->
          <!--<input type="submit" value="UPLOAD IMAGE">
          <input type="submit" value="EMBED VIDEO">-->
        
    </div>
    
    <div class="row">
      <div class="column large-16 medium-16 small-16">
        <div class="topic-posting-title">Sub-Topics<!--<b>47</b> Comments:--></div>
      </div>
    </div>

    <div class="row">
      <div class="account-topic-posting-list">
        <div class="columns large-2 medium-2 small-16 topic-posting-left">
          <img src="images/cg-networks/profile-feed-image.png">
        </div>
        <div class="columns large-14 medium-14 small-16 topic-posting-right">
          <div class="topic-posting-post-time">10 hours ago</div>
          <div class="topic-posting-user-name">NAME GOES HERE</div>
          <p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque.</p>
          <div class="topic-posting-buttons">
            <a href="" class="user-likes small-button">4</a>
            <a href="" class="user-dislikes small-button">6</a>
            <a href="" class="user-reply small-button">Reply</a>
            <a href="" class="user-share small-button">Share</a>
          </div>
        </div>

        <div class="topic-posting-reply">
          <div class="row">
            <div class="account-topic-posting-list">
              <div class="columns large-2 medium-2 small-16 topic-posting-left">
                <img src="images/cg-networks/profile-feed-image.png">
              </div>
              <div class="columns large-14 medium-14 small-16 topic-posting-right">
                <div class="topic-posting-post-time">Today 11:45 AM</div>
                <div class="topic-posting-user-name">NAME GOES HERE</div>
                <p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque.</p>
                <div class="topic-posting-buttons">
                  <a href="" class="user-likes small-button">4</a>
                  <a href="" class="user-dislikes small-button">6</a>
                  <a href="" class="user-reply small-button">Reply</a>
                  <a href="" class="user-share small-button">Share</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="list-border-bottom"><span></span></div>
      </div>
    </div>

    <div class="row">
      <div class="account-topic-posting-list">
        <div class="columns large-2 medium-2 small-16 topic-posting-left">
          <img src="images/cg-networks/profile-feed-image.png">
        </div>
        <div class="columns large-14 medium-14 small-16 topic-posting-right">
          <div class="topic-posting-post-time">10 hours ago</div>
          <div class="topic-posting-user-name">NAME GOES HERE</div>
          <p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque.</p>
          <div class="topic-posting-buttons">
            <a href="" class="user-likes small-button">4</a>
            <a href="" class="user-dislikes small-button">6</a>
            <a href="" class="user-reply small-button">Reply</a>
            <a href="" class="user-share small-button">Share</a>
          </div>
        </div>
        <div class="list-border-bottom"><span></span></div>
      </div>
    </div>

    <div class="row">
      <div class="account-topic-posting-list">
        <div class="columns large-2 medium-2 small-16 topic-posting-left">
          <img src="images/cg-networks/profile-feed-image.png">
        </div>
        <div class="columns large-14 medium-14 small-16 topic-posting-right">
          <div class="topic-posting-post-time">10 hours ago</div>
          <div class="topic-posting-user-name">NAME GOES HERE</div>
          <p>Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis. Sed luctus malesuada tincidunt. Quisque elementum urna justo. Cras in mauris ac sem vestibulum pellentesque.</p>
          <div class="topic-posting-buttons">
            <a href="" class="user-likes small-button">4</a>
            <a href="" class="user-dislikes small-button">6</a>
            <a href="" class="user-reply small-button">Reply</a>
            <a href="" class="user-share small-button">Share</a>
          </div>
        </div>
        <div class="list-border-bottom"><span></span></div>
      </div>
    </div>


  </div>
</div>

<div class="columns large-4 medium-4 small-16">
  <div class="topic-posting-category">
      <h2>Sub Topics</h2>
      <?php
      foreach ($topics as $topic) {
        echo "<a href='#{$topic->page_id}&{$topic->topic_id}'>{$topic->name}</a>";
      }
      ?>
  </div>
</div>

<?php
$script = <<< JS

  $('.topic-posting-form-content').load('index.php?r=post/create');

JS;
$this->registerJs($script);
?>

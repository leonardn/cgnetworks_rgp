<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = $model->first_name." ".$model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="user-view">

    <h1><php // Html::encode($this->title) ?></h1>

    <p>
        <?php //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) */?>
    </p>

    <?php /* DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'user_type',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) */?>

</div>-->

<div class="col-md-3">
  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" alt="User profile picture">
      <h3 class="profile-username text-center"><?= $model->first_name.' '.$model->last_name ?></h3>
      <p class="text-muted text-center">Software Engineer</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Followers</b> <a class="pull-right">1,322</a>
        </li>
        <li class="list-group-item">
          <b>Following</b> <a class="pull-right">543</a>
        </li>
        <li class="list-group-item">
          <b>Friends</b> <a class="pull-right">13,287</a>
        </li>
      </ul>

      <a class="btn btn-primary btn-block" href="#"><b>Follow</b></a>
      <?= Html::a('<b>Add Friend</b>', ['/user/addFriend/'.$model->id], ['data-method'=>'post', 'class' => 'btn btn-primary btn-block']) ?>
      <?= Html::a('<b>Message</b>', ['/message/create', 'id' => $model->id], ['id' => 'modalMessageBtn', 'class' => 'btn btn-primary btn-block']) ?>
    </div><!-- /.box-body -->
  </div><!-- /.box -->

  <!-- About Me Box -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">About Me</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
      <p class="text-muted">
        B.S. in Computer Science from the University of Tennessee at Knoxville
      </p>

      <hr>

      <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
      <p class="text-muted">Malibu, California</p>

      <hr>

      <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
      <p>
        <span class="label label-danger">UI Design</span>
        <span class="label label-success">Coding</span>
        <span class="label label-info">Javascript</span>
        <span class="label label-warning">PHP</span>
        <span class="label label-primary">Node.js</span>
      </p>

      <hr>

      <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>

<div class="col-md-9">
  <?php
  echo Tabs::widget([
      'items' => [
              [
                  'label' => 'Activity',
                  'content' => '
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img alt="user image" src="../../dist/img/user1-128x128.jpg" class="img-circle img-bordered-sm">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <ul class="list-inline">
                        <li><a class="link-black text-sm" href="#"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a class="link-black text-sm" href="#"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a class="link-black text-sm" href="#"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input type="text" placeholder="Type a comment" class="form-control input-sm">
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img alt="user image" src="../../dist/img/user7-128x128.jpg" class="img-circle img-bordered-sm">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div><!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="form-group margin-bottom-none">
                          <div class="col-sm-9">
                            <input placeholder="Response" class="form-control input-sm">
                          </div>                          
                          <div class="col-sm-3">
                            <button class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                          </div>                          
                        </div>                        
                      </form>
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img alt="user image" src="../../dist/img/user6-128x128.jpg" class="img-circle img-bordered-sm">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div><!-- /.user-block -->
                      <div class="row margin-bottom">
                        <div class="col-sm-6">
                          <img alt="Photo" src="../../dist/img/photo1.png" class="img-responsive">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img alt="Photo" src="../../dist/img/photo2.png" class="img-responsive">
                              <br>
                              <img alt="Photo" src="../../dist/img/photo3.jpg" class="img-responsive">
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                              <img alt="Photo" src="../../dist/img/photo4.jpg" class="img-responsive">
                              <br>
                              <img alt="Photo" src="../../dist/img/photo1.png" class="img-responsive">
                            </div><!-- /.col -->
                          </div><!-- /.row -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->

                      <ul class="list-inline">
                        <li><a class="link-black text-sm" href="#"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                        <li><a class="link-black text-sm" href="#"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                        <li class="pull-right"><a class="link-black text-sm" href="#"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                      </ul>

                      <input type="text" placeholder="Type a comment" class="form-control input-sm">
                    </div><!-- /.post -->
                  ',
                  'active' => true
              ],
              [
                  'label' => 'Timeline',
                  'content' => '
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Read more</a>
                            <a class="btn btn-danger btn-xs">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-aqua"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                          <div class="timeline-body">
                            <img class="margin" alt="..." src="http://placehold.it/150x100">
                            <img class="margin" alt="..." src="http://placehold.it/150x100">
                            <img class="margin" alt="..." src="http://placehold.it/150x100">
                            <img class="margin" alt="..." src="http://placehold.it/150x100">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  ',
              ],
        ],
      ]);
  ?>
</div>
<?php
// MESSAGES
Modal::begin([
  'header' => '<h4>Send message to '.$model->first_name.'</h4>',
  'id' => 'modal',
  'size' => 'modal-lg',
  'options' => ['data-backdrop' => 'static', 'data-keyboard' => 'false'],
  ]);
echo '<div id="modalContent"></div>';
Modal::end();
?>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'username',
            'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'user_type',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>-->
<div class="row">
    <div class="col-md-9 pull-right">
        <div class="account-membership">Membership: Free User</div>
    </div>
</div>
<div class="col-md-3">
  <!-- Profile Image -->
  <div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" alt="User profile picture">
      <h3 class="profile-username text-center"><?= Yii::$app->user->identity->first_name.' '.Yii::$app->user->identity->last_name ?></h3>
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

      <a class="btn btn-primary btn-block" href="#"><b>Upgrade Account</b></a>
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
  <?= Yii::$app->UserComponent->staticMenuHeader(True) ?>
  <?php
  echo Tabs::widget([
      'items' => [
              [
                  'label' => 'Activity',
                  'content' => '
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img alt="user image" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-circle img-bordered-sm">
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
                        <img alt="user image" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-circle img-bordered-sm">
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
                        <img alt="user image" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-circle img-bordered-sm">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a class="pull-right btn-box-tool" href="#"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div><!-- /.user-block -->
                      <div class="row margin-bottom">
                        <div class="col-sm-6">
                          <img alt="Photo" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-responsive">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img alt="Photo" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-responsive">
                              <br>
                              <img alt="Photo" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-responsive">
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                              <img alt="Photo" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-responsive">
                              <br>
                              <img alt="Photo" src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=400&h=400" class="img-responsive">
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
              [
                  'label' => 'Settings',
                  'content' => '
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputName">Name</label>
                        <div class="col-sm-10">
                          <input type="email" placeholder="Name" id="inputName" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputEmail">Email</label>
                        <div class="col-sm-10">
                          <input type="email" placeholder="Email" id="inputEmail" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputName">Name</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Name" id="inputName" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputExperience">Experience</label>
                        <div class="col-sm-10">
                          <textarea placeholder="Experience" id="inputExperience" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputSkills">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" placeholder="Skills" id="inputSkills" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button class="btn btn-danger" type="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  ',
              ],
        ],
      ]);
  ?>
</div>
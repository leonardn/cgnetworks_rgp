<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Carousel;

$this->title = 'CG NETWORKS';
?>
<div class="column large-16 medium-16 small-16" style="padding:0px;"><div class="content-top-ads"><img src="images/cg-networks/ad-goes-here.jpg"></div></div>

<div class="row">
	<div class="columns large-10 medium-10 small-16">

	  <div class="banner">
		<img src="images/cg-networks/SCG-HOME_06.jpg">
	  </div>

	  <div class="row">
		<div class="columns large-6 medium-6 small-16">
		  <div class="homepage-freelancer-content">
			<a href="" class="show-all-links">show all</a>
			<h4 class="title-content">Freelancers</h4> 
			<img src="images/cg-networks/SCG-HOME_16.jpg">
			<div class="freelancer-name"><a href="#">Jim Gordon</a> <a href="#"><span>29</span></a></div>
			<p>Gordon os an important part of the barman mythos and has appeared in most other media adaptations of the character. This has included video games, animation and the live-action films</p>
			<button class="more-button">More freelancers</button>
		  </div>


		  <div class="homepage-articles-content">
			<h4 class="title-content">Articles</h4> 
			<ul>
			  <li>
			  <div>
			  	<p>Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis</p>
			  	<a href="" class="more-info-links">More</a>
			  </div>
			  </li>
			  <li>
			  <div>
			  	<p>Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis</p>
			  	<a href="" class="more-info-links">More</a>
			  </div>
			  </li>
			  <li>
			  <div>
			  	<p>Cras in mauris ac sem vestibulum pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis urna eget tellus sagittis eget cursus elit mollis</p>
			  	<a href="" class="more-info-links">More</a>
			  </div>
			  </li>
			</ul>
			
			<button class="more-button">Read More</button>
		  </div>
		</div>
		<div class="columns large-10 medium-10 small-16">

		  <div class="homepage-technology-content">
			<a href="" class="show-all-links">show all news</a>
			<h4 class="title-content">Technology</h4> 
			<?php
			echo Carousel::widget([
				'showIndicators' => false,
				'controls' => [
					'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>',
					'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>'
    			],
				'options' => [
					'class' => 'carousel slide'
				],
			    'items' => [
			        // the item contains only the image
			        //'<img src="images/htc.png"/>',
			        // equivalent to the above
			        //['content' => '<img src="images/3ds.jpg"/>'],
			        // the item contains both the image and the caption
			        [
			            'content' => '<img src="images/htc.png"/>',
			            'caption' => '<a href="#"><h4>New HTC One M9</h4><p>Leaked photos from HTC\'s flagship HTC One M9</p></a>',
			            'options' => [],
			        ],
			        [
			            'content' => '<img src="images/3ds.jpg"/>',
			            'caption' => '<a href="#"><h4>3D Technology</h4><p>The new 3DS XL has 3D that you\'ll actually use.</p></a>',
			            'options' => [],
			        ],
			    ]
			]);
			?>
		  </div>

		  <div class="homepage-gudget-content">
			<ul>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_27.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_35.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_38.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_42.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_27.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			  <li>
			  <div class="row">
				<div class="columns large-5 medium-5 small-16">
				  <img class="thumbnail" src="images/cg-networks/SCG-HOME_35.jpg">
				</div>
				<div class="columns large-11 medium-11 small-16">
				  <div class="gudget-title"><a href="#">Donec convallis urna eget tellus sagittis eget cursus elit mollis</a><a href="#"><span class="comment-count">20</span></a>
				  	<p>Eu sed appareat persequeris, sum mnesarchum mel ad. Scripta interpretaris periculis...</p>
				  </div>
				</div>
			  </div>
			  </li>
			</ul>
			<button class="more-button">Read More</button>
		  </div>

		</div>
	  </div>

	</div>
	<div class="columns large-6 medium-6 small-16">

	  <div class="homepage-login-content" <?php echo (!Yii::$app->user->isGuest)? 'style="display:none;" ':'' ?> >
		<?php if (Yii::$app->user->isGuest) { 
			//echo Yii::$app->UserComponent->staticMenu();
		// } else {
		?>
		<div class="login-title">Login</div>
		<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
		  <?= $form->field($model, 'username') ?>
		  <?= $form->field($model, 'password')->passwordInput() ?>
		  <div style="color:#999;margin:1em 0">
            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset'], ['style'=>'color:#337ab7']) ?>.
          </div>
		  <?= Html::submitButton('Login') ?>
		  <?= Html::a('Sign up here!', ['/site/signup'], ['class'=>'signup-here']) ?>
		<?php ActiveForm::end(); ?>
		<?php } ?>
	  </div>

	  <div class="homepage-popular-content">
		<a href="" class="show-all-links">show all news</a>
		<h4 class="title-content">POPULAR VIDEOS</h4> 
		<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Wildfire - Sam tsui (Offial lyrics video)</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Diceret contidieque</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Sumo affert est aliquam ex populo</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Wildfire - Sam tsui (Offial lyrics video)</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Diceret contidieque</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		  <li>
			<a href="#" class="thumbnail"><img src="images/cg-networks/video-image.jpg"></a>
			<div class="popular-name"><a href="#">Sumo affert est aliquam ex populo</a></div>
			<div class="popular-data">June 23rd 2014</div>
		  </li>
		</ul>

		<button class="more-button">Videos</button>
	  </div>

	  <div class="homepage-topuser-content">
		<h4 class="title-content">Top User</h4>
		<a href="" class="more-links">More ></a>
		<ul>
		  <li>
			<img src="images/cg-networks/SCG-HOME_20.jpg"><a href="#">Graham Hancock</a><span class="comment-count">20</span>
		  </li>
		  <li>
			<img src="images/cg-networks/SCG-HOME_24.jpg"><a href="#">Graham Hancock</a><span class="comment-count">20</span>
		  </li>
		  <li>
			<img src="images/cg-networks/SCG-HOME_29.jpg"><a href="#">Graham Hancock</a><span class="comment-count">20</span>
		  </li>
		  <li>
			<img src="images/cg-networks/SCG-HOME_31.jpg"><a href="#">Graham Hancock</a><span class="comment-count">20</span>
		  </li>
		  <li>
			<img src="images/cg-networks/SCG-HOME_34.jpg"><a href="#">Graham Hancock</a><span class="comment-count">20</span>
		  </li>
		</ul>

		<button class="more-button">More Freelancers</button>
	  </div>


	  <img src="images/cg-networks/SCG-HOME_40.jpg" style="width: 100%;margin-bottom: 30px;">

	</div>
</div>

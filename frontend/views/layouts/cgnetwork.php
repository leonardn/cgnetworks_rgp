<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\CGNetworkAppAsset;
use common\widgets\Alert;

CGNetworkAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="images/favicon.png" rel="shortcut icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    /*NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>

  	<header>
      <div class="cg-networks-header">
        <div class="row">
          <div class="columns large-6 medium-6 small-16">
              <a href="<?= Yii::$app->urlManager->createUrl(['/site/index']) ?>">
                <img src="images/cg-networks/cg-networks-logo.png">
              </a>
          </div>
          <?php if (!Yii::$app->user->isGuest) { 
              echo '<div class="columns large-6 medium-6 small-16">';
              echo '
                  <div class="columns large-5 medium-5 small-16 right">
                    <div class="header-social-links">
                      <a href="" class="rss-social-icon"></a>
                      <a href="" class="pinterest-social-icon"></a>
                      <a href="" class="instagram-social-icon"></a>
                      <a href="" class="facebook-social-icon"></a>
                      <a href="" class="twitter-social-icon"></a>
                    </div>
                  </div>
              ';
              echo Yii::$app->UserComponent->staticMenu().'</div>';
            } else {
          ?>
          <div class="columns large-3 medium-3 small-16">
            <div class="header-social-links">
              <a href="" class="rss-social-icon"></a>
              <a href="" class="pinterest-social-icon"></a>
              <a href="" class="instagram-social-icon"></a>
              <a href="" class="facebook-social-icon"></a>
              <a href="" class="twitter-social-icon"></a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </header>
    <nav class="cg-networks-menu">
      <div class="mobile-navigation"></div>
      <ul class="main-navigation float-container cg-networks-navigation">
        <li><?= Html::a('HOME', ['/site/index'], ['class,' => 'active']) ?></li>
        <!--<li><a href="" class="parent">EDUCATION</a></li>
        <li><a href="">TECH</a></li>
        <li><a href="">ARTS</a></li>
        <li><a href="">TRAVEL</a></li>
        <li><a href="">LOCAL</a></li>
        <li><a href="">LIFESTYLE</a></li>
        <li><a href="">CAREER</a></li>
        <li><a href="">PUBLICATIONS</a></li>
        <li><a href="">SPORTS</a></li>
        <li><a href="">BUSINESS</a></li>
        <li><a href="">SOCIETY</a></li>
        <li><a href="">LIFE</a></li>
        <li><a href="">MEDIA</a></li>
        <li><a href="">ENTERTAINMENT</a></li>
        <li><a href="">DATING</a></li>
        <li><a href="">GLOBALIZATION</a></li>-->
        <?= Yii::$app->LayoutComponent->layoutMenu(); ?>
      </ul>
    </nav>
	
    <content class="cg-networks-content">
		<div class="row">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
    </content>
</div>

<footer class="cg-networks-footer">
  <div class="cg-networks-footer-information float-container">
	<div class="row">
	  <div class="columns large-16 medium-16 small-16">
		<ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
		  <li>
			<div class="contact-information">
			  <h3>Contact Information</h3>
			  <div class="footer-contact-icon">+371 2 83 48 271</div>
			  <div class="footer-mail-icon">design@rgpacific.com</div>
			  <p>Phasellus semper nisi vel mi sollicitudin commodo congue risus imperdiet. Cras massa lacus, volutpat bibendum ornare ut, pharetra non quam. Donec nec neque lectus.</p>
			  <p><b>Phasellus semper nisi vei mi sollcitudin commodo congue risus imperdiet</b></p>
			</div>
		  </li>
		  <li>
			<div class="popular-articles">
			  <h3>Popular Articles</h3>
			  <ul>
				<li>
				  <img src="images/cg-networks/popular-articles-image.png">
				  <b>Southwest France's best for mountains: The Pyrenees</b> <span class="comment-count">21</span>
				</li>
				<li>
				  <img src="images/cg-networks/popular-articles-image.png">
				  <b>Southwest France's best for mountains: The Pyrenees</b> <span class="comment-count">21</span>
				</li>
				<li>
				  <img src="images/cg-networks/popular-articles-image.png">
				  <b>Southwest France's best for mountains: The Pyrenees</b> <span class="comment-count">21</span>
				</li>
			  </ul>
			  <a href="" class="show-all-articles">show all articles</a>
			</div>
		  </li>
		  <li>
			<div class="subscribe-newsletter">
			  <h3>Subscribe Newsletter</h3>
			  <p>Te lorem libris iracundia eos. Ne eam liber veritus, eos eu agam recteque, exerci reformidans sea no</p>
			  <form class="newsletter-form">
				<input type="text" placeholder="Name..">
				<input type="text" placeholder="Email..">
				<input type="submit" value="Subscribe">
			  </form>
			</div>
		  </li>
		</ul>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="footer-container cg-networks-footer float-container">
	  <div class="columns large-8 medium-8 small-16">
		<div class="cg-networks-copyright">© Copyright 2015 <b>S-CG</b> | <a href="www.s-cg.com">www.s-cg.com</a></div>
	  </div>
	  <div class="columns large-8 medium-8 small-16">
		<div class="footer-links"><a href="">Homepage</a> / <a href="">Blog view</a> / <a href="">Photo gallery</a> / <a href="">Contact us</a></div>
	  </div>
	</div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

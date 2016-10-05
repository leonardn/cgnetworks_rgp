<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\helpers\Html;

class UserComponent extends Component {

	public function staticMenu()
	{
		$menu = '
			<div class="login-title">
			    <a href="'.Yii::$app->urlManager->createUrl(['/user/index']).'">
			    <img src="https://placeholdit.imgix.net/~text?txtsize=60&txt=%5Bimg%5D&w=200&h=200"/>
			    '.Yii::$app->user->identity->username.'</a> - ('.Html::a('logout', ['/site/logout'], ['data-method'=>'post']).')
			</div>
			<div class="account-link-content row" style="margin-top:10px;">
			  <ul>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/gallery']).'" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="PHOTOS"><img src="images/cg-networks/user-account-links-photos.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/friend']).'" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="FRIENDS"><img src="images/cg-networks/user-account-links-friends.png"></a></li>
			    <li><a href="" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="WRITINGS"><img src="images/cg-networks/user-account-links-writings.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/message']).'" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="MESSAGES"><img src="images/cg-networks/user-account-links-messages.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/friend-request']).'" class="thumbnail" data-toggle="tooltip" data-placement="bottom" title="NEW&nbsp;REQUESTS"><img src="images/cg-networks/user-account-links-new-requests.png"></a></li>
			  </ul>
			</div>
		';
		return $menu;
	}

	public function staticMenuHeader($menuOnly = False) {
		$menu = "";
		if(!$menuOnly)
			$menu .='<div class="account-user-name"><a href="'.Yii::$app->urlManager->createUrl(['/user/index']).'">'.Yii::$app->user->identity->first_name ." ". Yii::$app->user->identity->last_name.'</a></div><div class="account-membership">Membership: Free User</div>';
		
		$menu .= '
			<div class="account-link-content row" style="margin:0px;">
			  <ul>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/gallery']).'" class="thumbnail"><img src="images/cg-networks/user-account-links-photos.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/friend']).'" class="thumbnail"><img src="images/cg-networks/user-account-links-friends.png"></a></li>
			    <li><a href="" class="thumbnail"><img src="images/cg-networks/user-account-links-writings.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/message']).'" class="thumbnail"><img src="images/cg-networks/user-account-links-messages.png"></a></li>
			    <li><a href="'.Yii::$app->urlManager->createUrl(['/user/friend-request']).'" class="thumbnail"><img src="images/cg-networks/user-account-links-new-requests.png"></a></li>
			  </ul>
			</div>
		';
		return $menu;
	}

}

?>
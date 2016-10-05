<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\helpers\Html;
use backend\models\Pages;

class LayoutComponent extends Component {

	public static function layoutMenu() 
	{
		$htmlString = "";
		$pages = Pages::find()->where(['is_private' => 'false', 'status' => 'publish'])->all();

		foreach($pages as $menu) 
        {
          $htmlString .= '<li>'.Html::a(strtoupper($menu->title), ['/page/view', 'slug' => $menu->slug]).'</li>';
        }

        return $htmlString;
	}

}
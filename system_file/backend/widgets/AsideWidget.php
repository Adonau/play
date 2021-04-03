<?php 
namespace backend\widgets;

use yii\base\Widget;

class AsideWidget extends Widget
{
  public function run()
  {
    return $this->render('aside');   	     
  }
}
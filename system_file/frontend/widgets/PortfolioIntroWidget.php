<?php

namespace frontend\widgets;

use yii\base\Widget;
use common\models\Pages;

class PortfolioIntroWidget extends Widget
{
  public function run()
  {

    $port_pages = Pages::find()->all();

    return $this->render('portfolio-intro', ['port_pages' => $port_pages]);
  }
}
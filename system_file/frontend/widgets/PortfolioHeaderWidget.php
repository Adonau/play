<?php

namespace frontend\widgets;

use yii\base\Widget;

class PortfolioHeaderWidget extends Widget
{
  public function run()
  {
    return $this->render('portfolio-header');
  }
}
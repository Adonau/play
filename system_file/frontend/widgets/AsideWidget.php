<?php

namespace frontend\widgets;

use yii\base\Widget;

class AsideWidget extends Widget
{
  public function run()
  {
    return $this->render('aside');
  }
}
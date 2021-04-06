<?php

namespace frontend\widgets;

use yii\base\Widget;
use common\models\Pages;

class PreloadWidget extends Widget
{
  public function run()
  {
    return $this->render('preload');
  }
}
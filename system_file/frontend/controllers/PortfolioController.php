<?php

namespace frontend\controllers;

class PortfolioController extends \yii\web\Controller
{
    public function actionUnconquered()
    {
        $this->layout = '@app/views/layouts/page_port.php';

        return $this->render('unconquered');
    }

    public function actionCayo()
    {
        $this->layout = '@app/views/layouts/cayo_layot.php';

        return $this->render('cayo');
    }

    public function actionPlay()
    {
        $this->layout = '@app/views/layouts/play_layot.php';

        return $this->render('play');
    }

}

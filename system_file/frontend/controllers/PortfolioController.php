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

    public function actionTattoo()
    {
        $this->layout = '@app/views/layouts/tatto_layout.php';

        return $this->render('tattoo');
    }

    public function actionFashon()
    {
        $this->layout = '@app/views/layouts/fashon_layout.php';

        return $this->render('fashon');
    }

    public function actionPandemic()
    {
        $this->layout = '@app/views/layouts/pandemic_layout.php';

        return $this->render('pandemic');
    }

    public function actionPaintball()
    {
        $this->layout = '@app/views/layouts/paintball_layout.php';

        return $this->render('paintball');
    }

    public function actionLineage()
    {
        $this->layout = '@app/views/layouts/lineage_layout.php';

        return $this->render('lineage');
    }

}

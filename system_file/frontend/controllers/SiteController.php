<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Portfolio;
use common\models\Pages;

use common\models\IndexPage;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $indexpage = IndexPage::find()->all();

        return $this->render('index', ['indexpage' => $indexpage]);
    }

    public function actionAboutMe()
    {
        return $this->render('about-me');
    }

    public function actionPortfolio()
    {
        $this->layout = '@app/views/layouts/portfolio.php';

        $port = Portfolio::find()->all();

        $name = 'all_port';
        $port_pages = Pages::find()->where('page_name = :page_name', [':page_name' => $name])->all();

        return $this->render(
            'portfolio',
            [
                'port' => $port,
                'port_pages' => $port_pages,
            ]
        );
    }

    public function actionPortfolioGames()
    {
        $this->layout = '@app/views/layouts/portfolio.php';

        $sel = 'game';
        $port = Portfolio::find()->where('select_port = :select_port',[':select_port' => $sel])->all();

        $name = 'game_port';
        $port_pages = Pages::find()->where('page_name = :page_name', [':page_name' => $name])->all();

        return $this->render(
            'portfolio-games',
            [
                'port' => $port,
                'port_pages' => $port_pages,
            ]
        );
    }

    public function actionPortfolioCorporate()
    {
        $this->layout = '@app/views/layouts/portfolio.php';

        $sel = "corp";
        $port = Portfolio::find()->where('select_port = :select_port',[':select_port' => $sel])->all();

        $name = 'corp_port';
        $port_pages = Pages::find()->where('page_name = :page_name', [':page_name' => $name])->all();

        return $this->render(
            'portfolio-corporate',
            [
                'port' => $port,
                'port_pages' => $port_pages,
            ]
        );
    }

    public function actionPortfolioLanding()
    {
        $this->layout = '@app/views/layouts/portfolio.php';

        $sel = "land";
        $port = Portfolio::find()->where('select_port = :select_port',[':select_port' => $sel])->all();

        $name = 'land_port';
        $port_pages = Pages::find()->where('page_name = :page_name', [':page_name' => $name])->all();

        return $this->render(
            'portfolio-landing',
            [
                'port' => $port,
                'port_pages' => $port_pages,
            ]
        );
    }

    public function actionPortfolioInformative()
    {
        $this->layout = '@app/views/layouts/portfolio.php';

        $sel = "info";
        $port = Portfolio::find()->where('select_port = :select_port',[':select_port' => $sel])->all();

        $name = 'info_port';
        $port_pages = Pages::find()->where('page_name = :page_name', [':page_name' => $name])->all();

        return $this->render(
            'portfolio-informative',
            [
                'port' => $port,
                'port_pages' => $port_pages,
            ]
        );
    }
}

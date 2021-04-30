<?php
foreach ($port_pages as $page) {
    Yii::$app->view->params['h-title'] = $page->h1_title;
    Yii::$app->view->params['under-title'] = $page->h1_undertitle;
    Yii::$app->view->params['under-text'] = $page->h1_undertext;
}
?>

<div class="portfolio">

    <div class="portfolio__list">

        <?php foreach ($port as $por) : ?>
            <div class="portfolio__link" target="_blank">
                <a class="portfolio__image" href="<?= $por->port_link ?>" style="background-image: url(../image/portfolio/link/<?= $por->port_img ?>);">
                    <span class="portfolio__eye">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </span>
                </a>

                <div class="portfolio__text-wrap">
                    <a class="portfolio__desc" href="<?= $por->port_desc ?>" target="_blank">Разметка</a>
                    <a class="portfolio__main-word" href="<?= $por->port_main ?>" target="_blank">Стили</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>
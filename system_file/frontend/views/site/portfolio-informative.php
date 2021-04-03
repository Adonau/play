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
            <a class="portfolio__link" target="_blank" href="<?= $por->port_link ?>">
                <div class="portfolio__image" style="background-image: url(../image/portfolio/link/<?= $por->port_img ?>);">
                    <span class="portfolio__eye">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="portfolio__text-wrap">
                    <div class="portfolio__desc"><?= $por->port_desc ?></div>
                    <div class="portfolio__main-word"><?= $por->port_main ?></div>
                </div>
            </a>
        <?php endforeach; ?>

    </div>
    
</div>
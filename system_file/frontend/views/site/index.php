<?php


use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Ожидание контента';
?>

<header class="header">
    <nav class="header__nav">
        <ul class="header__list" id="page-slider-list">
            <li class="header__item">
                <a class="header__link" href="#one">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </li>
            <li class="header__item">
                <a class="header__link" href="#two">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                </a>
            </li>
            <li class="header__item">
                <a class="header__link" href="#three">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </a>
            </li>
            <li class="header__item">
                <a class="header__link" href="#four">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>

<div class="wrapper" id="main">

    <div class="intro section" id="one">
        <h1 class="intro__title">
            <span class="intro__word">d</span>
            <span class="intro__word">e</span>
            <span class="intro__word">s</span>
            <span class="intro__word">i</span>
            <span class="intro__word">g</span>
            <span class="intro__word">n</span>
            <span class="intro__word">-</span>
            <span class="intro__word">w</span>
            <span class="intro__word">t</span>
        </h1>
        <div class="intro__undertitle">Сайт <div class="intro__undertitle-text"></div></div>
        <div class="preload"></div>
    </div>

    <div class="portfolio section" id="two">

        <?php foreach ($port as $por) : ?>
            <div class="portfolio__item">
                <a class="portfolio__img-wrap" href="<?= $por->port_link ?>" target="_blank">
                    <img class="portfolio__img" src="../image/portfolio/link/<?= $por->port_img ?>" alt="">
                </a>

                <div class="portfolio__code-link-wrap">
                    <a class="portfolio__code-link" href="<?= $por->port_desc ?>" target="_blank">HTML</a>
                    <a class="portfolio__code-link" href="<?= $por->port_main ?>" target="_blank">CSS</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="skill section" id="three">
        <ul class="skill__list">

            <div class="skill__item">
                <span class="skill__name">HTML</span>
            </div>

            <li class="skill__item">
                <span class="skill__name">CSS</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">SCSS</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">BEM</span>
            </li>


            <li class="skill__item">
                <span class="skill__name">JS</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">JQuery</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">Gulp</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">PHP</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">YII2</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">Figma</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">Photoshop</span>
            </li>

            <li class="skill__item">
                <span class="skill__name">GIT</span>
            </li>
        </ul>
        <div class="preload"></div>
    </div>

    <div class="about section" id="four">
        <h2 class="about__title">Обо мне</h2>
        <p class="about__text">Меня зовут Глеб, имею опыт в вёрстке и программировании более двух лет. Также имеется опыт
            SEO-оптимизации в личных проектах, сбор ключей, подготовка текста, естественно семантические теги. Опыт вывода сч-запросов в топ-3 и
            вч-запросов в топ-10, работа с функционалом Яндекс-метрики и Гугл-аналитики.</p>

        <ul class="about__list">
            <li class="about__item">
                <span class="about__text-name">Возраст :</span>
                <span class="about__text-num">31</span>
            </li>

            <li class="about__item">
                <span class="about__text-name">Город :</span>
                <span class="about__text-num">Ташкент</span>
            </li>
            <li class="about__item">
                <span class="about__text-name">E-mail :</span>
                <a class="about__text-num" href="mailto:gleb.sharapov@yahoo.com?">gleb.sharapov@yahoo.com</a>
            </li>
            <li class="about__item">
                <span class="about__text-name">Телефон :</span>
                <a class="about__text-num" href="tel:+998931042053">+99 893 1042053</a>
            </li>
        </ul>

        <div class="preload"></div>
    </div>
</div>
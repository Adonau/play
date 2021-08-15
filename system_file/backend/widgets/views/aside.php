<?php

use yii\helpers\Url;
?>

<aside class="aside">

    <nav class="aside__nav">

        <ul class="aside__list accordion-menu">

            <li class="aside__item">
                <div class="aside__point dropdownlink"><i class="fas fa-pager"></i>Текст на страницах</div>

                <ul class="aside__list-drop submenuItems">
                    <li class="aside__item-drop">
                        <a class="aside__link-drop" href="<?= Url::to(['/indexpage']); ?>">Главная страница</a>
                    </li>
                    <li class="aside__item-drop">
                        <a class="aside__link-drop" href="<?= Url::to(['/pages']); ?>">Страницы-портфолио</a>
                    </li>
                </ul>
                
            </li>


            <li class="aside__item">
                <div class="aside__point dropdownlink"><i class="fas fa-passport"></i>Макеты в Портфолио</div>
                <ul class="aside__list-drop submenuItems">
                    <li class="aside__item-drop">
                        <a class="aside__link-drop" href="<?= Url::to(['/portfolio']); ?>">Портфолио-макеты</a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</aside>
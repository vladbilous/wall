<?php get_header();?>

<main>
    <section class="background-color-black">
        <div class="wall block-slider">
            <div class="slider row1">

                <div><img src="<?php echo get_template_directory_uri() ?>/img/slide.png" alt=""/></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/img/slide.png" alt=""/></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/img/slide.png" alt=""/></div>
                <div><img src="<?php echo get_template_directory_uri() ?>/img/slide.png" alt=""/></div>

            </div>
        </div>
    </section>

    <section class="background-color-black" id="wall">
        <div class="line"></div>
        <div class="wall">
            <h1 class="title">              <?php pll_e( "title" ); ?>

            </h1>
        </div>
        <div class="wall" >
            <div class="description" >
                <?php pll_e( "description" ); ?>
<!--                <p>-->
<!--                    Ми об’єднуємо успішних людей, які досягли висот у різних царинах людської діяльності та знаходяться на цьому шляху.</p>-->
<!--                <p>-->
<!--                    Саме такі люди мають стати міцною стіною захисту на шляху негативних тенденцій сьогодення: хаосу, популізму, маргинальності, маніпуляцій, підкупу, гібридним впливам.-->
<!--                </p>-->
<!--                <p>-->
<!--                    Такі люди базують свій поступ на традиційних цінностях свобод та прав, цілеспрямованості та наполегливої праці, моральності і духовності.-->
<!--                </p>-->
            </div>
        </div>
    </section>

    <section class="background-color-00131b">
        <div class="wall">
            <div class="row2">
                <div class="row2__big-img1">
                    <img src="<?php echo get_template_directory_uri() ?>/img/img-big.png" alt=""/>
                </div>
                <div class="row2__nember-text">
                    <div class="line-vertical"></div>
                    <h2 class="h2">THE WALL WORLD CLUB:</h2>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/1.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club1" ); ?></span>
                    </div>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/2.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club2" ); ?>
                                </span>
                    </div>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/3.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club3" ); ?>
                                </span>
                    </div>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/4.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club4" ); ?>
                                </span>
                    </div>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/5.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club5" ); ?>
                                </span>
                    </div>
                    <div class="row2__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/6.png" alt=""/>
                        <span class="row2__text"><?php pll_e( "club6" ); ?>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="back-img-stars">
        <div class="wall">
            <div class="row3">
                <h2><?php pll_e( "progress" ); ?></h2>
                <hr class="row3__hr">
                <p class="row3__desc"><?php pll_e( "progress-desc" ); ?></p>
                <div class="row3__blocks">
                    <div class="row3__block1">
                        <hr class="row3__block1-hr">
                        <h3><?php pll_e( "progress-block1-title" ); ?></h3>

                        <p>
                            <?php pll_e( "progress-block1-desc" ); ?>
                        </p>
                    </div>
                    <div class="row3__block2">
                        <h3><?php pll_e( "progress-block2-title" ); ?></h3>

                        <p>
                            <?php pll_e( "progress-block2-desc" ); ?>
                        </p>
                    </div>
                    <div class="row3__block3">
                        <h3><?php pll_e( "progress-block3-title" ); ?></h3>

                        <p>
                            <?php pll_e( "progress-block3-desc" ); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="background-color-00131b" id="cooparation">
        <div class="wall">
            <div class="row4">
                <h2><?php pll_e( "cooperation-title" ); ?></h2>
                <hr class="row4__hr">
                <p class="row4__desc"><?php pll_e( "cooperation-desc" ); ?></p>
                <div class="row4__blocks">
                    <div class="row4__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/build_kompany.png" alt=""/>
                        <h3><?php pll_e( "cooperation-block1-title" ); ?></h3>

                        <p>
                            <?php pll_e( "cooperation-block1-desc" ); ?>
                        </p>
                    </div>
                    <div class="row4__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/bank.png" alt=""/>
                        <h3><?php pll_e( "cooperation-block2-title" ); ?></h3>

                        <p>
                            <?php pll_e( "cooperation-block2-desc" ); ?>
                        </p>
                    </div>
                </div>
                <div class="row4__blocks">
                    <div class="row4__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/agro-company.png" alt=""/>
                        <h3><?php pll_e( "cooperation-block3-title" ); ?></h3>

                        <p>
                            <?php pll_e( "cooperation-block3-desc" ); ?>

                        </p>
                    </div>
                    <div class="row4__block2 row4__block2-last">
                        <img src="<?php echo get_template_directory_uri() ?>/img/international_institutions.png" alt=""/>
                        <h3><?php pll_e( "cooperation-block4-title" ); ?></h3>

                        <p>
                            <?php pll_e( "cooperation-block4-desc" ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-black row5">
        <div class="line"></div>
        <div class="wall">
            <h1 class="title"><?php pll_e( "rule-title" ); ?></h1>
        </div>
        <div class="wall">
            <table>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-1name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-1company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-2name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-2company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-3name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-3company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-4name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-4company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-5name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-5company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-6name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-6company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-7name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-7company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-8name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-8company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-9name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-9company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-10name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-10company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-11name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-11company" ); ?></td>
                </tr>
                <tr>
                    <td><hr class="dots"><?php pll_e( "rule-12name" ); ?></td>
                    <td class="td2"><?php pll_e( "rule-12company" ); ?></td>
                </tr>
            </table>
        </div>
    </section>

    <section class="background-color-af8f47">
        <div class="wall">
            <div class="row6">
                <div class="row6__title">
                    <span class="h2"><?php pll_e( "residents-title" ); ?></span>
                    <img class="arrow-bottom" src="<?php echo get_template_directory_uri() ?>/img/arrow-bottom.png" alt=""/>
                    <img  class="arrow-top" src="<?php echo get_template_directory_uri() ?>/img/arrow-top.png" alt=""/>
                </div>
                <div class="row6__table">
                    <table class="" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-1name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-1company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-2name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-2company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-3name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-3company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-4name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-4company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-5name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-5company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-6name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-6company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-7name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-7company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-8name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-8company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-9name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-9company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-10name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-10company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-11name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-11company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-12name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-12company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-13name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-13company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-14name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-14company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-15name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-15company" ); ?></td>
                        </tr>
                        <tr>
                            <td><hr class="dots"><?php pll_e( "residents-16name" ); ?></td>
                            <td class="td2"><?php pll_e( "residents-16company" ); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-00131b">
        <div class="wall">
            <div class="row7">
                <div class="row7__nember-text">
                    <div class="line-vertical"></div>
                    <h2 class="h2"><?php pll_e( "cooperation-title" ); ?></h2>

                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/1.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation1" ); ?>
                        </span>
                    </div>
                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/2.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation2" ); ?>
                        </span>
                    </div>
                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/3.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation3" ); ?>
                        </span>
                    </div>
                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/4.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation4" ); ?>
                        </span>
                    </div>
                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/5.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation5" ); ?>
                        </span>
                    </div>
                    <div class="row7__img-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/6.png" alt=""/>
                        <span class="row7__text">
                            <?php pll_e( "cooperation6" ); ?>
                        </span>
                    </div>
                </div>

                <div class="row7__big-img1">
                    <img class="row7__big-img1-pc" src="<?php echo get_template_directory_uri() ?>/img/img-big2.png" alt=""/>
                    <img class="row7__big-img1-mob" src="<?php echo get_template_directory_uri() ?>/img/img-big2-mob.jpg" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-black">
        <div class="wall">
            <div class="row8">
                <h2><?php pll_e( "bonus-title" ); ?></h2>

                <div class="row8__blocks">
                    <div class="row8__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/corporate_development.png" alt=""/>
                        <h3><?php pll_e( "bonus1-title" ); ?></h3>
                        <p>
                            <?php pll_e( "bonus1-desc" ); ?>
                        </p>
                    </div>
                    <div class="row8__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/support.png" alt=""/>
                        <h3><?php pll_e( "bonus2-title" ); ?></h3>
                        <p>
                            <?php pll_e( "bonus2-desc" ); ?>
                        </p>
                    </div>
                    <div class="row8__block3">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trainings-and-seminars.png" alt=""/>
                        <h3><?php pll_e( "bonus3-title" ); ?></h3>
                        <p>
                            <?php pll_e( "bonus3-desc" ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-af8f47" id="benefits">
        <div class="wall">
            <div class="row9">
                <h2><?php pll_e( "benefist-title" ); ?></h2>
                <div class="row9__rowA">
                    <div class="row9__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits1.png" alt=""/>
                        <p class="row9__rowA__text1">
                            <?php pll_e( "benefist1" ); ?>
                        </p>
                    </div>
                    <div class="row9__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits2.png" alt=""/>
                        <p class="row9__rowA__text2">
                            <?php pll_e( "benefist2" ); ?>
                        </p>
                    </div>
                    <div class="row9__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits3.png" alt=""/>
                        <p class="row9__rowA__text3">
                            <?php pll_e( "benefist3" ); ?>
                        </p>
                    </div>
                    <div class="row9__block1">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits4.png" alt=""/>
                        <p class="row9__rowA__text4">
                            <?php pll_e( "benefist4" ); ?>
                        </p>
                    </div>

                </div>
                <div class="row9__rowB">
                    <div class="row9__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits5.png" alt=""/>
                        <p class="row9__rowB__text1">
                            <?php pll_e( "benefist5" ); ?>
                        </p>
                    </div>
                    <div class="row9__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits6.png" alt=""/>
                        <p class="row9__rowB__text2">
                            <?php pll_e( "benefist6" ); ?>
                        </p>
                    </div>
                    <div class="row9__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits7.png" alt=""/>
                        <p class="row9__rowB__text3">
                            <?php pll_e( "benefist7" ); ?>
                        </p>
                    </div>
                    <div class="row9__block2">
                        <img src="<?php echo get_template_directory_uri() ?>/img/benefits8.png" alt=""/>
                        <p class="row9__rowB__text4">
                            <?php pll_e( "benefist8" ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-black news"  id="news">
        <div class="wall">
            <h2><?php pll_e( "news-title" ); ?></h2>

            <div class="block-slider background-color-00131b">
                <div class="slider-news row11">



                    <?php

                    $args = array(
//                        'posts_per_page' => 5,
                        'post_status'      => 'publish',
                        'suppress_filters' => false,
//                        'order' => 'ASC'
                    );

                    $recent_posts = get_posts( $args );

                    $list_items_markup = '';

                    foreach ( $recent_posts as $post ) {

                        $query = new WP_Query($args);
                        $title = get_the_title( $post );
                        $content = $post->post_content;;
                        $img =  get_the_post_thumbnail( $post->ID, 'full');
                        echo '

                            <div>
                                <h3>' . $title . '</h3>
                                <div class="row11__content">
                                  ' . $content . ' 
                                   
                                </div>
                                <div class="row11__block-img">
                                    <img src="' . $img .'" alt=""/>
                                </div>
                            </div>
                        ';

                    }
                    ?>







<!--                    <div>-->
<!--                        <h3>THE WALL-UKRAINE ЗАВЕРШУЄ ТЕСТУВАННЯ-->
<!--                            НЕЗАЛЕЖНОЇ ПЛАТФОРМИ ЕЛЕКТРОННИХ ЗАКУПІВЕЛЬ</h3>-->
<!--                        <div class="row11__content">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    Під час тестування платформи електронних закупівель, що мала робочу назву Good Contracting,-->
<!--                                    здійснено закупівель на суму майже 10 млн. грн.-->
<!--                                    До системи додано близько 500 перевірених постачальників будівельних матеріалів.-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    Платформу створено з метою впровадження в Україні регулювання управління-->
<!--                                    вартістю об’єктів будівництва. Основна перевага платформи полягає в тому,-->
<!--                                    що вона є цифровим двійником реальних бізнес-процесів, якими наразі-->
<!--                                    оперують провідні девелоперські та будівельні компанії на етапі контрактування та будівництва.-->
<!---->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    Статистичний модуль платформи дозволить користуватись актуальними-->
<!--                                    цифровими даними про вартість матеріалів-->
<!--                                    та робіт на всіх етапах розвитку проекту.-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    За результатами позитивних оцінок тестування платформи та пропозицій-->
<!--                                    наших резидентів ми маємо намір надати їй життєве ім’я – RATE.UA. Як вам назва?-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="row11__block-img">-->
<!--                            <img src="--><?php //echo get_template_directory_uri() ?><!-- /img/news.png" alt=""/>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <section class="background-color-black" id="contacts">
        <div class="wall">
            <h2><?php pll_e( "contacts-title" ); ?></h2>

            <div class="row10">
                <div class="row10__map">
                    <!--                            <img src="img/map.png" alt=""/>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.0118923678326!2d30.487661834200768!3d50.45883886520746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce7b447d85f7%3A0x4da9cb9461773998!2z0YPQuy4g0KHRgtGD0LTQtdC90YfQtdGB0LrQsNGPLCA10JAsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1595925705459!5m2!1sru!2sua" class="map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <div class="row10__footer-icons">

                    <a target="_blank" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%A1%D1%82%D1%83%D0%B4%D0%B5%D0%BD%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F,+5%D0%90,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4588389,30.4876618,19z/data=!4m5!3m4!1s0x40d4ce7b447d85f7:0x4da9cb9461773998!8m2!3d50.458914!4d30.487863">
                        <p>
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-address.png" alt="Україна, Київ, Студентська, будинок 5-7В" />
                            <span><?php pll_e( "contacts-addr" ); ?></span>
                        </p>
                    </a>

                    <a href="tel:380679208282">
                        <p>
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-phone.png" alt="" />
                            <span>+380 67 920 82 82</span>
                        </p>
                    </a>

                    <a href="mailto:the.wall.ukraine@gmail.com">
                        <p>
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-mail.png" alt="the.wall.ukraine@gmail.com" />
                            <span>the.wall.ukraine@gmail.com</span>
                        </p>
                    </a>

                    <a target="_blank" href="https://www.facebook.com/thewallworldclub">
                        <p>
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-fb.png" alt="facebook.com/thewallworldclub" />
                            <span>facebook.com/thewall</span>
                        </p>
                    </a>

                    <a target="_blank" href="">
                        <p>
                            <img src="<?php echo get_template_directory_uri() ?>/img/footer-youtube.png" alt="" />
                            <span>the_wall</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>

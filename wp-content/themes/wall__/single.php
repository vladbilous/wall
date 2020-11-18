<?php
get_header();
?>

    <div class="single">

        <div class="wall post common ">

            <?php the_post(); // Получаем данные о записи ?>
            <article class="post__article background-color-00131b">
                <a href="/#news"><img class="img-krest" src="<?php echo get_template_directory_uri() ?>/img/krest.png"></a>

                <h1 class="post__title"><?php the_title(); // Заголовок записи ?></h1>
                <div class="post__description">
                    <?php the_content(); // Выводим содержимое записи ?>
                </div>
                <div class="post__img">
                    <?php the_post_thumbnail("full"); ?>
                </div>
            </article>
        </div> <!-- .post .common -->
    </div> <!-- .content -->

<?php
get_footer();
?>
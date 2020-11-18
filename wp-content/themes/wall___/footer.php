

<script src="<?= bloginfo('template_directory'); ?>/js/jquery3-5-1.min.js"></script>
<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
<!--<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>-->
<!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->

<script src="<?= bloginfo('template_directory'); ?>/js/main.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick(({
            arrows: true,
        }));
    });
    $(document).ready(function(){
        $('.slider-news').slick(({
            arrows: true,
        }));
    });

    $('.row9__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,

                }
            }

        ]
    });

    // $('.row10__slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     autoplay: false,
    //     vertical: true,
    //     autoplaySpeed: 2000,
    //     slidesPerRow: 2,
    //     rows: 2,
    // });

    $(function(){
        $('.row10__slider').slick({
            vertical: true,
            verticalSwiping: true,
            slidesToShow: 4,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,

                    }
                }

            ]
            // slidesPerRow: 2,
            // rows: 2,

        });
    });





</script>
<!-- Initialize Swiper -->
<!--<script>-->
<!--    var swiper = new Swiper('.swiper-container', {-->
<!--        direction: 'vertical',-->
<!--        slidesPerView: 2,-->
<!--        spaceBetween: 30,-->
<!--        mousewheel: true,-->
<!--        pagination: {-->
<!--            el: '.swiper-pagination',-->
<!--            clickable: true,-->
<!--        },-->
<!--    });-->
<!---->
<!---->
<!---->
<!--</script>-->
</body>
</html>
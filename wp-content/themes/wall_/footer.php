

<script src="<?= bloginfo('template_directory'); ?>/js/jquery3-5-1.min.js"></script>
<script src="<?= bloginfo('template_directory'); ?>/js/main.js"></script>

<script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/slick/slick.min.js"></script>

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
</script>
</body>
</html>
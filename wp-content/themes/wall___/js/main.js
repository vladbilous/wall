// $(document).on('click', '.arr', function(){
//     console.log('asdas');
//     $(this).siblings('.row6__table').toggleClass('hide');
// });


// $(function(){
//     $(".arrow-bottom").on("click", function(){
//         $(this).css('display', 'none');
//         $('.row6__table').css('display', 'inline');
//         $('.arrow-top').css('display', 'inline')
//     });
// });
//
// $(function(){
//     $(".arrow-top").on("click", function(){
//
//         $(this).css('display', 'none');
//         $('.row6__table').css('display', 'none');
//         $('.arrow-bottom').css('display', 'inline');
//
//     });
// });
// $(function(){
//     $(".row3__block1 .arr-bottom").on("click", function(){
//         $(".row3__block1 p").css('display', 'block');
//         $(this).css('display', 'none');
//         $(".row3__block1").addClass('background-color-af8f47');
//         $(".row3__block1").css('height', 'auto');
//     });
// });
// $(function(){
//     $(".row3__block2 .arr-bottom").on("click", function(){
//         $(".row3__block2 p").css('display', 'block');
//         $(this).css('display', 'none');
//         $(".row3__block2").addClass('background-color-af8f47');
//         $(".row3__block2").css('height', 'auto');
//
//     });
// });
// $(function(){
//     $(".row3__block3 .arr-bottom").on("click", function(){
//         $(".row3__block3 p").css('display', 'block');
//         $(this).css('display', 'none');
//         $(".row3__block3").addClass('background-color-af8f47');
//         $(".row3__block3").css('height', 'auto');
//
//
//     });
// });
//
//
// $(function(){

//     $(".row3__block1 .arr-top").on("click", function(){
//         $(".row3__block1 p").css('display', 'none');
//         $(".row3__block1 .arr-bottom").css('display', 'block');
//         $(".row3__block1").removeClass('background-color-af8f47');
//     });
// });
//
// $(function(){
//     $(".row3__block2 .arr-top").on("click", function(){
//         $(".row3__block2 p").css('display', 'none');
//         $(".row3__block2 .arr-bottom").css('display', 'block');
//         $(".row3__block2").removeClass('background-color-af8f47');
//     });
// });
//
// $(function(){
//     $(".row3__block3 .arr-top").on("click", function(){
//         $(".row3__block3 p").css('display', 'none');
//         $(".row3__block3 .arr-bottom").css('display', 'block');
//         $(".row3__block3").removeClass('background-color-af8f47');
//     });
// });



// document.getElementsByClassName('arr-bottom').onclick = function() {
//     console.log('aasd');
//     $('.row3__block1 p').fadeIn();
// }




// jQuery(function($) {
//     $(".arr-bottom__block1").click(function() {
//         $(".row3__block1 p").fadeIn();
//         // $(".row3__block1").css("height", "auto");
//         $(".arr-bottom__block1").css('display', 'none');
//         $(".row3__block1").addClass('background-color-af8f47');
//
//     });
//
//     $(".arr-top").click(function() {
//         $(".row3__block1 p").fadeOut();
//         // $(".row3__block1").css("height", "126px");
//         $(".arr-bottom__block1").css('display', 'block');
//         $(".row3__block1").removeClass('background-color-af8f47');
//
//
//
//     });
// });


jQuery(function($) {
    $(".arr-bottom__block1").click(function() {
        $(".row3__block1 p").addClass('not-hidden');
        $(".row3__block1").css("height", "auto");
        $(".arr-bottom__block1").css('display', 'none');
        $(".row3__block1").addClass('background-color-af8f47');

    });

    $(".arr-top1").click(function() {
        $(".row3__block1 p").addClass('hidden');
        $(".row3__block1").css("height", "126px");
        $(".arr-bottom__block1").css('display', 'block');
        $(".row3__block1").removeClass('background-color-af8f47');
        $(".row3__block1 p").removeClass('not-hidden');

    });
});


jQuery(function($) {
    $(".arr-bottom__block2").click(function() {
        $(".row3__block2 p").addClass('not-hidden');
        $(".row3__block2").css("height", "auto");
        $(".arr-bottom__block2").css('display', 'none');
        $(".row3__block2").addClass('background-color-af8f47');

    });

    $(".arr-top2").click(function() {
        $(".row3__block2 p").addClass('hidden');
        $(".row3__block2").css("height", "126px");
        $(".arr-bottom__block2").css('display', 'block');
        $(".row3__block2").removeClass('background-color-af8f47');
        $(".row3__block2 p").removeClass('not-hidden');

    });
});
jQuery(function($) {
    $(".arr-bottom__block3").click(function() {
        $(".row3__block3 p").addClass('not-hidden');
        $(".row3__block3").css("height", "auto");
        $(".arr-bottom__block3").css('display', 'none');
        $(".row3__block3").addClass('background-color-af8f47');

    });

    $(".arr-top3").click(function() {
        $(".row3__block3 p").addClass('hidden');
        $(".row3__block3").css("height", "126px");
        $(".arr-bottom__block3").css('display', 'block');
        $(".row3__block3").removeClass('background-color-af8f47');
        $(".row3__block3 p").removeClass('not-hidden');

    });
});

if (window.matchMedia("(max-width: 600px)").matches) {
    jQuery(function($) {
        $(".arr-bottom__block1").click(function() {
            $(".row3__block1 p").addClass('not-hidden');
            $(".row3__block1").css("height", "auto");
            $(".arr-bottom__block1").css('display', 'none');
            $(".row3__block1").addClass('background-color-af8f47');

        });

        $(".arr-top1").click(function() {
            $(".row3__block1 p").addClass('hidden');
            $(".row3__block1").css("height", "auto");
            $(".arr-bottom__block1").css('display', 'block');
            $(".row3__block1").removeClass('background-color-af8f47');
            $(".row3__block1 p").removeClass('not-hidden');

        });
    });


    jQuery(function($) {
        $(".arr-bottom__block2").click(function() {
            $(".row3__block2 p").addClass('not-hidden');
            $(".row3__block2").css("height", "auto");
            $(".arr-bottom__block2").css('display', 'none');
            $(".row3__block2").addClass('background-color-af8f47');

        });

        $(".arr-top2").click(function() {
            $(".row3__block2 p").addClass('hidden');
            $(".row3__block2").css("height", "auto");
            $(".arr-bottom__block2").css('display', 'block');
            $(".row3__block2").removeClass('background-color-af8f47');
            $(".row3__block2 p").removeClass('not-hidden');

        });
    });
    jQuery(function($) {
        $(".arr-bottom__block3").click(function() {
            $(".row3__block3 p").addClass('not-hidden');
            $(".row3__block3").css("height", "auto");
            $(".arr-bottom__block3").css('display', 'none');
            $(".row3__block3").addClass('background-color-af8f47');

        });

        $(".arr-top3").click(function() {
            $(".row3__block3 p").addClass('hidden');
            $(".row3__block3").css("height", "auto");
            $(".arr-bottom__block3").css('display', 'block');
            $(".row3__block3").removeClass('background-color-af8f47');
            $(".row3__block3 p").removeClass('not-hidden');

        });
    });
}


// СПІВПРАЦЯ

var block1 = document.querySelector('.r4b1');

block1.addEventListener('mouseenter', function () {
    $(".row4__text1").fadeIn();
});
block1.addEventListener('mouseleave', function () {
    $(".row4__text1").fadeOut()
});


var block2 = document.querySelector('.r4b2');

block2.addEventListener('mouseenter', function () {
    $(".row4__text2").fadeIn();
});
block2.addEventListener('mouseleave', function () {
    $(".row4__text2").fadeOut()
});

var block3 = document.querySelector('.r4b3');

block3.addEventListener('mouseenter', function () {
    $(".row4__text3").fadeIn();
});
block3.addEventListener('mouseleave', function () {
    $(".row4__text3").fadeOut()
});

var block4 = document.querySelector('.r4b4');

block4.addEventListener('mouseenter', function () {
    $(".row4__text4").fadeIn();
});
block4.addEventListener('mouseleave', function () {
    $(".row4__text4").fadeOut()
});

// end СПІВПРАЦЯ



// ПРАВЛІННЯ

$(".row5__arr-top").click(function() {
    $(".row5 table").fadeIn();
    $(this).css("display", "none");
    $(".row5__arr-bottom").css("display", "block");

});

$(".row5__arr-bottom").click(function() {
    $(".row5 table").fadeOut();
    $(this).css("display", "none");
    $(".row5__arr-top").css("display", "block");

});


// end ПРАВЛІННЯ

// РЕЗИДЕНТИ THE WALL

$(".row6 .arrow-bottom").click(function() {
    $(".row6__table").fadeIn();
    $(this).css("display", "none");
    $(".row6 .arrow-top").css("display", "block");

});

$(".row6 .arrow-top").click(function() {
    $(".row6__table").fadeOut();
    $(this).css("display", "none");
    $(".row6 .arrow-bottom").css("display", "block");

});

// end РЕЗИДЕНТИ THE WALL



// БОНУСИ

var row8Block1 = document.querySelector('.row8__block1');

row8Block1.addEventListener('mouseenter', function () {
    $(".row8__block1 p").fadeIn();
});
row8Block1.addEventListener('mouseleave', function () {
    $(".row8__block1 p").fadeOut()
});


var row8Block2 = document.querySelector('.row8__block2');

row8Block2.addEventListener('mouseenter', function () {
    $(".row8__block2 p").fadeIn();
});
row8Block2.addEventListener('mouseleave', function () {
    $(".row8__block2 p").fadeOut()
});

var row8Block3 = document.querySelector('.row8__block3');

row8Block3.addEventListener('mouseenter', function () {
    $(".row8__block3 p").fadeIn();
});
row8Block3.addEventListener('mouseleave', function () {
    $(".row8__block3 p").fadeOut()
});


// end БОНУСИ






//
// var box = $('.progress-block1-desc');
// $('.arr-bottom').on('click', function () {
//     box.toggleClass('hidden');
// });

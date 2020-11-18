// $(document).on('click', '.arr', function(){
//     console.log('asdas');
//     $(this).siblings('.row6__table').toggleClass('hide');
// });


$(function(){
    $(".arrow-bottom").on("click", function(){
        $(this).css('display', 'none');
        $('.row6__table').css('display', 'inline');
        $('.arrow-top').css('display', 'inline')
    });
});

$(function(){
    $(".arrow-top").on("click", function(){

        $(this).css('display', 'none');
        $('.row6__table').css('display', 'none');
        $('.arrow-bottom').css('display', 'inline');

    });
});
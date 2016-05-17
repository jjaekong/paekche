$(document).on('mouseenter focus', '#gnb > .container > ul > li > a', function() {
    if ($(this).siblings('div').length > 0) {
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
    }
});

$(document).on('mouseleave', '#gnb', function() {
    $('#gnb > .container > ul > li').removeClass('active');
});
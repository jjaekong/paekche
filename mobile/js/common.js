(function($) {
    $(document).on('click', '#gnb .gnb-content > ul > li > a', function(e) {
        if ($(this).siblings('ul').length > 0) {
            e.preventDefault();
            var $selectedListItem = $(this).parent();
            if ($selectedListItem.hasClass('active')) {
                $selectedListItem.removeClass('active');
            } else {
                $selectedListItem.siblings('.active').removeClass('active');
                $selectedListItem.addClass('active');
            }
        }
    });
    $(document).on('click', '#gnb .btn-menu-close', function(e) {
        $('body').removeClass('gnb-opened');
    });
    $(document).on('click', '#gnb', function(e) {
        if ($(e.target).attr('class') == 'gnb-container') {
            $('body').removeClass('gnb-opened');
        }
    });
    $(document).on('click', '#header .btn-menu-open', function(e) {
        $('body').addClass('gnb-opened');
    });
})(jQuery);
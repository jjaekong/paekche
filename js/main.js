(function($) {
    
    $('#container-slider').bxSlider({
        controls: false,
        startSlide: 1
    });
    
    $('#departs .slider').bxSlider({
        controls: false
    });
    
    $('#artists .slider').bxSlider({
        controls: false,
        auto: true,
        autoControls: true,
        autoControlsCombine: true,
        startText: '<span class="glyphicon glyphicon-play"></span>',
        stopText: '<span class="glyphicon glyphicon-pause"></span>'
    });
    
    var newsSlider = $('#news .news-list .slider').bxSlider({
        mode: 'vertical',
        auto: true,
        pager: false,
        controls: false
    });
    
    $(document).on('click', '#news .news-controls .next', function() {
        newsSlider.stopAuto();
        newsSlider.goToNextSlide();
        newsSlider.startAuto();
    });
    $(document).on('click', '#news .news-controls .prev', function() {
        newsSlider.stopAuto();
        newsSlider.goToPrevSlide();
        newsSlider.startAuto();
    });
    
    $('#shortcuts .slider').bxSlider({
        minSlides: 7,
        maxSlides: 7,
        slideWidth: 135,
        moveSlides: 1,
        pager: false,
        controls: true,
        prevText: '<span class="glyphicon glyphicon-menu-left"></span>',
        nextText: '<span class="glyphicon glyphicon-menu-right"></span>'
    });
    
})(jQuery);
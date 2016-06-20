<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="campaigns">
            <ul>
                <li><a href="#"><img class="img-responsive" src="/mobile/images/main/img_campaign_1.jpg" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="/mobile/images/main/img_campaign_1.jpg" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="/mobile/images/main/img_campaign_1.jpg" alt=""></a></li>
            </ul>
        </div>
        <div class="shortcuts">
            <div class="container">
                <ul class="row">
                    <li class="col-xs-4"><a href="#">대학소개</a></li>
                    <li class="col-xs-4"><a href="#">입학안내</a></li>
                    <li class="col-xs-4"><a href="#">학사일정</a></li>
                    <li class="col-xs-4"><a href="#">학사공지</a></li>
                    <li class="col-xs-4"><a href="#">NEWS</a></li>
                    <li class="col-xs-4"><a href="#">오시는 길</a></li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $('.campaigns > ul').bxSlider({
                prevText: '<img src="/mobile/images/main/btn_prev.gif" alt="이전" width="20" height="20">',
                nextText: '<img src="/mobile/images/main/btn_next.gif" alt="다음" width="20" height="20">'
            });
        })(jQuery);
    </script>
</body>
</html>
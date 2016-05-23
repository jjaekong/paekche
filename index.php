<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/main.css" rel="stylesheet">
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div id="container-slider">
            
            <!-- 첫번째 슬라이드 -->
            <div class="slide" style="background-image: url(/images/main/img_slide_1.jpg);" tabindex="0"></div>
            
            <!-- 두번째 슬라이드 -->
            <div class="slide" id="main-container" tabindex="0">
                <div class="container">
                    <div id="main-content">
                        <div id="notice">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li role="presentation" class="active"><a href="#notice-1" aria-controls="notice-1" role="tab" data-toggle="tab">공지뉴스</a></li>
                                <li role="presentation"><a href="#notice-2" aria-controls="notice-2" role="tab" data-toggle="tab">학사공지</a></li>
                                <li role="presentation"><a href="#notice-3" aria-controls="notice-3" role="tab" data-toggle="tab">장학공지</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="notice-1">
                                    <ol>
                                        <li><a href="#">Spotlight Audition 참가자 모집 <span>2015.11.16</span></a></li>
                                        <li><a href="#">백세요양원 김장 김치 자원 봉사자 참가 신청 백세요양원 김장 김치 자원 봉사자 참가 신청<span>2015.11.16</span></a></li>
                                        <li><a href="#">11월 화요예술특강 <span>2015.11.16</span></a></li>
                                        <li><a href="#">실용댄스과 고 전나마교수님 10주기 추모 <span>2015.11.16</span></a></li>
                                        <li><a href="#">제12회 백제스토리 공모전 <span>2015.11.16</span></a></li>
                                        <li><a href="#">백제 단편 시나리오 공모전 당선자 발표 <span>2015.11.16</span></a></li>
                                    </ol>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="notice-2">
                                    학사공지
                                </div>
                                <div role="tabpanel" class="tab-pane" id="notice-3">
                                    장학공지
                                </div>
                            </div>
                        </div>
                        <div id="news">
                            <h4>NEWS</h4>
                            <div class="news-list">
                                <ul class="slider">
                                    <li><a href="#">백제 단편 시나리오 공모전 당선자 발표 백제 단편 시나리오 공모전 당선자 발표 백제 단편 시나리오 공모전 당선자 발표 백제 단편 시나리오 공모전 당선자 발표 백제 단편 시나리오 공모전 당선자 발표</a></li>
                                    <li><a href="#">백제 단편 시나리오 공모전 당선자 발표 #1111</a></li>
                                    <li><a href="#">백제 단편 시나리오 공모전 당선자 발표 #22</a></li>
                                    <li><a href="#">백제 단편 시나리오 공모전 당선자 발표 #1111</a></li>
                                </ul>
                            </div>
                            <div class="news-controls">
                                <p>
                                    <a class="prev" href="#"><span class="glyphicon glyphicon-chevron-up"></span></a>
                                </p>
                                <p>
                                    <a class="next" href="#"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                </p>
                            </div>
                        </div>
                        <div id="departs">
                            <ul class="slider">
                                <li><a href="#"><img src="/images/main/img_depart_1.jpg" alt="전시디자인과"></a></li>
                                <li><a href="#"><img src="/images/main/img_depart_1.jpg" alt="전시디자인과"></a></li>
                                <li><a href="#"><img src="/images/main/img_depart_1.jpg" alt="전시디자인과"></a></li>
                                <li><a href="#"><img src="/images/main/img_depart_1.jpg" alt="전시디자인과"></a></li>
                            </ul>
                        </div>
                        <div id="artists">
                            <ul class="slider">
                                <li><a href="#"><img src="/images/main/img_artist_1.jpg" alt="백제예술대학교가 배출한 스타"></a></li>
                                <li><a href="#"><img src="/images/main/img_artist_1.jpg" alt="백제예술대학교가 배출한 스타"></a></li>
                                <li><a href="#"><img src="/images/main/img_artist_1.jpg" alt="백제예술대학교가 배출한 스타"></a></li>
                            </ul>
                        </div>
                        <div id="issue">
                            <h4>백제이슈</h4>
                            <div class="issue-content">
                                <a href="#">
                                    <figure>
                                        <div style="background-image: url(/images/main/img_issue.jpg)"></div>
                                        <figcaption>
                                            <h5>언론에 비친 백제예술대학교 음악과</h5>
                                            <p>백지영, 장우혁, 신동, 원빈, 윤손하, 김병만 등 수많은 스타를 배출한 백제</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            <a class="more" href="#"><span class="glyphicon glyphicon-plus-sign"></span></a>
                        </div>
                        <div id="schedules">
                            <ul>
                                <li><a href="#">원서접수 <span class="glyphicon glyphicon-menu-right"></span></a></li>
                                <li><a href="#">서류도착확인 <span class="glyphicon glyphicon-menu-right"></span></a></li>
                                <li><a href="#">합격자 발표 <span class="glyphicon glyphicon-menu-right"></span></a></li>
                                <li><a href="#">수험표/실기면접 <span class="glyphicon glyphicon-menu-right"></span></a></li>
                            </ul>
                        </div>
                        <div id="shortcuts">
                            <ul class="slider">
                                <li class="shortcut-1"><a href="#"><span></span>인터넷 증명발급</a></li>
                                <li class="shortcut-2"><a href="#"><span></span>재학생 서비스</a></li>
                                <li class="shortcut-3"><a href="#"><span></span>백제 UCC</a></li>
                                <li class="shortcut-4"><a href="#"><span></span>찾아오시는 길</a></li>
                                <li class="shortcut-5"><a href="#"><span></span>행정정보시스템</a></li>
                                <li class="shortcut-6"><a href="#"><span></span>학과 안내</a></li>
                                <li class="shortcut-7"><a href="#"><span></span>캠퍼스 안내</a></li>
                                <li class="shortcut-1"><a href="#"><span></span>인터넷 증명발급</a></li>
                                <li class="shortcut-2"><a href="#"><span></span>재학생 서비스</a></li>
                                <li class="shortcut-3"><a href="#"><span></span>백제 UCC</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 세번째 슬라이드 -->
            <div class="slide" tabindex="0" style="background-image: url(/images/main/img_slide_3.jpg);"><a class="slide-link" href="#"></a></div>
            
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
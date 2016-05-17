<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/introduce.css" rel="stylesheet" />
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="wrapper">
        <div class="visual visual-1">
            <div class="container">
                <p>
                    CREATE THE UNCREATED<br>
                    PAEKCHE INSTITUTE OF THE ARTS
                </p>
            </div>
        </div>
        <div class="container">
            <div class="aside">
                <aside id="aside">
                    <h3>대학소개</h3>
                    <nav id="lnb">
                        <ul>
							<li><a href="/introduce/vision.php">설립이념</a></li>
                            <li><a href="/introduce/greeting.php">이사장 인사말</a></li>
                            <li><a href="/introduce/president.php">총장 인사말</a></li>
                            <li><a href="/introduce/history.php">대학연혁</a></li>
                            <li><a href="/introduce/strategic.php">비전 및 발전전략</a></li>
                            <li><a href="/introduce/character.php">특성화전략</a></li>
                            <li class="active"><a href="/introduce/emblem.php">상징소개</a></li>
                            <li><a href="/introduce/group.php">학교조직</a></li>
                            <li><a href="/introduce/location.php">찾아오시는 길</a></li>
                            <li><a href="#">캠퍼스 안내</a></li>
                        </ul>
                    </nav>
                    <nav class="quick">
                        <ul class="row">
                            <li class="col-xs-6"><a href="#">인터넷 증명발급</a></li>
                            <li class="col-xs-6"><a href="#">재학생 서비스</a></li>
                            <li class="col-xs-6"><a href="#">찾아오시는 길</a></li>
                            <li class="col-xs-6"><a href="#">행정정보시스템</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <div class="content">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="#">대학소개</a></li>
                    <li class="active">상징소개</li>
                </ol>
                <main id="content" class="introduce emblem">
					<div class="page-header">
                        <h2>상징소개</h2>
						<hr>
                    </div>
					<section class="lesson">
						<h3>교훈</h3>
						<strong>PAEKCHE<br><i>INSTITUTE OF THE ARTS</i></strong>
						<p><img src="/images/introduce/lesson.png" alt="교훈석"></p>
						<div><img src="/images/introduce/nature.png" alt="자연인 문화인 예술인" /></div>
					</section>
					<section class="insignia">
						<h3>교표</h3>
						<div class="logo">
							<h4>Logo</h4>
							<img src="/images/introduce/logo.jpg" alt="로고">
						</div>
						<div class="symbol">
							<h4>Symbol</h4>
							<img src="/images/introduce/symbol.jpg" alt="로고">
						</div>
						<h5>백제예술대학교 로고는</h5>
						<p>
							<i>Cosmos(우주)</i>와<i>Globle(세계적인)</i>을 상징하는 2개의 원 속에 창의적 감성(Yellow)과 냉철한 이성(Black)이 조화롭게 이루어져<br>
							화려하게 빛나는 <i>신성(new star)</i>을 중심으로 역동적 에너지의 불꽃으로 승화하는 이미지를 상징한다.
						</p>
					</section>
					<section class="inside">
						<div class="flag">
							<h4>교기<small> 백제예술대학교 <i>교기</i></small></h4>
							<img src="/images/introduce/flag.jpg" alt="교기">
							<p>교기</p>
						</div>
						<div class="song">
							<h4>교가<small> 백제예술대학교 <i>교가</i></small></h4>
							<p><a href="#">교가 듣기</a></p>
							<p><a href="#">악보 보기</a></p>
						</div>
					</section>
                </main>
            </div>
        </div> 
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
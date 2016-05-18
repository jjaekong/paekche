<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/campuslife.css" rel="stylesheet" />
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
					<h3>대학생활</h3>
					<nav id="lnb">
						<ul>
							<li><a href="#">학사일정</a></li>
							<li><a href="/campuslife/service.php">재학생서비스</a></li>
							<li><a href="/campuslife/statutes.php">학사행정</a></li>
							<li><a href="#">학사 Q&A</a></li>
							<li><a href="#">장학제도</a></li>
							<li><a href="#">통학버스운행안내</a></li>
							<li><a href="/campuslife/repair.php">인터넷 / IT 서비스</a></li>
							<li><a href="#">도서관안내</a></li>
							<li><a href="#">방송국</a></li>
							<li class="active"><a href="/campuslife/performance.php">시설안내</a></li>
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
					<li><a href="#">대학생활</a></li>
					<li><a href="#">시설안내</a></li>
					<li><a href="#">편의시설</a></li>
					<li class="active">휴게실</li>
				</ol>
				<main id="content" class="campuslife lounge">
					<div class="page-header">
						<h2>휴게실</h2>
						<hr>
					</div>
					<div class="common-lounge">
						<ul class="nav nav-pills nav-justified">
							<li role="presentation"><a href="/campuslife/performance.php">공연 / 전시 / 교육시설</a></li>
							<li role="presentation"><a href="/campuslife/facility_computer.php">컴퓨터 / 인터넷</a></li>
							<li role="presentation" class="active"><a href="/campuslife/podmall_atm.php">편의시설</a></li>
						</ul>
						<ul>
							<li><a href="/campuslife/podmall_atm.php">편의점<br>현금인출기</a></li>
							<li><a href="/campuslife/lounge.php">휴게실</a></li>
							<li><a href="/campuslife/restaurant.php">식당</a></li>
							<li><a href="/campuslife/locker.php">락카</a></li>
						</ul>
						<section class="billiard">
							<div class="section-header">
								<h3>휴게실(당구장)</h3>
								<p>학생들의 대학생활 중 건전한 여가 활동을 위하여 식당동 3층에 설치되어 있습니다.</p>
							</div>
							<div class="section-content">
								<dl>
									<dt>운영기간</dt>
									<dd>3월 개강일 ~ 12월 종강일 까지 (방학기간은 폐쇄)</dd>
									<dt>운영시간</dt>
									<dd>09:30 ~ 18:00 (월~금요일)</dd>
								</dl>
							<div>
						</section>
						<section class="movie">
							<div class="section-header">
								<h3>DVD 영화상영</h3>
							</div>
							<div class="section-content">
								<p>매일 DVD영화 상영</p>
								<p>37" 대형TV</p>
							<div>
						</section>
						<section class="pocketball">
							<div class="section-header">
								<h3>당구대</h3>
							</div>
							<div class="section-content">
								<dl>
									<dt>시 설</dt>
									<dd>포켓대 3개, 4구대 1대</dd>
									<dt>요 금</dt>
									<dd>무 료</dd>
									<dt>당구공</dt>
									<dd>학생처에서 학생증 제출 후 대여</dd>
									<dt>문 의</dt>
									<dd>학생처 (Tel : 260-9107)</dd>
								</dl>
							</div>
						</section>
					</div>
				</main>
			</div>
		</div>
	</div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
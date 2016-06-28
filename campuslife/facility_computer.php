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
							<li><a href="/campuslife/schedule.php">학사일정</a></li>
							<li><a href="/campuslife/service.php">재학생서비스</a></li>
							<li><a href="/campuslife/statutes.php">학사행정</a></li>
							<li><a href="#">학사 Q&A</a></li>
							<li><a href="/campuslife/notice_list.php">장학제도</a></li>
							<li><a href="/campuslife/school_bus.php">통학버스운행안내</a></li>
							<li><a href="/campuslife/repair.php">인터넷 / IT 서비스</a></li>
							<li><a href="#">도서관안내</a></li>
							<li><a href="/campuslife/broadcasting.php">방송국</a></li>
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
					<li class="active">컴퓨터 / 인터넷</li>
				</ol>
				<main id="content" class="campuslife facility_computer">
					<div class="page-header">
						<h2>컴퓨터 / 인터넷</h2>
						<hr>
					</div>
					<div class="facility">
						<ul class="nav nav-pills nav-justified">
							<li role="presentation"><a href="/campuslife/performance.php">공연 / 전시 / 교육시설</a></li>
							<li role="presentation" class="active"><a href="/campuslife/facility_computer.php">컴퓨터 / 인터넷</a></li>
							<li role="presentation"><a href="/campuslife/podmall_atm.php">편의시설</a></li>
						</ul>

						<section class="practice">
							<div class="section-header">
								<h3>컴퓨터 실습실</h3>
							</div>
							<div class="section-content">
								<dl>
									<dt>위 치</dt>
									<dd>1C동 3층</dd>
									<dt>담 당</dt>
									<dd>교무처 실습담당 (260-9205)</dd>
									<dt>시설개요</dt>
									<dd>
										소프트웨어 배정 및 변경은 강의계획서와 시간표를 <br>참고하여 결정하므로 학기 시작전 교무처 수업 및<br>실습담당자와 협의하여야 합니다. 
									</dd>
								</dl>
							</div>
						</section>
						<section class="search-info">
							<div class="section-header">
								<h3>인터넷 정보검색실</h3>
							</div>
							<div class="section-content">
								<dl>
									<dt>위 치</dt>
									<dd>도서관 1층</dd>
									<dt>담 당</dt>
									<dd>도서관 (260-9108)</dd>
									<dt>서비스종류</dt>
									<dd>
										<ul>
											<li>인터넷 정보검색, E-mail, OA</li>
											<li>프린트와 복사 (카드식 유료 서비스 : 카드구입은 도서관 2층)</li>
											<li>각종 증명서 무인발급 이용시간(24시간 개방) <p>도서관 부대시설이므로 이용시 정숙하시기 바랍니다.</p></li>
										</ul>
									</dd>
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
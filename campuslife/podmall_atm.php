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
					<li class="active">편의점 / 현금인출기</li>
				</ol>
				<main id="content" class="campuslife podmall_atm">
					<div class="page-header">
						<h2>편의점 / 현금인출기</h2>
						<hr>
					</div>
					<div class="convenient">
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
						<section class="podmall">
							<div class="section-header">
								<h3>세븐 일레븐</h3>
								<p>식음료, 생필품 등 다양한 제품을 판매하고 있습니다.</p>
							</div>
							<div class="section-content">
								<dl>
									<dt>위 치</dt>
									<dd>식당동 1층(263-2639)</dd>
									<dt>운영시간</dt>
									<dd>08:00 ~ 20:00 (학기 중 평일만 개점함)</dd>
									<dt>취급품목</dt>
									<dd>패스트푸드, 일배품(도너츠,빵,유제 품), 식음료, 핸드폰 악세서리 등</dd>
								</dl>
							<div>
						</section>
						<section class="atm">
							<div class="section-header">
								<h3>현금 인출기</h3>
								<p>은행 - 국민은행</p>
							</div>
							<div class="section-content">
								<dl>
									<dt>위 치</dt>
									<dd>1C동 1층 현관 (방송국 옆)</dd>
									<dt>운영시간</dt>
									<dd>08:00 ~ 22:00 (365일 운영)</dd>
									<dt>기 능</dt>
									<dd>현금카드, 신용카드(BC,VISA), 현금입출금, 통장 입출금, 통장정리 </dd>
								</dl>
							<div>
						</section>
						<section class="bank">
							<div class="section-header">
								<h3>기관 및 은행</h3>
								<p>학교에서 도보로 15분 이내 거리에 있는 기관 및 은행(비봉면 소재)</p>
							</div>
							<div class="section-content">
								<div class="table-wrap">
									<table class="table table-bordered">
										<colgroup>
											<col>
											<col>
											<col>
											<col>
										</colgroup>
										<thead>
											<tr>
												<th>기 관 명</th>
												<th>전화번호</th>
												<th>기 관 명</th>
												<th>전화번호</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>파출소</th>
												<td>063) 263-6112</td>
												<th>면사무소</th>
												<td>063) 263-6001</td>
											</tr>
											<tr>
												<th>보건소</th>
												<td>063) 263-6473</td>
												<th>농 협</th>
												<td>063) 263-6004</td>
											</tr>
											<tr>
												<th>우체국</th>
												<td>063) 262-6000</td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
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
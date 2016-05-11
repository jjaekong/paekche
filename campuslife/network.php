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
							<li><a href="#">학사행정</a></li>
							<li><a href="#">학사 Q&A</a></li>
							<li><a href="#">장학제도</a></li>
							<li><a href="#">통학버스운행안내</a></li>
							<li class="active"><a href="/campuslife/repair.php">인터넷 / IT 서비스</a></li>
							<li><a href="#">도서관안내</a></li>
							<li><a href="#">방송국</a></li>
							<li><a href="#">시설안내</a></li>
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
					<li><a href="#">인터넷 / IT 서비스</a></li>
					<li class="active">네트워크시설</li>
				</ol>
				<main id="content" class="campuslife network">
					<div class="page-header">
						<h2>네트워크시설</h2>
						<hr>
					</div>
					<div class="paekche_network">
						<ul class="nav nav-pills nav-justified" role="tablist">
							<li><a href="/campuslife/repair.php">PC고장수리 / SW배정</a></li>
							<li class="active"><a href="/campuslife/network.php">네트워크시설</a></li>
							<li><a href="/campuslife/software_info.php">소프트웨어정보</a></li>
							<li><a href="#">프로그램저작권 관련 FAQ</a></li>
						</ul>
						<div class="tab-content">
							<h4>네트워크 시설 이용안내</h4>
							<ol>
								<li>담당부서 : 전산실 (전화 260-9207)</li>
								<li>인터넷 전용선 속도 : 20Mbps</li>
								<li>인터넷 연결 대상 컴퓨터
									<ul>
										<li>업무용 컴퓨터</li>
										<li>
											<dl>
												<dt>실습실 수강용 컴퓨터 : </dt>
												<dd>담당교수 요청시 연결함</dd>
											</dl>
										</li>
										<li>도서관 정보 검색 컴퓨터</li>
										<li>
											<dl>
												<dt>기숙사 개인 컴퓨터 : </dt>
												<dd>기숙사 사무실에 문의</dd>
											</dl>
											<p>노트북 등 개인 소유 컴퓨터를 사용하여 인터넷을 하고자 할 경우 별도 문의 바랍니다.</p>
										</li>
									</ul>
								</li>
								<li>
									백제예술대학 NETWORK 구성도
									<p><img src="/images/campuslife/network_img.jpg" alt="백제예술대학 NETWORK 구성도" /></p>
								</li>
							</ol>
						</div>
					</div>
				</main>
			</div>
		</div> 
	</div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
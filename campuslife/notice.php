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
							<li class="active"><a href="/campuslife/scholarship.php">장학제도</a></li>
							<li><a href="#">통학버스운행안내</a></li>
							<li><a href="#">인터넷 / IT 서비스</a></li>
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
					<li><a href="#">장학제도</a></li>
					<li class="active">장학공지</li>
				</ol>
				<main id="content" class="campuslife notice">
					<div class="page-header">
						<h2>장학공지</h2>
						<hr>
					</div>

					<div class="notice-info">
						<ul class="nav nav-pills nav-justified" role="tablist">
							<li class="active"><a href="/campuslife/notice.php">장학공지</a></li>
							<li><a href="#">국가장학금</a></li>
							<li><a href="/campuslife/notice_benefit.php">이중수혜확인</a></li>
							<li><a href="/campuslife/notice_inside.php" >교내장학금</a></li>
							<li><a href="/campuslife/notice_outside.php" >교외장학금</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active">nav-tab-1</div>
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
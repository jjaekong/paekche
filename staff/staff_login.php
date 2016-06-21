<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/staff.css" rel="stylesheet" />
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
					<h3>인트라넷</h3>
					<nav id="lnb">
						<ul>
							<li><a href="#">교직원 게시판</a></li>
							<li><a href="#">교원 자료실</a></li>
							<li><a href="#">직원자료실</a></li>
							<li class="active"><a href="#">교직원 증명서 발급안내</a></li>
							<li><a href="#">교직원 메일</a></li>
							<li><a href="#">관련 사이트</a></li>
							<li><a href="#">공문관리&우편택배</a></li>
							<li><a href="#">행정정보 시스템</a></li>
							<li><a href="#">학생상담 기록</a></li>
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
					<li><a href="#">교직원인트라넷</a></li>
					<li class="active">로그인</li>
				</ol>
				<main id="content" class="staff staff_login">
					<div class="page-header">
						<h2>로그인</h2>
						<hr>
					</div>
					<div class="login">
						<form>
							<dl class="staff-email">
								<dt><label for="staff-email">아이디</label></dt>
								<dd><input type="text" name="#" id="staff-email" placeholder="교직원 E-mail 주소"></dd>
							</dl>
							<dl class="staff-pw">
								<dt><label for="staff-pw">비밀번호</label></dt>
								<dd><input type="password" name="#" id="staff-pw" placeholder="교직원 E-mail 비밀번호"></dd>
							</dl>
							<div class="btn-area">
								<p>
									<a href="#" class="btn btn-pink" role="button">로그인</a>
								</p>
							</div>
						</form>
					</div>
				</main>
			</div>
		</div>
	</div>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
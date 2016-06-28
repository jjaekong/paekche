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
							<li class="active"><a href="/campuslife/statutes.php">학사행정</a></li>
							<li><a href="#">학사 Q&A</a></li>
							<li><a href="/campuslife/notice_list.php">장학제도</a></li>
							<li><a href="/campuslife/school_bus.php">통학버스운행안내</a></li>
							<li><a href="/campuslife/repair.php">인터넷 / IT 서비스</a></li>
							<li><a href="#">도서관안내</a></li>
							<li><a href="/campuslife/broadcasting.php">방송국</a></li>
							<li><a href="/campuslife/performance.php">시설안내</a></li>
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
					<li><a href="#">학사행정</a></li>
					<li class="active">학사 FAQ</li>
				</ol>
				<main id="content" class="campuslife bachelor_faq">
					<div class="page-header">
						<h2>학사 FAQ</h2>
						<hr>
					</div>
					<div class="faq">
						<ul class="nav nav-pills nav-justified">
							<li role="presentation"><a href="/campuslife/statutes.php">학칙</a></li>
							<li role="presentation"><a href="/campuslife/college_inner.php">학사내규</a></li>
							<li role="presentation"><a href="/campuslife/readmission.php">휴복학/자퇴/재입학</a></li>
							<li role="presentation"><a href="/campuslife/certificate.php">증명서/학생증 발급안내</a></li>
							<li role="presentation" class="active"><a href="/campuslife/bachelor_faq.php">학사 FAQ</a></li>
						</ul>

						<div class="search-area">
							<form>
								<div class="form-group">
									<label for="search-keyword" class="sr-only">검색어</label>
									<input type="text" name="#" id="search-keyword" class="form-control" value="Search">
								</div>
								<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span><span class="sr-only">검색</span></button>
							</form>
						</div>

						<ul>
							<li>
								<a href="">휴학</a>
							</li>
							<li>
								<a href="">복학</a>
							</li>
							<li>
								<a href="">재입학</a>
							</li>
							<li>
								<a href="">전과</a>
							</li>
							<li>
								<a href="">기타</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="panel-group accordion-list" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" >
												일반 휴학은 어떤 경우 신청합니까?
											</a>
										</h4>
									</div>
									<div id="collapse-1" class="panel-collapse collapse in">
										<div class="panel-body">
											가사 및 질병 문제 등 개인적 사정으로 휴학하는 경우입니다.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" >
												일반휴학은 신청기간은?
											</a>
										</h4>
									</div>
									<div id="collapse-2" class="panel-collapse collapse">
										<div class="panel-body">
											개강 후 수업일수 1/4일 이전에만 가능합니다. 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" >
												일반휴학할 때 구비서류 및 신청방법은?
											</a>
										</h4>
									</div>
									<div id="collapse-3" class="panel-collapse collapse">
										<div class="panel-body">
											본인도장, 보호자도장을 지참 후 휴학원을 다운로드하거나 학과사무실에서 작성하여 교수님과 상담 후 도서관 경유, 종합민원센터에 제출합니다. 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" >
												일반휴학 기간 및 횟수는 얼마까지 가능한지요?
											</a>
										</h4>
									</div>
									<div id="collapse-4" class="panel-collapse collapse">
										<div class="panel-body">
											군휴학을 제외한 일반휴학은 1회에 1년을 초과할 수 없으며, 통산하여 2회를 초과할 수 없습니다. 군휴학은 횟수에 산입하지 않습니다. 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" >
												 군휴학은 어떻게 하나요? 
											</a>
										</h4>
									</div>
									<div id="collapse-5" class="panel-collapse collapse">
										<div class="panel-body">
											입영통지서와 본인도장, 보호자도장을 지참하여 입대일 2주전에 군휴학원을 제출해야 합니다. 
										</div>
									</div>
								</div>
							</div>
						</div>

						<nav class="paging">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="이전">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="다음">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>

					</div>
				</main>
			</div>
		</div>
	</div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
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
							<li class="active"><a href="/campuslife/repair.php">인터넷 / IT 서비스</a></li>
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
					<li><a href="#">인터넷 / IT 서비스</a></li>
					<li class="active">PC고장수리 / SW배정</li>
				</ol>
				<main id="content" class="campuslife repair">
					<div class="page-header">
						<h2>PC고장수리 / SW배정</h2>
						<hr>
					</div>
					<div class="pc-repair">
						<ul class="nav nav-pills nav-justified" role="tablist">
							<li class="active"><a href="/campuslife/repair.php">PC고장수리 / SW배정</a></li>
							<li><a href="/campuslife/network.php">네트워크시설</a></li>
							<li><a href="/campuslife/software_info.php">소프트웨어정보</a></li>
							<li><a href="/campuslife/program_faq.php">프로그램저작권 관련 FAQ</a></li>
						</ul>
						<div class="tab-content">
							<div class="personal-computer">
								<ul>
									<li><h4>PC 고장수리</h4>
										<ol>
											<li>
												<dl>
													<dt>1. 행정부서 및 학과 컴퓨터</dt>
													<dd>사용자가 직접 제조사 츨 A/S센터로 연락하여 진행함.</dd>
												</dl>
											</li>
											<li>
												<dl>
													<dt>2. 실습용 컴퓨터</dt>
													<dd>매학기 종료 후 학과에서 컴퓨터를 점검하여 고장 유무 판단 후 교무처 실습담당에게 수리 신청함.</dd>
												</dl>
											</li>
										</ol>
									</li>
								</ul>
								<p>학기 중 몇대의 고장이 발생하더라도 강의 진행에 지장이 없으면 학기 종료 후 일괄 신청바랍니다.</p>
							</div>
							<div class="software">
								<ul>
									<li><h4>소프트웨어 대여</h4>
										<ol>
											<li>
												<dl>
													<dt>1. 담당부서</dt>
													<dd>전산실 (전화 260-9206)</dd>
												</dl>
											</li>
											<li>
												2. 행정부서 및 학과 사무실 컴퓨터는 "오피스"및"한글" 프로그램이 기본 지급됩니다.
												<p>
													단, 교수연구실 컴퓨터는 사용자 특성상 부득이 별도의 절차를 거쳐 지급하고 있사오니 아래 목록을 참고하여<br>
													"소프트웨어사용신청서"를 제출하시면 대여가능합니다.
												</p>
											</li>
											<li>3. 보유 소프트웨어 목록 (2007년 9월 10일 현재)</li>
										</ol>
									</li>
								</ul>
							</div>
							<div class="table-wrap">
								<table class="table table-bordered">
									<colgroup>
										<col style="width:280px">
										<col style="width:280px">
										<col style="width:280px">
									</colgroup>
									<thead>
										<tr>
											<th>구 분</th>
											<th>품 명</th>
											<th>활용 분야</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="2">사무용</td>
											<td>MS Office 2007</td>
											<td>OA용 소프트웨어 패키지</td>
										</tr>
										<tr>
											<td>한글 2007</td>
											<td>문서 작성</td>
										</tr>
										<tr>
											<td rowspan="7">Graphic Design Tool</td>
											<td>3D Studio MAX 5.0</td>
											<td>3차원 모델링</td>
										</tr>
										<tr>
											<td>PrimaVison TCX</td>
											<td>의상디자인</td>
										</tr>
										<tr>
											<td>Gerber (Pattern CAD)</td>
											<td>패턴제작</td>
										</tr>
										<tr>
											<td>Photoshop 6.0</td>
											<td>이미지편집</td>
										</tr>
										<tr>
											<td>Illustrator 9.0</td>
											<td>벡터 그래픽 제작</td>
										</tr>
										<tr>
											<td>Premiere 6.0</td>
											<td>비디오 편집 도구</td>
										</tr>
										<tr>
											<td>After Effect 4.1</td>
											<td>모션그래픽 및 시각 효과 도구</td>
										</tr>
										<tr>
											<td rowspan="7">Web Design Tool</td>
											<td>Flash 5.0</td>
											<td>웹 그래픽과 애니메이션</td>
										</tr>
										<tr>
											<td>Dream Weaver 4.0</td>
											<td>홈페이지 제작</td>
										</tr>
										<tr>
											<td>Free Hand</td>
											<td>벡터 그래픽 제작</td>
										</tr>
										<tr>
											<td>FireWorks 4.0</td>
											<td>웹 그래픽과 애니메이션</td>
										</tr>
										<tr>
											<td>나모 웹에디터 5.0</td>
											<td>홈페이지 제작</td>
										</tr>
										<tr>
											<td>Go Live 5.0</td>
											<td>홈페이지 제작</td>
										</tr>
										<tr>
											<td>Live Motion 1.0</td>
											<td>웹 그래픽과 애니메이션</td>
										</tr>
										<tr>
											<td rowspan="5">전자출판 Tool</td>
											<td>PageMaker 7.0</td>
											<td>페이지 레이아웃</td>
										</tr>
										<tr>
											<td>Director 8.5   CD</td>
											<td>CD 타이틀 제작</td>
										</tr>
										<tr>
											<td>Demension 3.0</td>
											<td>3D 효과 편집 툴</td>
										</tr>
										<tr>
											<td>Stream Line 4.0</td>
											<td>라인아트 변환</td>
										</tr>
										<tr>
											<td>ToolBook 5.0</td>
											<td>CD 타이틀, 카다록 제작</td>
										</tr>
										<tr>
											<td rowspan="2">기 타</td>
											<td>Sound Forge 6.0</td>
											<td>사운드 편집</td>
										</tr>
										<tr>
											<td>MS Visual Basic 6.0 Pro</td>
											<td>소프트웨어 개발</td>
										</tr>
									</tbody>
								</table>
							</div>
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
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/introduce.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="introduce location">
		<div class="container">
			<div class="page-header">
				<hr />
				<h2>오시는 길</h2>
				<p>백제예술대학교로 <i>찾아오시는 길</i></p>
			</div>
			<div class="map">
				<img src="/mobile/images/introduce/map.gif" class="img-responsive" alt="지도">
			</div>
			<section class="traffic">
				<div class="section-header">
					<h3>대중교통안내</h3>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table table-border seoul">
							<colgroup>
								<col style="width:53px;"/>
								<col style="width:171px;"/>
								<col style="width:66px;"/>
							</colgroup>
							<thead>
								<tr>
									<th colspan="3">서울</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>직행버스</td>
									<td>
										<ul class="arrow-list">
											<li>
												<dl>
													<dt>승차위치</dt>
													<dd>서울 남부터미널 (지하철3호선)</dd>
												</dl>
											</li>
											<li>
												<dl>
													<dt>행선지</dt>
													<dd>익산</dd>
												</dl>
											</li>
											<li>
												<dl class="arrow">
													<dt>서울</dt>
													<dd>익산톨게이트 통과 후, 익산 왕궁 농공단지 앞 [직행버스 임시정류장]에서 하차, 콜택시 이용</dd>
												</dl>
											</li>
										</ul>
									</td>
									<td>180km/<br>2시간</td>
								</tr>
								<tr>
									<td>공항<br>리무진버스<br>(대한고속관광)</td>
									<td>
										<ul class="arrow-list">
											<li>
												<dl>
													<dt>승차위치</dt>
													<dd>김포공항 또는 여의도 63빌딩 현관</dd>
												</dl>
											</li>
											<li>
												<dl>
													<dt>행선지</dt>
													<dd>전주, 익산</dd>
												</dl>
											</li>
											<li>
												<dl class="arrow">
													<dt>서울</dt>
													<dd>익산톨게이트 통과 후, 우리주유소 하차 도보로 20분 (1.8km) 소요</dd>
												</dl>
											</li>
										</ul>
									</td>
									<td>180km/<br>2시간</td>
								</tr>
								<tr>
									<td>기차</td>
									<td>
										<ul class="arrow-list">
											<li>
												<dl>
													<dt>승차위치</dt>
													<dd>서울역, 영등포역</dd>
												</dl>
											</li>
											<li>
												<dl>
													<dt>행선지</dt>
													<dd>전주, 익산</dd>
												</dl>
											</li>
											<li>전주역 하차, 전주역 파출소 앞에서 545번, 546번 시내버스승차 대학까지 25분 소요</li>
											<li>익산역 하차, 맞은편 버스승강장에서 555번 좌석버스 승차 / 40분 소요</li>
										</ul>
									</td>
									<td>180km/<br>2시간</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="table-wrap">
						<table class="table table-border daejeon">
							<colgroup>
								<col style="width:53px;"/>
								<col style="width:171px;"/>
								<col style="width:66px;"/>
							</colgroup>
							<thead>
								<tr>
									<th colspan="3">대전</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>직행버스</td>
									<td>
										<ul class="arrow-list">
											<li>
												<dl>
													<dt>승차위치</dt>
													<dd>시외버스터미널</dd>
												</dl>
											</li>
											<li>
												<dl>
													<dt>행선지</dt>
													<dd>전주, 익산</dd>
												</dl>
											</li>
											<li>익산직행버스터미널 하차, 버스승강장에서 555번 좌석버스 승차(50분소요)</li>
										</ul>
									</td>
									<td>60km/<br>1시간 30분</td>
								</tr>
								<tr>
									<td>기차</td>
									<td>
										<ul class="arrow-list">
											<li>
												<dl>
													<dt>승차위치</dt>
													<dd>대전역, 서대전역</dd>
												</dl>
											</li>
											<li>도착후의 대중교통 이용방법은 서울의 기차이용 방법과 동일함</li>
										</ul>
									</td>
									<td>60km/<br>1시간 30분</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="table-wrap">
						<table class="table table-border gwangju">
							<colgroup>
								<col style="width:53px;"/>
								<col style="width:171px;"/>
								<col style="width:66px;"/>
							</colgroup>
							<thead>
								<tr>
									<th colspan="3">광주</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>고속버스<br>기차</td>
									<td>
										<ul class="arrow-list">
											<li>전주 또는 익산에 도착하여 대전에서의 대중교통</li>
											<li>이용방법과 동일함. [기타 지역도 이와 동일]</li>
										</ul>
									</td>
									<td>113km/<br>2시간</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<section class="bus-schedule">
				<div class="section-header">
					<h3>전주/백제예대 시내버스 운행 시간표</h3>
				</div>
				<div class="section-content">
					<ul class="nav nav-pills nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">교도소(평화동) 545번</a></li>
						<li role="presentation"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">교도소(평화동) 546번</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab-1">
							<ul> 
								<li class="height-padding">교도소</li>
								<li>평화그린<br>1차아파트</li>
								<li>동도미소<br>드림아파트</li>
								<li>삼성강남<br>아파트</li>
								<li>평화주공<br>4.5단지</li>
								<li>평화코오롱<br>아파트</li>
								<li class="height-padding">한양병원</li>
								<li class="height-padding">완산여고</li>
								<li>평화주공<br>1.2단지</li>
								<li class="height-padding">장승백이</li>
								<li class="height-padding">우정아파트</li>
								<li>예그린<br>아파트</li>
								<li>공수내<br>다리</li>
								<li class="height-padding">싸전다리</li>
								<li class="height-padding">전동성당</li>
								<li class="height-padding">대한문고</li>
								<li class="height-padding">중앙시장</li>
								<li class="height-padding">한국은행</li>
								<li>금암광장<br>(팔달로)</li>
								<li>금암1동<br>사무소</li>
								<li class="height-padding">전북일보사</li>
								<li>전북은행<br>본점</li>
								<li class="height-padding">전주소방서</li>
								<li>사대부고<br>사거리</li>
								<li class="height-padding">대학병원내</li>
								<li>동전주<br>우체국</li>
								<li>새마을금고<br>연합회</li>
								<li>우아<br>삼성병원</li>
								<li class="height-padding">전주역</li>
								<li class="height-padding">국립농관원</li>
								<li>호성<br>동신아파트</li>
								<li>호성<br>동아아파트</li>
								<li>보호<br>관찰소</li>
								<li>차량<br>등록사업소</li>
								<li class="height-padding">고당마을</li>
								<li class="height-padding">용진</li>
								<li class="height-padding">운교마을</li>
								<li class="height-padding">상운리</li>
								<li>용진<br>신기마을</li>
								<li class="height-padding">벽성대</li>
								<li>운곡<br>용봉초교</li>
								<li class="height-padding">구만리</li>
								<li class="height-padding">봉강마을</li>
								<li class="height-padding">하이트맥주</li>
								<li class="height-padding">낙평리</li>
								<li class="height-padding">봉동주공</li>
								<li class="height-padding">낙평네거리</li>
								<li class="height-padding">영광맨션</li>
								<li class="height-padding">봉동터미널</li>
								<li class="height-padding">완주고</li>
								<li class="height-padding">은하리</li>
								<li class="height-padding">제상마을</li>
								<li class="height-padding">용암마을</li>
								<li class="height-padding">신봉리</li>
								<li class="height-padding">장구리</li>
								<li class="height-padding">제네리</li>
								<li class="height-padding">망동리</li>
								<li class="height-padding">새터</li>
								<li>태형<br>아카데미텔</li>
								<li class="height-padding"><i>백제대</i></li>
								<li class="height-padding">비봉</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab-2">
							<ul> 
								<li class="height-padding">교도소</li>
								<li>평화그린<br>1차아파트</li>
								<li>동도미소<br>드림아파트</li>
								<li>삼성강남<br>아파트</li>
								<li>평화주공<br>4.5단지</li>
								<li>평화코오롱<br>아파트</li>
								<li class="height-padding">한양병원</li>
								<li class="height-padding">완산여고</li>
								<li>평화주공<br>1.2단지</li>
								<li class="height-padding">장승백이</li>
								<li class="height-padding">우정아파트</li>
								<li>예그린<br>아파트</li>
								<li>공수내<br>다리</li>
								<li class="height-padding">싸전다리</li>
								<li class="height-padding">전동성당</li>
								<li class="height-padding">대한문고</li>
								<li class="height-padding">중앙시장</li>
								<li class="height-padding">한국은행</li>
								<li>금암광장<br>(팔달로)</li>
								<li>금암1동<br>사무소</li>
								<li class="height-padding">전북일보사</li>
								<li>전북은행<br>본점</li>
								<li class="height-padding">전주소방서</li>
								<li>사대부고<br>사거리</li>
								<li class="height-padding">대학병원내</li>
								<li>동전주<br>우체국</li>
								<li>새마을금고<br>연합회</li>
								<li>우아<br>삼성병원</li>
								<li class="height-padding">전주역</li>
								<li class="height-padding">국립농관원</li>
								<li>호성<br>동신아파트</li>
								<li class="height-padding">보호관찰소</li>
								<li>차량<br>등록사업소</li>
								<li class="height-padding">고당마을</li>
								<li class="height-padding">용진</li>
								<li class="height-padding">운교마을</li>
								<li class="height-padding">상운리</li>
								<li>용진<br>신기마을</li>
								<li class="height-padding">벽성대</li>
								<li>운곡<br>용봉초교</li>
								<li class="height-padding">구만리</li>
								<li class="height-padding">봉강마을</li>
								<li class="height-padding">하이트맥주</li>
								<li class="height-padding">낙평리</li>
								<li class="height-padding">봉동주공</li>
								<li class="height-padding">낙평네거리</li>
								<li class="height-padding">영광맨션</li>
								<li class="height-padding">봉동터미널</li>
								<li class="height-padding">완주고</li>
								<li>신진맨션<br>아파트</li>
								<li>학다리<br>마을</li>
								<li class="height-padding">율소리</li>
								<li>고산<br>신기마을</li>
								<li class="height-padding">어우리</li>
								<li class="height-padding">봉산마을</li>
								<li class="height-padding">월암리</li>
								<li class="height-padding">죽산마을</li>
								<li class="height-padding">용동</li>
								<li class="height-padding">탄광</li>
								<li class="height-padding">신복</li>
								<li class="height-padding">문창</li>
								<li class="height-padding">비봉</li>
								<li class="height-padding"><i>백제대</i></li>
							</ul>
						</div>
					</div>
					<div class="table-wrap">
						<table class="table table-border">
							<colgroup>
								<col style="width:145px;"/>
								<col style="width:145px;"/>
							</colgroup>
							<thead>
								<tr>
									<th colspan="2">교도소(평화동) 545번</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>교도소 출발</td>
									<td>비봉(백제대경유)출발</td>
								</tr>
								<tr>
									<td>06:35</td>
									<td>07:15</td>
								</tr>
								<tr>
									<td>07:40</td>
									<td>08:15</td>
								</tr>
								<tr>
									<td>09:00</td>
									<td>09:15</td>
								</tr>
								<tr>
									<td>10:00</td>
									<td>10:35</td>
								</tr>
								<tr>
									<td>11:00</td>
									<td>11:35</td>
								</tr>
								<tr>
									<td>12:20</td>
									<td>12:35</td>
								</tr>
								<tr>
									<td>13:20</td>
									<td>13:55</td>
								</tr>
								<tr>
									<td>14:20</td>
									<td>14:55</td>
								</tr>
								<tr>
									<td>15:40</td>
									<td>15:55</td>
								</tr>
								<tr>
									<td>16:40</td>
									<td>17:15</td>
								</tr>
								<tr>
									<td>17:40</td>
									<td>18:15</td>
								</tr>
								<tr>
									<td>19:00</td>
									<td>19:15</td>
								</tr>
								<tr>
									<td>20:00</td>
									<td>20:35</td>
								</tr>
								<tr>
									<td>21:00</td>
									<td>21:35</td>
								</tr>
								<tr>
									<td>22:20</td>
									<td>22:30</td>
								</tr>
							</tbody>
						</table> 
					</div>
					<div class="table-wrap">
						<table class="table table-border">
							<colgroup>
								<col style="width:145px;"/>
								<col style="width:145px;"/>
							</colgroup>
							<thead>
								<tr>
									<th colspan="2">교도소(평화동) 546번</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>교도소 출발</td>
									<td>어윌, 백제예대 출발</td>
								</tr>
								<tr>
									<td>08:20</td>
									<td>06:30</td>
								</tr>
								<tr>
									<td>11:40</td>
									<td>10:00</td>
								</tr>
								<tr>
									<td>15:00</td>
									<td>13:20</td>
								</tr>
								<tr>
									<td>18:20</td>
									<td>16:30</td>
								</tr>
								<tr>
									<td>21:40</td>
									<td>20:00</td>
								</tr>
							</tbody>
						</table> 
					</div>
				</div>
			</section>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="community schedule">
		<div class="container">
			<div class="page-header">
				<hr />
				<h2>학사일정</h2>
				<p>백제예술대학교 <i>학사일정</i></p>
			</div>
			<article class="calendar">
				<div class="article-header">
					<h3>
						06<br>
						<small>JUNE</small>
					</h3>
					<a href="#" class="btn left-btn"><img src="/mobile/images/community/left_btn.png" alt="이전"></a>
					<a href="#" class="btn right-btn"><img src="/mobile/images/community/right_btn.png" alt="다음"></a>
				</div>
				<div class="article-content">
					<div class="calendar-table">
						<table class="table">
							<colgroup>
								<col style="wdith:40px;"/>
								<col />
								<col />
								<col />
								<col />
								<col />
								<col />
							</colgroup>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
								</tr>
								<tr>
									<td>5</td>
									<td><i>6</i></td>
									<td><i>7</i></td>
									<td><i>8</i></td>
									<td><i>9</i></td>
									<td><i>10</i></td>
									<td>11</td>
								</tr>
								<tr>
									<td>12</td>
									<td><i>13</i></td>
									<td><i>14</i></td>
									<td><i>15</i></td>
									<td><i>16</i></td>
									<td><i>17</i></td>
									<td>18</td>
								</tr>
								<tr>
									<td>19</td>
									<td>20</td>
									<td>21</td>
									<td>22</td>
									<td><i>23</i></td>
									<td><i>24</i></td>
									<td><i>25</i></td>
								</tr>
								<tr>
									<td><i>26</i></td>
									<td><i>27</i></td>
									<td><i>28</i></td>
									<td><i>29</i></td>
									<td>30</td>
									<td>31</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="article-footer">
					<dl>
						<dt>06일</dt>
						<dd>현충일</dd>
					</dl>
					<dl>
						<dt>07일 ~ 10일</dt>
						<dd>1학기 기말고사</dd>
					</dl>
					<dl>
						<dt>10일</dt>
						<dd>종강</dd>
					</dl>
					<dl>
						<dt>13일 ~ 17일</dt>
						<dd>보강주 / 성적입력기간</dd>
					</dl>
					<dl>
						<dt>23일 ~ 28일</dt>
						<dd>성적확인 및 정정기간</dd>
					</dl>
					<dl>
						<dt>29일</dt>
						<dd>출석부 및 성적단표 제출</dd>
					</dl>
				</div>
			</article>
		</div>
	</main>
<style type="text/css">
/* schedule */
.community.schedule .calendar { 
	margin-top:40px;
	border-top:2px solid #555;
}
.community.schedule .calendar .article-header { 
	position:relative;
	padding:30px 0 30px;
	text-align:center;
}
.community.schedule .calendar .article-header h3 {
	font-size:30px;
	color:#000;
	padding:0;
	margin:0;
	font-weight:600;
	display:inline;
}
.community.schedule .calendar .article-header h3 small {
	font-size:12px;
	color:#777;
	display:block;
	margin-top:5px;
}
.community.schedule .calendar .article-header .left-btn {
	position:absolute;
	top:38px;
	left:15%;
}
.community.schedule .calendar .article-header .right-btn {
	position:absolute;
	top:38px;
	right:15%;
}
.community.schedule .calendar .article-header .btn img {
	width:12px;
}
.community.schedule .calendar .article-content{
	padding-bottom:30px;
}
.community.schedule .calendar .article-content .calendar-table .table { 
	table-layout:fixed;
	margin-bottom:0;
}
.community.schedule .calendar .article-content .calendar-table .table tbody tr td { 
	height:40px;
	border:0;
	padding:0;
	font-size:13px;
	color:#555;
	text-align:center;
	vertical-align:middle;
	font-weight:400;
}
.community.schedule .calendar .article-content .calendar-table .table tbody tr td:first-child {
	color:#d22d36;
}
.community.schedule .calendar .article-content .calendar-table .table tbody tr td i { 
	width:28px;
	height:28px;
	font-size:13px;
	background-color:#d22d36;
	border-radius:50%;
	color:#fff;
	line-height:28px;
	font-style:normal;
	display:block;
	text-align:center;
	margin:0 auto;
}
.community.schedule .calendar .article-footer { 
	border-top:1px solid #ccc;
	padding-top:30px;
}
.community.schedule .calendar .article-footer dl {
	line-height:20px;
}
.community.schedule .calendar .article-footer dl dt {
	width:95px;
	display:inline-block;
	font-size:12px;
	font-weight:500;
	color:#555;
}
.community.schedule .calendar .article-footer dl dt:before {
	content:"·";
	color:#555;
	padding-right:5px;
}
.community.schedule .calendar .article-footer dl dd {
	display:inline-block;
	font-size:12px;
	color:#555;
}
</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
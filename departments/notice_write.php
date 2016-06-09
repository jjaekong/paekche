<?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/dochead.php'); ?>
<link href="/departments/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/header.php'); ?>
	<div class="jumbo-wall">
		<div class="container">
			<p>
				<small>우리문화예술의 정통성을 바탕으로 그 본류를 주도하고</small><br>
				미래를 선도하는 예술인 교육
			</p>
		</div>
	</div>
	<div class="page-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">커뮤니티</a></li>
				<li class="active">공지사항</li>
			</ol>
		</div>
	</div>
	<main id="content" tabindex="-1" class="departments notice-write">
		<section class="container">
			<div class="section-header">
				<hr />
				<h3>공지사항</h3>
			</div>
			<div class="section-content">
				<form class="notice-form">
					<table class="table">
						<colgroup>
							<col style="width: 140px"/>
							<col style="width: 1030px"/>
						</colgroup>
						<tbody>
							<tr>
								<th>작성자</th>
								<td>학과사무실</td>
							</tr>
							<tr>
								<th><label for="subject">제목</label></th>
								<td><input type="text" id="subject" class="form-control"/></td>
							</tr>
							<tr>
								<th><label for="text-content">내용</label></th>
								<td><textarea id="text-content" class="form-control"></textarea></td>
							</tr>
							<tr>
								<th><label for="file" class="attach">첨부파일</label></th>
								<td class="file"><input type="file" id="file" class="form-control"/></td>
							</tr>
							<tr>
								<th><label for="password">비밀번호</label></th>
								<td class="pw"><input type="text" id="password" class="form-control"/></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="btn-area">
				<p>
					<a class="btn btn-pink" href="#" role="button">확인</a>
					<a class="btn btn-gray" href="#" role="button">취소</a>
				</p>
			</div>
		</section>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/docfoot.php'); ?>
</body>
</html>
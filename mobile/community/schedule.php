<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/sub.css" rel="stylesheet">
<link href="/mobile/css/community.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="community board-write">
		<div class="container">
			<div class="page-header">
				<hr />
				<h2>뉴스 & 공지사항</h2>
				<p>백제예술대학교 <i>뉴스 & 공지사항</i></p>
			</div>
			<div class="board-content">
				<form>
					<div class="table-wrap">
						<table class="table table-border">
							<colgroup>
								<col style="width:65px;"/>
								<col style="width:225px;"/>
							</colgroup>
							<tbody>
								<tr class="writer">
									<th><label for="user-name">작성자</label></th>
									<td><input type="text" id="user-name" name="#"></td>
								</tr>
								<tr class="subject">
									<th><label for="subject">제목</label></th>
									<td><input type="text" id="subject" name="#"></td>
								</tr>
								<tr class="text-content">
									<th><label for="text-content">내용</label></th>
									<td><textarea id="text-content" name="#"></textarea></td>
								</tr>
								<tr class="file">
									<th><label for="file" class="attach">첨부파일</label></th>
									<td><input type="file" id="file" name="#"></td>
								</tr>
								<tr class="password">
									<th><label for="password">비밀번호</label></th>
									<td><input type="password" id="password" name="#"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn-area">
						<p>
							<a href="#" class="btn white-btn" role="button">취소</a>
							<button href="#" class="btn pink-btn" type="submit">완료</>
						</p>
					</div>
				</form>
			</div>
		</div>
	</main>
<style type="text/css">

</style>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
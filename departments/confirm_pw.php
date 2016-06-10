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
	<main id="content" tabindex="-1" class="departments confirm-pw">
		<section class="container">
			<div class="section-header">
				<hr />
				<h3>공지사항</h3>
			</div>
			<form class="confirm">
				<h4>글 작성시 입력하신 비밀번호를 입력해 주세요.</h4>
				<div class="form-group">
					<label class="sr-only" for="user-password">비밀번호 확인</label>
					<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요.">
				</div>
				<div class="btn-area">
					<p>
						<a class="btn btn-gray" href="#" role="button">취소</a>
						<button class="btn btn-pink" type="submit">확인</button>
					</p>
				</div>
			</form>
		</section>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/docfoot.php'); ?>
</body>
</html>
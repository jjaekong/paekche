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
				<li><a href="#">자료실</a></li>
				<li class="active">수업자료실</li>
			</ol>
		</div>
	</div>
	<main id="content" tabindex="-1">
		<div class="container">
			<div class="btn-area">
				<p>
					<a class="btn btn-sm btn-gray" href="#" role="button">목록</a>
					<a class="btn btn-sm btn-white" href="#" role="button">수정</a>
					<a class="btn btn-sm btn-white" href="#" role="button">삭제</a>
					<a class="btn btn-sm btn-pink" href="#" role="button">글쓰기</a>
				</p>
			</div>
			<div class="btn-area">
				<p>
					<a class="btn btn-gray" href="#" role="button">확인</a>
					<a class="btn btn-pink" href="#" role="button">취소</a>
				</p>
			</div>
			<nav class="paging">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="first-Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&lsaquo;</span>
						</a>
					</li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next" >
							<span aria-hidden="true">&rsaquo;</span>
						</a>
					</li>
					<li>
						<a href="#" aria-label="end-Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
			<ul class="content-list">
				<li>대중음악가수</li>
				<li>레코딩 & 음반프로젝트</li>
				<li>보컬트레이너</li>
				<li>보컬코러스팀</li>
				<li>보컬음향디렉터</li>
			</ul>
			<div class="search-area" style="margin:30px 0;">
				<form>
					<div class="form-group">
						<label for="search-keyword" class="sr-only">검색어</label>
						<input type="text" name="#" id="search-keyword" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span><span class="sr-only">검색</span></button>
				</form>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/docfoot.php'); ?>
</body>
</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/dochead.php'); ?>
<link href="/css/introduce.css" rel="stylesheet" />
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
							<span aria-hidden="true">&lt;</span>
						</a>
					</li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next" >
							<span aria-hidden="true">&gt;</span>
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
		</div>
	</main>
<style>
/* btn-sm */
.btn-area {margin:30px 0 30px 0; }
.btn-area .btn-sm {width:90px; height:30px !important; border-radius:0; font-size:14px; text-decoration:none; color:#fff; text-align:center; padding:0; line-height:28px !important; }
.btn-area .btn-gray {background-color:#333; }
.btn-area .btn-pink {background-color:#d22d36; }
.btn-area .btn-white {background-color:#fff; border:1px solid #ccc; width:60px; color:#666 !important; }

/* btn */
.btn-area .btn {width:100px; height:40px; border-radius:0; font-size:14px; text-decoration:none; color:#fff; text-align:center; padding:0; line-height:40px; }

/* paging */
.paging .pagination .active a {border-radius:19px !important; background-color:#333; color:#fff; width:32px; }
.paging .pagination .active a:hover {background-color:#333 !important; color:#fff; text-decoration:none; }
.paging .pagination li {padding:0 5px; }
.paging .pagination a {color:#666; font-size:14px; border-radius:0 !important; border:0; }
.paging .pagination a:hover {text-decoration:underline; background-color:#fff !important; }


/* content-list */
.content-list {margin-left:10px; }
.content-list li {
	background-image:url('/departments/images/r_arrow_l.png');
	background-size:5px auto;
	background-repeat:no-repeat;
	background-position:0 7px;
	padding-left:22px;
	width:223px;
	font-size:15px;
	color:#666;
	display:inline-block;
}

</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/docfoot.php'); ?>
</body>
</html>
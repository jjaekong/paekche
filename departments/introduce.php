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
				<li><a href="#">학과안내</a></li>
				<li class="active">학과안내</li>
			</ol>
		</div>
	</div>
	<main id="content" tabindex="-1" class="departments introduce">
		<section class="intro">
			<div class="container">
				<div class="section-header header-background">
					<hr />
					<h3>학과소개</h3>
				</div>
				<div class="section-content">
					<h4>"K-POP을 이끌어 갈 뮤직엔터테이너"</h4>
					<p>
						한류를 이끌어온 <strong>강력한 영향력을 지닌 문화콘텐츠, K-POP의 미래 인재들을 양성하는데 목표</strong>를 두며,<br>퍼모먼스 주역인.....
						한류를 이끌어온 <strong>강력한 영향력을 지닌 문화콘텐츠, K-POP의 미래 인재들을 양성하는데 목표</strong>를 두며,<br>
						한류를 이끌어온 <strong>강력한 영향력을 지닌 문화콘텐츠, K-POP의 미래 인재들을 양성하는데 목표</strong>를 두며,<br>
					</p>
					<p class="point">
						학기별 기초-발전-심화과정을 통하여 <strong>세분화된 프로그램으로 교육하여 기본기를 갖춘 뮤직엔터테이너로서의 자질을 갖추도록 양성</strong>한다.
					</p>
					<div class="contact-office">
						<dl>
							<dt>학과사무실</dt>
							<dd>063-260-9130</dd>
							<dt>홈페이지</dt>
							<dd>http://www.paekche.ac.kr/media</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<section class="test" style="height:500px;">
				<div></div>
			</section>
		</div>
	</main>
<style>
.intro {
	position:relative;
	background-image:url('/departments/images/intro_bg.jpg');
	background-size:cover;
	background-repeat:no-repeat;
	background-position:50% 50%;
}

section .section-header {padding:69px 0 42px 0; }
section .section-header hr { 
	margin:0 0 12px 1px;
	width: 24px;
	border-top-color:#000;
	text-align:left; 
}

section .section-header h3 { 
	margin:0;
	font-size:30px; 
	color:#0d0d0d;
	font-weight:300;
}
section .section-content { }
section .section-content h4 { 
	font-size:30px;
	font-weight:300;
	color:#0d0d0d;
	margin:0; 
}
section .section-content p { 
	margin-top:50px;
	font-size:15px; 
	color:#666;
	line-height:24px;
}
section .section-content p strong { 
	font-size:15px; 
	color:#333;
}
section .section-content .point { 
	margin-top:33px;
}
section .section-content .contact-office { 
	width:581px;
	height:49px;
	border:1px solid #d6d5d5;
	background-color:#f6f6f6;
	padding:13px 17px 13px 26px; 
	margin:47px 0 70px 0;
}
section .section-content .contact-office dl {overflow:hidden; }
section .section-content .contact-office dl dt { 
	float:left; 
	font-size:14px;   
	color:#555;
	font-weight:normal;
	padding:0 8px 0 25px;
}
section .section-content .contact-office dl dt:nth-of-type(1) {
	background-image:url('/departments/images/tel.png');
	background-size:15px auto;
	background-repeat:no-repeat;
	background-position:0 3px;
}
section .section-content .contact-office dl dt:nth-of-type(2) {
	background-image:url('/departments/images/site.png');
	background-size:17px auto;
	background-repeat:no-repeat;
	background-position:0 3px;
	margin-left:40px;
}
section .section-content .contact-office dl dd {
	position:relative;
	float:left; 
	font-size:14px;   
	color:#555; 
	padding-left:10px;
}
section .section-content .contact-office dl dd:before {position:absolute; top:0; left:0; content:"|";  }
</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/departments/inc/docfoot.php'); ?>
</body>
</html>
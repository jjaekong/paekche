<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/introduce.css" rel="stylesheet" />
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
                    <h3>대학소개</h3>
                    <nav id="lnb">
                        <ul>
                            <li><a href="#">설립이념</a></li>
                            <li><a href="#">이사장 인사말</a></li>
                            <li><a href="#">총장 인사말</a></li>
                            <li><a href="#">대학연혁</a></li>
                            <li><a href="#">비전 및 발전전략</a></li>
                            <li class="active"><a href="#">특성화전략</a></li>
                            <li><a href="#">상징소개</a></li>
                            <li><a href="#">학교조직</a></li>
                            <li><a href="#">찾아오시는 길</a></li>
                            <li><a href="#">캠퍼스 안내</a></li>
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
                    <li><a href="#">대학소개</a></li>
                    <li class="active">특성화전략</li>
                </ol>
                <main id="content" class="introduce character">
					<div class="page-header">
                        <h2>특성화전략<small> 특성화목표와<i> 추진방향</i></small></h2>
						<hr>
                    </div>
					<section class="artist">
						<div class="future">
							<h3>특성화</h3>
							<h4><span>"현재"</span>를 주도하고 <span>"미래"</span>를 선도하는 예술대학</h4>
							<p><img src="/images/introduce/artist.png" alt="예술 예능 분야의 수준 높은 예술 행위인 양성"></p>
						</div>
						<div class="core">
							<h3>핵심전략<small> Core Strategy</small></h3>
							<div>
								<ul>
									<li><p><span>방송,영상</span><br>제작인력 양성</p></li>
									<li><p><span>공연,문화</span><br>예술인 양성</p></li>
									<li><p><span>글로벌 뮤지션</span><br>양성</p></li>
								</ul>
							</div>
						</div>
						<div class="propel">
							<h3>추진방향</h3>
							<div>
								<h4>01</h4>
								<p>산업체교류 및 현장 실무 중심의<br>교육체계구축</p>
								<p>방송영상장비 공동사용,<br>영상정보 공유 등으로<br>교육의 질 확보</p>
							</div>
							<div>
								<h4>02</h4>
								<p>공연예술분야 특화사업<br>주도척 참여</p>
								<p>예능 전문가<br>진출프로그램의 가동</p>
							</div>
							<div>
								<h4>03</h4>
								<p>국내 음악계의 트랜드<br>피드백 체계 구축</p>
								<p>세계 뮤직시장 흐름의 트랜드<br>분석 및 학습 체계 구축<br>컨버스형 뮤직 엔터테이너 육성</p>
							</div>
						</div>
					</section>
                </main>
            </div>
        </div>
    </div>
<style>
/* character */
/* future */
.introduce.character .artist .future {margin:50px 0 80px 0; }
.introduce.character .artist .future h3 {background:url("/images/introduce/m_img.png") center left no-repeat; text-indent:10px; }
.introduce.character .artist .future h4 {margin-top:60px; font-size:26px; color:#555; letter-spacing:-1px; text-align:center; }
.introduce.character .artist .future h4 span {color:#d22d36; }
.introduce.character .artist .future p {text-align:center; margin-top:60px; }

/* core */
.introduce.character .artist .core h3 {background:url("/images/introduce/m_img.png") center left no-repeat; text-indent:10px; }
.introduce.character .artist .core div {background:url("/images/introduce/core_bg.png") center bottom no-repeat; height:114px; margin-top:42px;}
.introduce.character .artist .core div ul {width:870px;  }
.introduce.character .artist .core div ul li {background:url("/images/introduce/plus_bg.png") center right no-repeat; height:114px; text-align:center; display:inline-block; width:316px; }
.introduce.character .artist .core div ul li p {font-size:20px; line-height:28px; margin-top:30px; }
.introduce.character .artist .core div ul li p span {color:#f37021; }
.introduce.character .artist .core div ul li:nth-of-type(3) {background:none; width:230px; }

/* propel */
.introduce.character .artist .propel {margin-top:80px; }
.introduce.character .artist .propel h3 {background:url("/images/introduce/m_img.png") center left no-repeat; text-indent:10px; margin-bottom:60px; }
.introduce.character .artist .propel div {background:url("/images/introduce/comma.png") center center no-repeat; background-color:#685b55; width:270px; height:330px; float:left; margin:0 20px 150px 0; text-align:center; }
.introduce.character .artist .propel div h4 {background-color:#fff; border-radius:60px; width:60px; height:60px; margin-top:-35px; text-align:center; line-height:60px; display:inline-block; font-size:24px; color:#555; }
.introduce.character .artist .propel div p {font-size:17px; line-height:24px; color:#fff; letter-spacing:-1px; }
.introduce.character .artist .propel div p:nth-of-type(1) {margin-top:35px; }
.introduce.character .artist .propel div p:nth-of-type(2) {margin-top:78px; }
.introduce.character .artist .propel div:nth-of-type(2) {background-color:#d22d36; width:270px; height:330px; float:left; }
.introduce.character .artist .propel div:nth-of-type(3) {background-color:#685b55; width:270px; height:330px; float:left; margin-right:0; }

</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
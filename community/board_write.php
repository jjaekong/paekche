<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/community.css" rel="stylesheet">
<link href="/css/board.css" rel="stylesheet">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="wrapper">
        <div class="visual visual-5">
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
                    <h3>백제광장</h3>
                    <nav id="lnb">
                        <ul>
                            <li class="active"><a href="#">뉴스&amp;공지사항</a></li>
                            <li><a href="#">학사공지</a></li>
                            <li><a href="#">백제뉴스</a></li>
                            <li><a href="#">백제스타</a></li>
                            <li><a href="#">보도자료</a></li>
                            <li><a href="#">벼룩시장/분실물 신고</a></li>
                            <li><a href="#">자취/하숙안내</a></li>
                            <li><a href="#">성희롱상담실</a></li>
                            <li><a href="#">학생상담실</a></li>
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
                    <li><a href="#">백제광장</a></li>
                    <li class="active">뉴스&amp;공지사항</li>
                </ol>
                <main id="content" class="community board write">
                    <div class="page-header">
                        <h2>뉴스&amp;공지사항</h2>
                        <hr>
                    </div>
                    <div class="board-write table-wrap">
                        <form>
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 140px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td>작성자</td>
                                    <td>홍종보(음악/13학번)</td>
                                </tr>
                                <tr>
                                    <td><label for="board-title">제목</label></td>
                                    <td><input id="board-title" class="form-control" type="text" name="#"></td>
                                </tr>
                                <tr>
                                    <td>내용</td>
                                    <td>
                                        <textarea class="form-control" cols="100" rows="10" name="#"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>첨부파일 <img src="/images/ico_clip.png" alt=""></td>
                                    <td><input type="file"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-important">확인</button>
                                <a href="#" class="btn btn-primary">확인</a>
                            </p>
                        </div>                        
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
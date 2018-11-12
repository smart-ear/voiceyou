<?php session_start(); ?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="subject" content="VOICE YOU">
<meta property="og:type" content="website" />
<meta property="og:title" content="VOICE YOU" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />
<meta property='og:site_name' content='VOICE YOU' />
<title>VOICE YOU</title>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/menulink.js"></script>
<script src="../js/unslider.min.js"></script>
<link rel="canonical" href="">
<link rel="stylesheet" href="../css/mobile.css" />
</head>
<body>

<!-- 상단 시작 { -->
<header id="hd">
    <h1 id="hd_h1">VOICE YOU</h1>
    <div class="to_content"><a href="#container">본문 바로가기</a></div>

	<!-- 상단 로고 시작 -->
    <div id="hd_wr">

		<div id="logo"><a href="javascript:main();"><img src="../img/logo (2).png" alt=""></a></div>	
		<button type="button" id="gnb_open" class="hd_opener"><img src="../img/allmn.png" alt="전체메뉴"><span class="sound_only"> 메뉴열기</span></button>
		<button type="button" id="hd_submit" class="hd_search"><img src="../img/bt_search.png" alt="검색"><span class="sound_only">검색</span></button>
<!-- 로그인 안 했을 경우 메뉴-->
      <?php if(!isset($_SESSION["id"])) { ?>
	  <div id="member">
          <span id="button"><button id="btn" type="submit" onclick="location.href = '../m/login.html';"><img src="../img/login.png"></button>
            <button id="btn" type="submit" onclick="location.href='../m/register.html';"><img src="../img/register.png"></button>
          </span>
		  </div>
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
		  <div id="member">
		  <span id="button"><a href="javascript:mygrade();"><img src="../img/icon_member.png" alt="회원아이콘"><?php echo $_SESSION["id"];?>님</a>
            <button id="btn" type="submit" onclick="location.href='logout.php';"><img src="../img/logout.png"></button>
            </span>
			</div>
			</div>
         <?php } ?>
		

		<!-- 전체메뉴 시작 -->
        <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
				<li class="gnb_1dli">
					<a href="javascript:main();" class="gnb_1da">Home</a>
				</li>
				<li class="gnb_1dli">
					<a href="javascript:script();" class="gnb_1da">Voice test</a>

                    <button type="button" class="btn_gnb_op">하위분류</button>
					<ul class="gnb_2dul">
						<li class="gnb_2dli"><a href="javascript:script();" class="gnb_2da"><span></span>Script</a></li>
						<li class="gnb_2dli"><a href="javascript:mypage();" class="gnb_2da"><span></span>Mypage</a></li>		
					</ul>
				</li>
				<li class="gnb_1dli">
					<a href="javascript:chart();" class="gnb_1da">Chart</a>
				</li>
			</ul>

		</div>
        <script>
		$( document ).ready( function() {
	       var jbOffset = $( '#hd_wr' ).offset();
	      $( window ).scroll( function() {
	          if ( $( document ).scrollTop() > jbOffset.top ) {
	               $( '#hd_wr' ).addClass( 'fixed' );
	         }
		        else {
	             $( '#hd_wr' ).removeClass( 'fixed' );
	          }
	        });

            $(".hd_opener").on("click", function() {
                $(".hd_div").show();
            });

            $(".hd_search").on("click", function() {
                $("#hd_sch").show();
            });

            $("#wrapper").on("click", function() {
                $(".hd_div").hide();
                $("#hd_sch").hide();

            });

            $(".btn_gnb_op").click(function(){
                $(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);
                
            });

            $(".hd_closer").on("click", function() {
                var idx = $(".hd_closer").index($(this));
                $(".hd_div:visible").hide();
                $("#hd_sch:visible").hide();
                $(".hd_opener:eq("+idx+")").find("span").text("열기");
            });

        });
        </script>
		<!--// 전체메뉴 끝 -->
		<!-- 레이어 검색창 시작 -->		
            <div id="hd_sch">
                <h2>사이트 내 전체검색</h2>
                <form name="fsearchbox" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
				<button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" placeholder="검색어(필수)" required maxlength="20">
                <button type="submit" value="검색" id="sch_submit"><span class="sound_only">검색</span></button>
                </form>
                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>
            </div>
		<!--// 레이어 검색창 끝 -->

	</div>
	<!--// 상단 로고 끝 -->

	<!-- 상단 메뉴 시작 -->
	<ul id="hd_mb">
		<li><a href="javascript:main();" class="on">Home</a></li>
		<li><a href="javascript:voicetest();">Voice test</a></li>
		<li><a href="javascript:chart();">Chart</a></li>
	</ul>
	<!-- 상단 메뉴 끝 -->
</header>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
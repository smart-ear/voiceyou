<?php session_start(); ?>
<!doctype html>
<html lang="ko"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="subject" content="VOICE YOU">
<meta property="og:type" content="website">
<meta property="og:title" content="VOICE YOU">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">
<meta property="og:site_name" content="VOICE YOU">
<title>VOICE YOU</title>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/menulink.js"></script>
<script src="../js/unslider.min.js"></script>
<link rel="canonical" href="">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="/voiceyoutest/css/login.css" type="text/css" >
</head>
<body>
<script type="text/javascript">
$(window).load(function() {     
     $('#loading').hide();   
    }); 
</script>
<div id="loading"><img id="loading-image" src="voiceyoutest/img/mobile/ajax-loader.gif" alt="Loading..." /></div>
<!-- 상단 시작 { -->
<header id="hd">
    <h1 id="hd_h1">VOICE YOU</h1>
    <div class="to_content"><a href="#container">본문 바로가기</a></div>

  <!-- 상단 로고 시작 -->
    <div id="hd_wr">

		<div id="logo"><a href="/voiceyoutest/index.php"><img src="/voiceyoutest/img/logo (2).png" alt=""></a></div>	
		<button type="button" id="gnb_open" class="hd_opener"><img src="/voiceyoutest/img/allmn.png" alt="전체메뉴"><span class="sound_only"> 메뉴열기</span></button>
		<button type="button" id="hd_submit" class="hd_search"><img src="/voiceyoutest/img/bt_search.png" alt="검색"><span class="sound_only">검색</span></button>
<!-- 로그인 안 했을 경우 메뉴-->
      <?php if(!isset($_SESSION["id"])) { ?>
	  <div id="member">
        <!--  <span id="button"><button id="btn" type="submit" onclick="location.href = '../m/login.html';"><img src="../img/login.png"></button>
            <button id="btn" type="submit" onclick="location.href='../m/register.html';"><img src="../img/register.png"></button>
          </span>  -->
		  </div>
		  <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
			<li class="gnb_1dli">
					<a href="/voiceyoutest/m/login.html" class="gnb_1da">Login</a>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/m/register.php" class="gnb_1da">Join</a>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/index.php" class="gnb_1da">Home</a>
				</li>
				<li class="gnb_1dli">
					<a href="javascript:script();" class="gnb_1da">Voice test</a>

                    <button type="button" class="btn_gnb_op">하위분류</button>
					<ul class="gnb_2dul">
						<li class="gnb_2dli"><a href="/voiceyoutest/mobile/script.php" class="gnb_2da"><span></span>Script</a></li>
						<li class="gnb_2dli"><a href="/voiceyoutest/mobile/mypage.php" class="gnb_2da"><span></span>Mypage</a></li>		
					</ul>
				</li>
				<li class="gnb_1dli">
					<a href="javascript:chart();" class="gnb_1da">Chart</a>
				</li>
			</ul>

		</div>
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
		  <div id="member">
		  <span id="button"><a href="/voiceyoutest/mobile/my_grade.php"><img src="/voiceyoutest/img/icon_member.png" alt="회원아이콘"><?php echo $_SESSION["id"];?>님</a>
            <!--<button id="btn" type="submit" onclick="location.href='../m/logout.php';"><img src="../img/logout.png"></button>-->
            </span>
			</div>
			</div>
			<div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
			<li class="gnb_1dli">
					<a href="/voiceyoutest/m/logout.php" class="gnb_1da">Logout</a>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/m/register.php" class="gnb_1da">Join</a>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/index.php" class="gnb_1da">Home</a>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/mobile/script.php" class="gnb_1da">Voice test</a>

                    <button type="button" class="btn_gnb_op">하위분류</button>
					<ul class="gnb_2dul">
						<li class="gnb_2dli"><a href="/voiceyoutest/mobile/script.php" class="gnb_2da"><span></span>Script</a></li>
						<li class="gnb_2dli"><a href="/voiceyoutest/mobile/mypage.php" class="gnb_2da"><span></span>Mypage</a></li>		
					</ul>
				</li>
				<li class="gnb_1dli">
					<a href="/voiceyoutest/mobile/chart.php" class="gnb_1da">Chart</a>
				</li>
			</ul>

		</div>
         <?php } ?>
		
<!--
		<!-- 전체메뉴 시작 -->
		<!--
        <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
			<li class="gnb_1dli">
					<a href="javascript:main();" class="gnb_1da">로그인</a>
				</li>
				<li class="gnb_1dli">
					<a href="javascript:main();" class="gnb_1da">회원가입</a>
				</li>
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
		-->
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
		<li><a href="/voiceyoutest/index.php" class="on">Home</a></li>
		<li><a href="/voiceyoutest/mobile/script.php">Voice test</a></li>
		<li><a href="/voiceyoutest/mobile/chart.php">Chart</a></li>
		<li><a href="/voiceyou_dongkyu/mobile/elice_m.html">apply</a></li>

	</ul>
  <!-- 상단 메뉴 끝 -->
</header>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
  <!-- 메인 비쥬얼 -->
  
    <script>
    $(function() {
        var unslider = $("#main_bn").unslider({
            speed: 500,               //  The speed to animate each slide 슬라이드 애니메이션 속도 (in milliseconds)
            delay: 5000,              //  The delay between slide animations 슬라이드 애니메이션 사이 지연 시간(in milliseconds)
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: false              //  Support responsive design. May break non-responsive designs
        });
        
        $('.unslider-arrow').click(function() {
            var fn = this.className.split(' ')[1];

            //  Either do unslider.data('unslider').next() or .prev() depending on the className
            unslider.data('unslider')[fn]();
        });
    });
   </script>
  <!--// 메인 비쥬얼 -->
  

  <div id="container" class="main">
    <section id="part1">
      <header>
        <h1>* 스피치 전문가 지원하기 *</h1>
      </header>
    
    </section>
    <section id="part1">
      <ul>
        <li>
        	<strong>목소리에 대한 피드백을<br>제공하고 수익을 창출하세요.</strong>
        	<img src="./img/m_1.png" style="max-width:100%; width:auto; height:auto; vertical-align:bottom;" /><br><br>
        	<p>목소리에 대한 피드백을 제공하면 수익이 발생합니다.<i></i><br>여러분의 재능으로 새로운 수익을 만들어보세요.</p>
        	<br><br><br><br>
        </li>
        <li>
        	<strong>피드백과 강의를 한번에!</strong>
          	<img src="./img/m_2.png" style="max-width:100%; width:auto; height:auto; vertical-align:bottom;" /><br><br>
            <p>원하는 장르의 스피치 강의를 등록할 수 있습니다.<br>1:1 화상강의를 진행하여 더 높은 수익에 도전 하세요!</p>
       		<br><br><br><br>
        </li>
        <li>
        	<strong>인공지능 목소리 평가 시스템</strong><br>
        	<img src="./img/m_3.png" style="max-width:100%; width:auto; height:auto; vertical-align:bottom;" /><br><br>
            <p>당신의 목소리 데이터가 인공지능 평가 시스템을 구축합니다.<br></p>
        	<br><br><br><br>
        </li>
      </ul>
    </section>
    <section id="script">
		<header>
			<h2>*참여하는 방법*</h2>
    	</header>

    </section>
	<section id="part2">
      <ul>
        <li>
        	<strong>1. 지원서 작성</strong>
        	<p>지원자가 자신있는 분야와 이력, 경력등을<br>작성하여 서류 심사를 신청하세요.</p>
        </li>
        <li>
        	<strong>2. 간단한 면접</strong>
            <p>서류 심사가 완료된 지원자분들을 대상으로<br>간단한 (온/오프라인) 면접을 진행합니다.</p>
        </li>
        <li>
        	<strong>3. 강의, 피드백 업로드</strong><br>
            <p>심사 완료 후 강의와 피드백을 등록하여<br>보이스유 수강생들과 매칭됩니다.<br></p>
        </li>
      </ul>
    </section>
    
  <form class="login">
    <!--<h1><a href="../index.php"><img src="../img/logo (2).png"></a></h1>-->
    <p>
        <input type="button" value="지원서 작성" onclick="location.href='https://goo.gl/forms/DLzd0riAQgZaUYcv2'">
    </p>
	
  </form>
  
  </div>

</div>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<div id="ft">
      <div id="ft_company">
          <a href="#">이용약관</a><a href="#">개인정보처리방침</a>
      </div>
      <div id="ft_sns">
      <a href="https://www.facebook.com/" target="_blank"><img src="../img/common/btn/facebook.png" alt="페이스북"></a>
      <a href="https://twitter.com/" target="_blank"><img src="../img/common/btn/twitter.png" alt="트위터"></a>
      <a href="/" target="_blank"><img src="../img/common/btn/naver.png" alt="네이버블로그"></a>
      <a href="/" target="_blank"><img src="../img/common/btn/katalk.png" alt="카카오톡"></a>
      </div>
      <div id="ft_copy">  
    <span>주소 : 대구광역시 수성구 동대구로 300</span><br>
    <span>TEL : 053-719-3005</span><span>FAX : 053-719-3006</span><br>
    <span>이메일 : humanhp1999@hanmail.net</span> <br> 
    <span>대표 : 최진호</span><span>사업자등록번호 : 318-81-02441</span><br>   
    <span>통신판매신고번호 : 제2018-대구수성구-0001호</span><br>
    <span>개인정보보호책임자 : 최진호</span><br>
    Copyright © 2018 Voiceyou, All rights reserved.  &nbsp;<a href="/adm" target="_blank" title="새창열림"><img src="../img/common/btn/adminmode.gif" alt="열쇠모양 아이콘"></a>
      </div>   
  <button type="image" id="top_btn"><img src="../img/common/btn/bt_top.png"><span class="sound_only">상단으로</span></button>
</div>
<!-- } 하단 끝 -->
<script>
jQuery(function($) {

    $( document ).ready( function() {
        
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

</body></html>
<?php include_once('tail.html');?> 
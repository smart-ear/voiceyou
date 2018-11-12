<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	<!--html5인코딩 방식 통일 -->
<!--<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" /> -->
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
<html lang="ko">
<script src="/voiceyoutest/js/jquery-1.8.3.min.js"></script>
<script src="/voiceyoutest/js/menulink.js"></script>
<script src="/voiceyoutest/js/unslider.min.js"></script>
<script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.0.js" charset="utf-8"></script>
<script src="/voiceyoutest/js/naveridlogin_js_sdk_2.0.0.js"></script>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.2.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="canonical" href="">
<link rel="stylesheet" href="/voiceyoutest/css/mobile.css" />
</head>

<style type="text/css">
body {font-family:'Malgun Gothic';}
</style>
    
<style type="text/css">

.middle-box {
position: absolute;
  background: dark;
  margin-top:10%;
  width: 800px;
  margin-left: -400px; 
  left:50%;
  font-size:15px;
  padding-bottom:10%;
}
 @media screen and (min-width: 700px) and (max-width: 1100px){
            					/* 어디든 규격을 맞춰주기 위해 이 방법으로 구현!*/
           .middle-box
        {
margin-top:15%;
 left:5%;
      width: 90%;
  margin-left: 0px; 
  font-size:11px;
  padding-bottom:10%;
        }
        
            }
             @media screen and (max-width: 700px) {

                 .middle-box
        {
margin-top:15%;
 left:5%; 
      width: 90%;
  margin-left: 0px; 
  font-size:100%;
  padding-bottom:10%;
        }
        </style>
<body>
<!-- 상단 시작 { -->
<header id="hd">
    <h1 id="hd_h1">VOICE YOU</h1>
    <div class="to_content"><a href="#container">본문 바로가기</a></div>

	<!-- 상단 로고 시작 -->
    <div id="hd_wr">

		<div id="logo"><a href="javascript:main();"><img src="/voiceyoutest/img/logo (2).png" alt=""></a></div>	
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
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
		  <div id="member">
		  <span id="button"><a href="javascript:mygrade();"><img src="/voiceyoutest/img/icon_member.png" alt="회원아이콘"><?php echo $_SESSION["id"];?>님</a>
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
	</ul>
	<!-- 상단 메뉴 끝 -->
</header>
<body>
<div class='middle-box'>
<div style="text-align:center;"><font color="black" size="22px" >개인정보취급방침<br><br></font></div>
<div ><font color="black">스마트이어 주식회사는 정보통신망 이용촉진 및 정보보호 등에 관한 법률 (이하 정보통신망법), 개인정보보호법, 통신비밀보호법 등 정보통신서비스제공자가 준수하여야 할 관련 법령상의 개인정보보호 규정을 준수하며, 관련 법령에 의거한 개인정보취급방침을 정하여 이용자 권익 보호에 최선을 다하고 있습니다.
회사는 본 개인정보취급방침을 모바일 서비스 초기 화면 및 서비스 별 공식 커뮤니티에 공지하여 회원이 언제나 용이하게 볼 수 있도록 하고 있습니다. 본 개인정보취급방침은 관계 법령 및 지침의 변경이나 회사의 내부 방침 변경 등으로 인하여 변경될 수 있으며, 변경 시 회사는 변경 이유 및 내용에 대하여 즉시 안내 합니다.<br><br></font></div>

<div style="font-weight:bold;"><font color="black" >제 1 조 수집하는 개인정보의 항목 및 수집방법<br></font></div>
<br>
<div ><font color="black" >&nbsp;가. 수집하는 개인정보의 항목<br></font></div>
<br>
<div ><font color="black" >&nbsp;1) 계정 생성 및 로그인 서비스 제공, 원활한 고객상담을 위해 아래의 개인정보를 수집 및 이용합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;2) 이벤트 프로모션에 참여하거나 이벤트 상품 배송 등을 위하여 아래의 정보를 추가 수집할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;- 휴대전화번호, 전자우편 주소, 주소, 성별, 지역<br></font></div>
<br>
<div ><font color="black" >&nbsp;3) 서비스 이용과정에서 아래와 같은 정보들이 생성되어 수집될 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;- 서비스 이용기록, 접속 로그, 결제기록, IP주소, 서비스 사용시간, 관련된 통계<br></font></div>
<div ><font color="black" >&nbsp;- 휴대전화번호, 모바일 기기 모델명, 통신사 정보, OS 정보 및 버전, 기기식별번호(UUID), 단말기 언어 및 국가정보<br></font></div>
<br>
<div ><font color="black" >&nbsp;나. 개인정보 수집방법<br></font></div>
<div ><font color="black" >&nbsp;회사는 다음과 같은 방법으로 개인정보를 수집합니다.<br></font></div>
<div ><font color="black" >&nbsp;- 모바일 기기, 서면양식, 팩스, 전화, 상담 게시판, 이메일, 이벤트 및 프로모션<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 2 조 개인정보의 수집 및 이용목적<br></font></div>
<div ><font color="black" >&nbsp;회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;가. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br></font></div>
<div ><font color="black" >&nbsp;콘텐츠 제공, 물품배송 또는 청구서 등 발송, 본인인증, 구매 및 요금 결제<br></font></div>
<br>
<div ><font color="black" >&nbsp;나. 회원관리<br></font></div>
<div ><font color="black" >&nbsp;회원제 서비스 이용 및 제한적 본인 확인제에 따른 본인확인, 개인식별, 서비스 이용제한 회원(이용약관 제 19조에 의거하여 계약 해지된 회원 및 제20조에 의거하여 서비스 이용제한 회원)의 부정 이용 방지와 비인가 사용방지, 가입의사 확인, 가입 및 가입횟수 제한, 분쟁 조정을 위한 기록보존, 불만처리 등 민원처리, 고지사항 전달<br></font></div>
<br>
<div ><font color="black" >&nbsp;다. 신규 서비스 개발 및 마케팅ㆍ광고에의 활용<br></font></div>
<div ><font color="black" >&nbsp;신규 서비스 개발 및 맞춤 서비스 제공, 통계학적 특성에 따른 서비스 제공 및 광고 게재, 서비스의 유효성 확인, 이벤트 및 광고성 정보 제공 및 참여기회 제공, 접속빈도 파악, 회원의 서비스이용에 대한 통계<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 3 조 개인정보의 공유 및 제공<br></font></div>
<div ><font color="black" >&nbsp;회사는 이용자들의 개인정보를 2조 개인정보의 수집 및 이용목적에서 고지한 범위 내에서 사용하며, 이용자의 사전 동의 없이는 동 범위를 초과하여 이용하거나 원칙적으로 이용자의 개인정보를 외부에 공개하지 않습니다. 다만, 아래의 경우에는 예외로 합니다. <br></font></div>
<div ><font color="black" >&nbsp;- 이용자가 사전에 동의한 경우<br></font></div>
<div ><font color="black" >&nbsp;- 서비스 제공에 따른 요금 정산을 위해 필요한 경우<br></font></div>
<div ><font color="black" >&nbsp;- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우<br></font></div>
<div ><font color="black" >&nbsp;- 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 가공하여 제공하는 경우<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 4 조 개인정보의 보유 및 이용기간<br></font></div>
<div ><font color="black" >&nbsp;이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 단, 회사는 개인정보 도용 등으로 인한 원치 않는 회원탈퇴 등에 대비하기 위하여 회원탈퇴 요청 후, 30일간 ID 정보를 보유합니다. 이후에는 재생할 수 없는 방법으로 완전히 삭제합니다. 단 또한 다음과 같은 경우는 예외로 합니다.<br></font></div>
<div ><font color="black" >&nbsp;상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br></font></div>
<div ><font color="black" >&nbsp;- 서비스 방문기록<br></font></div>
<div ><font color="black" >&nbsp;* 보존 이유 : 통신비밀보호법 <br></font></div>
<div ><font color="black" >&nbsp;* 보존 기간 : 3개월<br></font></div>
<div ><font color="black" >&nbsp;- 계약 또는 청약철회 등에 관한 기록<br></font></div>
<div ><font color="black" >&nbsp;* 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br></font></div>
<div ><font color="black" >&nbsp;* 보존 기간 : 5년<br></font></div>
<div ><font color="black" >&nbsp;- 대금결제 및 재화 등의 공급에 관한 기록<br></font></div>
<div ><font color="black" >&nbsp;* 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률 <br></font></div>
<div ><font color="black" >&nbsp;* 보존 기간 : 5년<br></font></div>
<div ><font color="black" >&nbsp;- 소비자의 불만 또는 분쟁처리에 관한 기록<br></font></div>
<div ><font color="black" >&nbsp;* 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률<br></font></div>
<div ><font color="black" >&nbsp;* 보존 기간 : 3년<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 5 조 개인정보 파기절차 및 방법<br></font></div>
<div ><font color="black" >&nbsp;이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다. 회사의 개인정보 파기절차 및 방법은 다음과 같습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;가. 파기절차<br></font></div>
<div ><font color="black" >&nbsp;이용자가 회원가입 등을 위해 입력한 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조)일정 기간 저장된 후 파기됩니다. 동 개인정보는 법률에 의한 경우가 아니고서는 보유되는 이외의 다른 목적으로 이용되지 않습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;나. 파기방법<br></font></div>
<div ><font color="black" >&nbsp;- 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.<br></font></div>
<div ><font color="black" >&nbsp;- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다. <br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 6조 이용자 및 법정대리인(부모)의 권리와 그 행사방법<br></font></div>
<br>
<div ><font color="black" >&nbsp;가. 만 14세 미만 아동의 개인정보보호<br></font></div>
<div ><font color="black" >&nbsp;회사는 만 14세 미만 아동(이하 ‘아동’)의 개인정보에 대한 수집ㆍ이용ㆍ제공 등의 동의가 필요한 경우, 아동의 동의와 별도로 법정대리인(부모)의 동의를 받습니다. 법정대리인(부모)의 동의를 받기 위하여 회사는 법정대리인(부모)의 성명, 연락처 등 필요한 최소한의 정보를 요구할 수 있으며, 이와 같이 수집된 법정대리인(부모)의 개인정보는 해당 법정대리인(부모)의 동의여부를 확인하는 목적 외의 용도로 이용되거나 제3자에게 제공하지 아니합니다.<br></font></div>
<div ><font color="black" >&nbsp;법정대리인(부모)의 동의서는 아동과 회사의 계약, 청약철회, 대금결제, 재화 공급 등이 발생할 시 소비자의 불만 및 분쟁해결 등을 위한 용도로 이용됩니다.<br></font></div>
<div ><font color="black" >&nbsp;탈퇴한 아동의 법정대리인(부모) 동의서, 동의 철회 또는 유효기간이 만료된 법정대리인(부모) 동의서는 이용목적이 만료된 30일 이후에 재생이 불가능한 방법으로 파기됩니다. <br></font></div>
<div ><font color="black" >&nbsp;다만, 상법 또는 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의해 보존할 필요성이 있는 경우 회사는 관계법령에서 정한 기간 동안 법정 대리인의 개인정보를 보관합니다. 아동의 법정대리인(부모)은 아동의 개인정보 열람, 정정, 개인정보 제공에 대한 동의 철회를 요청할 수 있으며, 이러한 요청이 있을 경우 회사는 필요한 조치를 지체 없이 취하도록 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;나. 이용자 자신의 개인정보 관리에 관한 사항<br></font></div>
<div ><font color="black" >&nbsp;이용자는 제 2조, 제 3조의 항목에 대하여 거부할 권리가 있으며 해지나 수정을 원하시는 경우 개인정보관리책임자에게 서면, 전화, 전자우편 등을 통해 요청할 수 있습니다. 단, 해지 시 서비스 이용을 하실 수 없으며, 정보는 제 5조의 관련법에 의하여 보유합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 7조 개인정보 자동 수집 장치의 설치/운영에 관한 사항<br></font></div>
<div ><font color="black" >&nbsp;회사는 개인화되고 맞춤화된 서비스를 제공하기 위해서 이용자의 첫 가입 시 전화번호 및 기기식별번호 (디바이스 아이디 또는 IMEI)를 자동으로 수집합니다. <br></font></div>
<div ><font color="black" >&nbsp;이용자가 전화번호 및 기기식별번호를 자동으로 수집하는 것을 거부하는 경우에는 일부 서비스이용에 제약이 발생할 수 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 8조 개인정보의 기술적/관리적 보호 대책<br></font></div>
<div ><font color="black" >&nbsp;회사는 이용자들의 개인정보를 취급함에 있어 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적/관리적 대책을 강구하고 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;가. 비밀번호 암호화<br></font></div>
<div ><font color="black" >&nbsp;회원 아이디(ID)의 비밀번호는 암호화되어 저장 및 관리되고 있어 이용자만이 알고 있으며, 개인정보의 확인 및 변경도 비밀번호를 알고 있는 본인에 의해서만 가능합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;나. 해킹 등에 대비한 대책<br></font></div>
<div ><font color="black" >&nbsp;회사는 해킹이나 컴퓨터 바이러스 등에 의해 회원의 개인정보가 유출되거나 훼손되는 것을 막기 위해 최선을 다하고 있습니다. 개인정보의 훼손에 대비하여 자료를 수시로 백업하고 있고, 최신 백신프로그램을 이용하여 이용자들의 개인정보나 자료가 누출되거나 손상되지 않도록 방지하고 있으며, 암호화 통신 등을 통하여 네트워크상에서 개인정보를 안전하게 전송할 수 있도록 하고 있습니다. <br></font></div>
<div ><font color="black" >&nbsp;그리고 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있으며, 기타 시스템적으로 보안성을 확보하기 위한 가능한 모든 기술적 장치를 갖추려 노력하고 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;다. 취급 직원의 최소화 및 교육<br></font></div>
<div ><font color="black" >&nbsp;회사의 개인정보관련 취급 직원은 담당자에 한정시키고 있고 이를 위한 별도의 비밀번호를 부여하여 정기적으로 갱신하고 있으며, 담당자에 대한 수시 교육을 통하여 개인정보취급방침의 준수를 항상 강조하고 있습니다. 또한 문제가 발견될 경우, 즉시 바로 잡을 수 있도록 노력하고 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;라. 출입 및 보관 통제<br></font></div>
<div ><font color="black" >&nbsp;개인정보를 취급 및 보관하는 지역은 보안구역으로 정의하고 비인가자나 외부인의 출입을 통제하고 있으며, 개인정보를 포함하는 인쇄물, 출력물 등은 안전한 장소에 보관해 그 내용이나 해당 정보의 유무 확인이 불가하도록 관리하고 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;단, 회사가 개인정보처리자로서의 의무를 다하였음에도 불구하고, 이용자 본인의 부주의나 회사가 관리하지 않는 영역에서의 사고등 회사의 귀책에 기인하지 않은 손해에 대해서는 회사는 일체의 책임을 지지 않습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 9조 개인정보관리책임자 및 담당자의 연락처<br></font></div>
<div ><font color="black" >&nbsp;개인정보관리 책임자<br></font></div>
<div ><font color="black" >&nbsp;이름 : 최진호<br></font></div>
<div ><font color="black" >&nbsp;소속 : SmartEar Co. Ltd 대표<br></font></div>
<div ><font color="black" >&nbsp;E-MAIL : smart-help@smartear.co.kr<br></font></div>
<div ><font color="black" >&nbsp;대표전화 : 042-863-3836<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 11조 기타<br></font></div>
<div ><font color="black" >&nbsp;회사는 이용자들의 개인정보와 관련하여 이용자 여러분들의 의견을 수렴하고 있으며, 불만을 처리하기 위하여 모든 절차와 방법을 마련하고 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;이용자들은 상단에 명시한 회사의 개인정보관리 책임자 및 담당자의 소속, 성명 및 연락처 항을 참고하여 불만사항을 신고할 수 있고, 회사는 이용자들의 신고사항에 대하여 신속하고 충분한 답변을 해 드릴 것입니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.<br></font></div>
<div ><font color="black" >&nbsp;- 개인정보침해신고센터(http://privacy.kisa.or.kr/ 국번없이 118)<br></font></div>
<div ><font color="black" >&nbsp;- 대검찰청 첨단범죄수사과 (http://www.spo.go.kr, 전화 02-3480-2000)<br></font></div>
<div ><font color="black" >&nbsp;- 경찰청 사이버안전국 (http://www.ctrc.go.kr, 전화 182)<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 12조 고지의 의무<br></font></div>
<div ><font color="black" >&nbsp;현 개인정보취급방침의 내용 추가, 삭제 및 수정이 있을 시에는 개정 최소 7일전부터 서비스 별 공식 커뮤니티에 공지합니다.<br></font></div>
<div ><font color="black" >&nbsp;부칙<br></font></div>
</div>   

</body>
</html>

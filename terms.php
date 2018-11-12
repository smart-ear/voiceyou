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
<div class='middle-box'>
<div style="text-align:center;"><font color="black" size="22px" >이용약관<br><br></font></div>
<div style="font-weight:bold;"><font color="black" >제 1 조 (목적)<br></font></div>
<div ><font color="black">&nbsp;본 약관은 스마트이어 주식회사가 제공하는 VOICEYOU 서비스의 이용과 관련하여, 회사와 회원과의 권리, 의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.<br><br></font></div>

<div style="font-weight:bold;"><font color="black" >제 2 조 (용어의 정의)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 이 약관에서 사용하는 용어의 정의는 아래와 같습니다.<br></font></div>
<div ><font color="black" >&nbsp;1. "서비스"라 함은 녹음한 오디오 콘텐츠를 대중 및 전문가에게 평가 받고 강사 매칭, 강의 매칭 관련 서비스를 의미합니다.<br></font></div>
<div ><font color="black" >&nbsp;2. "회원"이라 함은 회사의 "서비스"에 접속하여 이 약관에 따라 "회사"와 이용계약을 체결하고 "회사"가 제공하는 "서비스"를 이용하는 고객을 말합니다.<br></font></div>
<div ><font color="black" >&nbsp;3. "비회원"이라 함은 "회원"이 아니면서 "회사"가 제공하는 서비스를 지속적으로 이용할 수 있는 자를 말하며, "회사"는 "회원"과 "비회원"에게 제공하는 서비스에 차별을 두어 제공할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;4. "유료서비스"라 함은 "서비스" 중 "회사"가 유료로 제공하는 VOICEYOU와 관련한 각종 부가 서비스를 의미합니다.<br></font></div>
<div ><font color="black" >&nbsp;5. “게시물“이라 함은 “이용자”가 “서비스”를 이용함에 있어 단말기(PC, 휴대형 단말기, TV 등의 각종 유무선 장치를 포함) 또는 “회사” 홈페이지 등에 게시한 부호ㆍ문자ㆍ음성ㆍ음향ㆍ화상ㆍ동영상 등의 정보 형태의 글, 사진, 동영상 및 각종 파일과 링크 등을 의미합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 이 약관에서 사용하는 용어의 정의는 제1항에서 정하는 것을 제외하고는 관련법령에서 정하는 바에 의하며, 관련 법령에서 정하지 않는 것은 일반적인 상관관계에 의합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 3 조 (약관의 명시와 개정)<br></font></div>
<br>
<div ><font color="black">&nbsp;➀ 회사”는 이 약관의 내용을 “이용자”가 쉽게 알 수 있도록 “서비스” 초기 화면에 게시합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 약관의 규제에 관한 법률, 전기통신기본법, 전기통신사업법, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 등 관련 법령을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 개정약관의 적용일자 7일전부터 적용일자 전일까지 공지합니다. 단 회원의 권리, 의무에 중대한 영향을 주는 변경의 경우에는 적용일자 30일 전부터 공지하도록 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회원은 변경된 약관에 대해 거부할 권리가 있습니다. 회원은 변경된 약관이 공지된 지 15일이내에 거부의사를 표명할 수 있습니다. 회원이 거부하는 경우 본 서비스 제공자인 회사는 15일의 기간을 정하여 회원에게 사전통지 후 당해 회원과의 계약을 해지할 수 있습니다. 만약, 회원이 거부 의사를 표시하지 않거나, 전항에 따라 시행일 이후에 "서비스"를 이용하는 경우에는 동의한 것으로 간주합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 4 조 (약관의 해석)<br></font></div>
<br>
<div ><font color="black">&nbsp;➀ 회원이 회사와 개별계약을 체결하여 서비스를 이용하는 경우 회사는 개별 서비스에 대한 이용약관 또는 운영정책 등(이하 "운영정책 등")을 둘 수 있으며, 해당 내용이 본 약관과 상충되는 경우 개별서비스에 대한 운영정책 등이 우선합니다.<br></font></div>
<br>
<div ><font color="black">&nbsp;➁ 이 약관에서 규정하지 않은 사항에 관해서는 약관의 규제에 관한 법률, 전기통신기본법, 전기통신사업법, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 등의 관계법령에 따릅니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 5 조 (이용계약의 성립)<br></font></div>
<br>
<div ><font color="black">&nbsp;➀ 회사와 회원 사이의 서비스 이용계약(이하 "이용계약"이라 함)은 서비스를 이용하고자 하는 자(이하 "가입신청자"라 함)의 애플리케이션 설치, 회원가입 등의 이용신청 및 본 약관과 개인정보취급방침의 내용에 대한 동의에 대한 "회사"의 이용승낙으로 성립합니다.<br></font></div>
<br>
<div ><font color="black">&nbsp;➁ 본 약관 및 개인정보취급방침에 대한 동의의 의사표시는 "가입신청자"가 이용신청 당시 "서비스 이용약관에 동의함" 버튼을 누름으로써 이루어지며, 이와 동시에 위 "가입신청자"가 본 약관 및 개인정보취급방침에 대하여 동의한 것으로 간주합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 가입신청자의 신청에 대하여 서비스 이용을 승낙함을 원칙으로 합니다. 다만, 회사는 다음 각 호에 해당하는 신청에 대하여는 승낙을 하지 않거나 사후에 이용계약을 해지할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;1. 가입신청자가 이 약관에 의하여 이전에 회원자격을 상실한 적이 있는 경우<br></font></div>
<div ><font color="black" >&nbsp;2. 실명이 아니거나 타인의 명의를 이용한 가입신청의 경우<br></font></div>
<div ><font color="black" >&nbsp;3. 허위의 정보를 기재하거나, 회사가 제시하는 내용을 기재하지 않은 경우<br></font></div>
<div ><font color="black" >&nbsp;4. 만 14세 미만 아동이 정보통신망 이용촉진 및 정보보호 등에 관한 법률에서 정한 "개인정보" 입력 시 법정대리인의 동의를 얻지 아니한 경우<br></font></div>
<div ><font color="black" >&nbsp;5. 가입신청자의 귀책사유로 인하여 승인이 불가능하거나 기타 규정한 제반 사항을 위반하며 신청하는 경우<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사는 서비스관련설비의 여유가 없거나, 기술상 또는 업무상 문제가 있는 경우에는 승낙을 유보할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ 회사가 제2항, 제3항 및 제5항에 따라 회원가입신청을 승낙하지 아니하거나 유보한 경우, 회사는 원칙적으로 그 사실을 가입신청자에게 알리도록 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➅ 이용계약의 성립 시기는 회사가 가입완료를 신청절차 상에서 표시한 시점으로 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➆ 회원이 유료서비스를 이용하는 경우 이용대금을 납부한 후 서비스를 이용하는 것을 원칙으로 하며, 유료서비스 이용계약의 성립 시기는 "구매완료"를 신청절차 상에서 표시한 시점으로 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➇ 회사는 회원에 대해 회사정책에 따라 등급별로 구분하여 이용시간, 이용횟수, 서비스 메뉴 등을 세분하여 이용에 차등을 둘 수 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 6 조 (이용자 정보의 제공)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회원으로 가입하여 서비스를 이용하고자 하는 이용자는 이메일, 연락처 등 정보를 제공하고, 휴대폰 또는 이메일 인증을 하여야 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 이용자가 제1항에서 정한 인증을 거치지 않은 경우 서비스 이용이 제한될 수 있으며, 실명으로 등록하지 않은 이용자 또는 회원은 일체의 권리를 주장할 수 없습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 타인의 명의를 도용하여 이용신청을 한 회원의 모든 ID는 삭제되며, 관계법령에 따라 처벌을 받을 수 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 7 조 (개인정보의 보호 및 관리)<br></font></div>
<div ><font color="black" >&nbsp;➀ 회사는 관계 법령이 정하는 바에 따라 계정정보를 포함한 회원의 개인정보를 보호하기 위하여 노력합니다. 회원의 개인정보 보호 및 사용에 대해서는 회사가 별도로 고지하는 개인정보취급방침에 따릅니다. 다만, 회사가 제공하는 공식 서비스 애플리케이션 및 사이트 이외의 링크된 사이트에서는 회사의 개인정보취급방침이 적용되지 않습니다.<br></font></div>
<div ><font color="black" >&nbsp;➁ 회사는 회원의 귀책사유로 인하여 노출된 회원의 계정정보를 포함한 모든 정보에 대해서는 일체의 책임을 지지 않습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 8 조 (“회원”의 “아이디” 관리에 대한 의무)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “회원”의 “아이디”에 관한 관리책임은 “이용자”에게 있으며, 이를 제3자가 이용하도록 하여서는 안 됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 계정정보를 통하여 당해 회원의 서비스 이용가능여부 등 제반 이용자 관리 업무를 수행합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회원은 자신의 계정정보를 선량한 관리자로서의 주의의무를 다하여 관리 하여야 합니다. 회원이 본인의 계정정보를 소홀히 관리하거나 제3자에게 이용을 승낙함으로써 발생하는 손해에 대하여는 회원에게 책임이 있습니다.
<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 9 조 (회원에 대한 통지)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사가 회원에 대한 통지를 하는 경우 본 약관에 별도 규정이 없는 한 회원이 지정한 전자우편주소, 서비스 내 전자메모 및 쪽지 등으로 할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 회원 전체에 대한 통지의 경우 7일 이상 회사의 홈페이지 또는 앱 서비스 공지사항 게시판에 게시함으로써 제1항의 통지에 갈음할 수 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 10 조 (회사의 의무)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사는 본 약관 및 관련법령에서 금지하는 행위 및 미풍양속에 반하는 행위를 하지 않으며, 계속적이고 안정적인 서비스의 제공을 위하여 최선을 다하여 노력합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 회원이 안전하게 서비스를 이용할 수 있도록 신용정보를 포함한 일체의 개인정보 보호를 위한 보안시스템을 갖추어야 하며 개인정보취급방침을 공시하고 준수합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 회원으로부터 제기되는 의견이나 불만이 정당하다고 객관적으로 인정될 경우에는 합리적인 기간 내에 신속하게 처리하여야 합니다. 다만, 처리에 장기간이 소요되는 경우 회원에게 게시판 또는 전자우편 등을 통하여 지체 사유를 안내하고 처리과정 및 처리결과를 전달합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사는 이용계약의 체결, 계약사항의 변경 및 해지 등 이용자와의 계약관련 절차 및 내용 등에 있어 이용자에게 편의를 제공하도록 노력합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ 회사가 유료서비스를 제공하는 경우, 회사는 다음의 사항을 해당 서비스의 이용 초기화면이나 FAQ 화면 등에 회원이 알기 쉽게 표시합니다.<br></font></div>
<div ><font color="black" >&nbsp;1. 유료서비스의 명칭 또는 제호<br></font></div>
<div ><font color="black" >&nbsp;2. 유료서비스의 내용, 이용방법, 이용료, 결제방법 기타 이용조건<br></font></div>
<div ><font color="black" >&nbsp;3. 이용가능 기기 및 이용에 필요한 최소한의 기술사양<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 11 조 (회원의 의무)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회원은 회사에서 제공하는 서비스를 본래의 이용 목적 이외의 용도로 사용하거나 다음 각 호에 해당하는 행위를 해서는 안됩니다.<br></font></div>
<div ><font color="black" >&nbsp;1. 가입신청 또는 정보 변경을 목적으로 회사에 개인정보 등록시 실명이 아닌 정보 또는 다른 사람의 정보를 사용하거나 허위 사실을 기재하는 행위<br></font></div>
<div ><font color="black" >&nbsp;2. 타인으로 가장하거나 타인과의 관계를 허위로 명시하는 행위, 다른 회원의 계정 및 비밀번호를 도용, 부정하게 사용하거나, 타인의 신용카드, 전화번호 등을 무단으로 도용하여 유료콘텐츠 등을 구매하는 행위<br></font></div>
<div ><font color="black" >&nbsp;3. 회사의 서비스 및 제공된 애플리케이션을 이용하여 얻은 정보를 회사의 사전 승낙없이 복제, 유통, 조장하거나 상업적으로 이용, 알려지거나 알려지지 않은 버그를 악용하여 서비스를 이용하는 행위<br></font></div>
<div ><font color="black" >&nbsp;4. 회사의 서비스 및 제공된 애플리케이션을 이용하여 자기 또는 타인에게 재산상의 이익을 발생시키는 행위<br></font></div>
<div ><font color="black" >&nbsp;5. 회사 및 제3자의 명예를 훼손하거나 업무를 방해하거나 회사 및 제3자에게 손해를 가하는 행위<br></font></div>
<div ><font color="black" >&nbsp;6. 회사의 지적재산권, 제3자의 지적재산권, 초상권 등 기타 권리를 침해하거나 회사의 승인을 받지 않고 다른 회원의 개인정보를 수집, 저장, 유포, 게시하는 행위<br></font></div>
<div ><font color="black" >&nbsp;7. 제3자를 기망하여 이득을 취하거나 회사가 제공하는 서비스를 불건전하게 이용하거나 하여 제3자에게 피해를 주는 행위<br></font></div>
<div ><font color="black" >&nbsp;8. 음란, 저속한 정보를 교류, 게재하거나 음란 사이트를 연결(링크)하거나 승인되지 않은 광고 및 홍보물을 게재하는 행위<br></font></div>
<div ><font color="black" >&nbsp;9. 재물을 걸고 도박하는 등 사해행위를 유도하거나 참여하는 행위<br></font></div>
<div ><font color="black" >&nbsp;10. 수치심이나 혐오감 또는 공포심을 일으키는 말이나 음향, 글, 화상 또는 영상을 게재하거나 상대방에게 전송, 도달, 유포하는 행위<br></font></div>
<div ><font color="black" >&nbsp;11. 관련 법령에 의하여 전송 또는 게시가 금지되는 정보 또는 컴퓨터 소프트웨어, 하드웨어, 전기통신장비의 정상적인 가동을 방해, 파괴할 목적으로 고안된 소프트웨어 바이러스 기타 다른 컴퓨터 코드, 파일, 프로그램을 포함하고 있는 자료를 전송, 게시, 유포, 사용하는 행위<br></font></div>
<div ><font color="black" >&nbsp;12. 회사로부터 특별한 권리를 부여받지 않고 애플리케이션을 변경하거나 애플리케이션에 다른 프로그램을 추가 또는 삽입하거나 서버를 해킹, 역설계, 소스코드나 애플리케이션 데이터의 유출 및 변경, 별도의 서버를 구축하거나 웹사이트의 일부분을 임의로 변경 또는 도용하여 회사를 사칭하는 행위<br></font></div>
<div ><font color="black" >&nbsp;13. 회사의 직원이나 운영자를 가장, 사칭하거나 또는 타인의 명의를 도용하여 명함 등 정보를 등록하거나 글을 게시하거나 메일을 발송하는 행위<br></font></div>
<div ><font color="black" >&nbsp;14. 회사의 동의 없이 영리, 영업, 광고, 정치활동, 불법선거운동 등을 목적으로 서비스를 이용하는 행위<br></font></div>
<div ><font color="black" >&nbsp;15. 기타 공공질서 및 미풍양속을 위반하거나 불법적, 부당한 행위 및 법령에 위배되는 행위<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회원은 회사 홈페이지 상의 공지사항 및 이용약관의 수정사항 등을 확인하고 이를 준수할 의무가 있으며 기타 회사의 업무에 방해되는 행위를 하여서는 안 됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회원의 계정에 관한 관리 책임은 회원에게 있으며, 이를 제3자가 이용하도록 하여서는 안 됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ “이용자” 가 개인적으로 이용하는 것 이외에 영리목적으로 서비스를 이용하고자 할 경우, “회사”가 정한 소정의 요금을 납부하여야 합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 12 조 (서비스의 제공시간 및 중지)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사는 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴 1일 24시간 서비스를 제공합니다. 다만, 정보통신설비 등 시스템 정기점검, 서버의 증설 및 교체, 각종 버그 패치, 새로운 서비스로의 교체 등 운영상 필요한 경우, 일정기간 동안 서비스를 일시 중지시킬 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 제1항 단서의 경우 회사는 그 내용 및 시간을 홈페이지나 애플리케이션 내에 공지합니다. 다만, 회사가 사전에 통지할 수 없는 부득이한 사유가 있는 경우 사후에 통지할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 서비스의 제공에 필요한 경우 정기점검을 실시할 수 있으며, 정기점검시간은 서비스 제공화면에 공시한 바에 따릅니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사가 사업종목의 전환, 사업의 포기 등의 이유로 회원이 신청한 유료서비스를 제공할 수 없게 되는 경우, 회사는 제9조(회원에 대한 통지)에서 정한 방법으로 회원에게 통지하고 당초 회사에서 제시한 조건에 따라 회원에게 보상합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 13 조 (서비스의 내용 및 변경)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회원은 회사가 제공하는 서비스를 이 약관, 운영정책 등 회사가 정한 규칙에 따라 이용할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사가 회원에게 제공하는 서비스에 대하여 회사는 제작, 변경, 유지, 보수에 관한 포괄적인 권한을 가집니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 새로운 서비스 내용, 각종 버그 패치 등 서비스의 운영상 또는 기술상의 필요한 경우, 제공하고 있는 서비스의 전부 또는 일부를 상시적으로 수정, 추가, 폐지 등 변경할 수 있습니다. 변경될 서비스의 내용 및 제공일자 등에 대해서는 그 변경 7일 이상 전에 회사가 운영하는 홈페이지 및 해당 서비스 초기화면에 게시함으로써 회원에 대한 통지에 갈음합니다. 다만, 회사가 통제할 수 없는 사유로 인한 서비스의 중단으로 인하여 사전 통지가 불가능한 경우에는 그러하지 아니합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사는 무료로 제공되는 서비스의 일부 또는 전부를 회사의 정책 기획이나 운영상 또는 회사의 긴박한 상황 등 필요에 의해 수정, 중단, 변경할 수 있으며, 이에 대하여 관련 법령상 특별한 규정이 없는 한 회원에게 별도의 보상을 하지 않습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ 회사는 유료서비스의 변경 내용이 중대하거나 회원에게 불리한 경우 해당 유료서비스를 제공받는 회원에게 제9조에서 정한 방법으로 회원에게 통지합니다. 이 경우, 동의를 거절한 회원에 대해서는 변경 전 서비스를 제공합니다. 다만, 변경전 서비스의 제공이 불가능한 경우 해당 서비스의 제공을 중지하거나 중단할 수 있으며 그 경우 환불에 대해서는 제19조 제2항에 따라 진행합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➅ 회사는 다음 각호에 해당하는 경우 서비스의 전부 또는 일부를 제한하거나 중지할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;1. 전시, 사변, 천재지변 또는 국가비상사태 등 불가항력적인 사유가 있는 경우<br></font></div>
<div ><font color="black" >&nbsp;2. 정전, 제반 설비의 장애 또는 이용량의 폭주 등으로 정상적인 서비스 이용에 지장이 있는 경우<br></font></div>
<div ><font color="black" >&nbsp;3. 서비스용 설비의 보수 등 공사로 인한 부득이한 경우<br></font></div>
<div ><font color="black" >&nbsp;4. 기타 회사의 제반 사정으로 서비스를 할 수 없는 경우<br></font></div>
<br>
<div ><font color="black" >&nbsp;➆ 회사는 서비스가 변경되거나 중지된 원인이 회사의 고의 또는 중대한 과실로 인한 경우를 제외하고는 서비스의 변경 및 중지로 발생하는 문제에 대해서 책임을 부담하지 않습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 14 조 (정보의 제공 및 광고의 게재)<br></font></div>
<div ><font color="black" >&nbsp;➀ 회사는 회원이 서비스 이용 중 필요하다고 인정되는 다양한 정보를 회사의 홈페이지 또는 앱의 공지사항에 게시하거나 전자우편 등을 이용하여 회원에게 제공할 수 있습니다. 다만, 회원은 관련 법령에 따른 거래관련 정보, 고객센터 답변 등을 제외한 정보의 전송에 대하여 언제든지 전자우편 등을 통하여 수신거절의 의사표시를 할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;➁ 회사는 본 서비스 등을 유지하기 위하여 광고를 게재할 수 있으며, 회원은 서비스 이용 시 노출되는 광고게재에 대하여 동의합니다.<br></font></div>
<div ><font color="black" >&nbsp;➂ 회사가 제공하는, 제3자가 주체인, 제2항의 광고에 회원이 참여하거나 교신 또는 거래를 함으로써 발생하는 손실과 손해에 대해서 회사는 어떠한 책임도 부담하지 않습니다.<br></font></div>
<div ><font color="black" >&nbsp;➃ 회사는 적법하게 수집한 회원의 개인정보를 활용하여 제2항의 광고 등을 제공하는 경우 SMS(LMS), 스마트폰 알림(Push 알림), 메일주소 등을 활용하여 발송할 수 있으며, 이용자가 원하지 않는 경우에는 언제든지 수신을 거부할 수 있습니다.<br></font></div>
<div ><font color="black" >&nbsp;➄ 회사는 상기 정보제공과 광고와 관련해서는 정보를 회사에 제공하는 플랫폼사업자의 약관 및 회사의 약관에 준거하며 관련 법령 및 시행령의 규정을 준수합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 15 조 (유료서비스의 구매, 사용기간 및 이용)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “회사”는 “이용자”가 별도 비용지급 없이 이용할 수 있는 “서비스”(이하 “무료서비스”라 합니다.)와 “회사”가 미리 책정한 요금을 지불하고 이용하는 “서비스”(이하 “유료서비스”라 합니다.)를 제공할 수 있으며, “이용자”는 “서비스”를 선택하여 이용할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ “서비스”의 이용에 대한 대금지급방법은 “회사”가 제공하는 방법을 통하여 할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ “이용자”는 “서비스”를 사용하고 있는 디바이스의 종류에 따른 각 앱 스토어 사업자의 결제 운영정책에 따라 “유료서비스”를 구매할 수 있으며, 해당 결제 정책의 차이로 인해 결제금액의 차이가 발생할 수 있습니다. 또한 “유료서비스”의 구매 대금은 앱 스토어 사업자와 연계된 이동통신사나 플랫폼사업자 및 앱 스토어사업자가 정하는 방법 및 정책에 따라 부과되며, 납부방식 역시 해당 사업자의 정책을 따릅니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 16 조 (유료 결제)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “서비스”는 유료 아이템 구매를 위한 유료결제 기능을 포함하고 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ “이용자”는 디바이스의 비밀번호 설정 기능, 오픈마켓에서 제공하는 비밀번호 설정 기능 등을 이용하여 제3자의 유료결제를 방지하여야 하며, “회사”는 이를 위하여 방송통신위원회의 권고 및 “오픈마켓 모바일콘텐츠 결제 가이드라인”에 따라 오픈마켓이 제공하는 인증절차 등이 적용된 유료결제를 위한 모듈, 라이브러리 등을 “서비스”에 적용합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ “이용자”가 디바이스 및 오픈마켓의 비밀번호 설정 기능 등을 이용하지 않거나 부주의하게 노출하여 발생하는 제3자의 유료결제에 대하여는 “회사”가 어떠한 책임도 부담하지 않습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ “이용자”가 이동통신사의 청소년 요금제에 가입한 경우, 해당 디바이스에서의 유료결제를 하면 그 내용은 법정대리인의 동의가 있는 것으로 간주합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ “이용자”는 유료결제 대금을 성실히 납부하여야 할 책임이 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 17 조 (청약철회 및 환불 등)<br></font></div>
<div ><font color="black" >&nbsp;➀ 회원이 구매한 유료서비스의 경우에는 계약 체결일 또는 유료서비스 이용가능일로부터 7일 이내에 별도의 수수료 없이 청약철회(구매취소)를 할 수 있습니다. 단, 선물 및 이벤트 등 회사나 제3자로부터 무상으로 제공받은 유료서비스, 청약철회 요청 당시 이미 사용하였거나 사용한 것으로 간주되는 유료서비스 등 이에 준하는 특성을 가진 일부 서비스에 대하여는 「전자상거래 등에서의 소비자보호에 관한 법률」 제17조 제2항에 따라 청약철회(구매취소)가 제한될 수 있습니다. 이 경우 회사는 회원이 해당 유료서비스 구매 시 고지하는 등 관련 법률에서 정한 바에 따른 조치를 취하기로 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 회사의 귀책사유로 인하여 회원이 구매한 유료서비스를 이용하지 못하는 경우, 동일한 유료서비스를 무상으로 제공하거나 해당 구매금액 전액을 환불합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 제13조 제5항, 제18조 또는 제20조에 따라 계약이 해지된 경우 잔여 금액을 환불합니다. 단, 정상적으로 사용되었거나 무상으로 지급한 이벤트성 포인트는 환불대상에서 제외됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사는 과오금이 발생한 경우 이용대금의 결제와 동일한 방법으로 과오금 전액을 환불하여야 하며, 회사가 과오금에 대한 환불을 거부할 경우 회사는 정당하게 이용대금이 부과되었음을 증명하여야 합니다. 과오금의 환불절차는 디지털콘텐츠이용자보호지침에 따릅니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ 회사는 결제와 동일한 방법으로 환불을 진행하며, 결제와 동일한 방법으로 환불이 불가능한 때는 이를 사전에 고지합니다. 다만, 수납확인이 필요한 결제수단의 경우에는 수납확인일로부터 3영업일 이내에 이를 환불하도록 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➅ 본 조에 따른 환불 진행 시, 환불 수수료(30% 또는 2000원 중 큰 금액)는 회원의 귀책사유로 인한 경우에는 회원이, 회사의 귀책사유로 인한 경우에는 회사가 각 부담합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➆ 이용자가 실제 정상적인 구매내역이 기록되는 이용대금의 결제를 통하지 않고 서비스 중에 보상으로 취득하거나, 회사의 내부 혹은 외부 제휴 이벤트 등을 통하여 지급한 유료콘텐츠 등은 환불의 대상이 되지 않습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 18 조 (“게시물”의 저작권)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “이용자”가 “서비스”와 관련하여 게시한 “게시물”의 저작권은 해당 게시물의 저작자에게 귀속됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁  회사는 저작권법 규정을 준수하며, “이용자”는 언제든지 고객센터를 통해 해당 게시물에 대해 삭제, 검색결과 제외, 비공개 등의 조치를 취할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ “회사”는 제2항 이외의 방법으로 “이용자”의 “게시물”을 이용하고자 하는 경우에는 전화, 팩스, 전자우편 등을 통해 사전에 “이용자”의 동의를 얻어야 합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 19 조 (“게시물”의 관리)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “이용자”의 “게시물”이 “정보통신망법” 및 “저작권법”등 관계법령에 위반되는 내용을 포함하는 경우, 권리자는 관계법령이 정한 절차에 따라 해당 “게시물”의 게시중단 및 삭제 등을 요청할 수 있으며, “회사”는 관계법령에 따라 조치를 취하여야 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ “회사”는 전항에 따른 권리자의 요청이 없는 경우라도 권리침해가 인정될 만한 사유가 있거나 기타 회사 정책 및 관계법령에 위반되는 경우에는 관계법령에 따라 해당 “게시물”에 대해 임시조치 등을 취할 수 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 20 조 (권리의 귀속)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “서비스”에 대한 저작권 및 지적재산권은 “회사”에 귀속됩니다. 단, “이용자”의 “게시물” 및 제휴계약에 따라 제공된 저작물 등은 제외합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ “회사”가 제공하는 “서비스”의 디자인, “회사”가 만든 텍스트, 스크립트(script), 그래픽, “이용자” 상호간 전송 기능 등 “회사”가 제공하는 “서비스”에 관련된 모든 상표, “서비스” 마크, 로고 등에 관한 저작권 기타 지적재산권은 대한민국 및 외국의 법령에 기하여 “회사”가 보유하고 있거나 “회사”에게 소유권 또는 사용권이 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ “회사”는 “서비스”와 관련하여 “이용자”에게 “회사”가 정한 이용조건에 따라 계정, “아이디”, 콘텐츠 등을 이용할 수 있는 이용권만을 부여하며, “이용자”는 이를 양도, 판매, 담보제공 등의 처분행위를 할 수 없습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 21 조 (계약해제, 해지 등)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ “이용자”는 언제든지 고객센터를 통하여 이용계약 해지 신청을 할 수 있으며, “회사”는 관계법령 등이 정하는 바에 따라 이를 즉시 처리하여야 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ “이용자”가 계약을 해지할 경우, 관계법령 및 개인정보취급방침에 따라 “회사”가 이용자정보를 보유하는 경우를 제외하고는 해지 즉시 “이용자”의 모든 데이터는 소멸됩니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 22 조 (이용제한 등)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사는 회원이 본 약관의 의무를 위반하거나 서비스의 정상적인 운영을 방해한 경우, 서비스 이용을 경고, 일시정지, 계약해지로 단계적으로 제한할 수 있습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 제1항의 규정에도 불구하고, 주민등록법을 위반한 명의도용 및 결제도용, 저작권법 및 컴퓨터프로그램보호법을 위반한 불법프로그램의 제공 및 운영방해, 정보통신망 이용촉진 및 정보보호 등에 관한 법률을 위반한 불법통신 및 해킹, 악성프로그램의 배포, 접속권한 초과행위 등과 같이 관련법령을 위반한 경우에는 즉시 계약을 해지 할 수 있습니다. 이에 따른 계약해지시 서비스 이용을 통해 획득한 혜택 등은 모두 소멸되며, 회사는 이에 대해 별도로 보상하지 않습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사가 위 제1항에 따라 회원의 서비스 이용을 제한하거나 계약을 해지하는 경우, 제한의 조건 및 세부내용은 이용제한정책 등에서 정한 바에 따르며, 회사는 제9조에서 정한 방법으로 통지합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회원은 회사의 이용제한 조치 등에 대하여 회사가 정한 절차에 따라 이의신청을 할 수 있습니다. 회원의 이의 사유가 정당하다고 인정되는 경우 회사는 즉시 회원의 서비스 이용을 재개하여야 합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 23 조 (손해배상)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사가 제공하는 유료서비스의 하자 등에 의하여 회원에게 피해가 발생한 경우, 회원에 대한 피해보상의 기준, 범위, 방법 및 절차에 관한 사항은 '디지털콘텐츠이용자보호지침'에 따릅니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회원이 이 약관의 의무를 위반함으로 인하여 회사에 손해를 입힌 경우 또는 회원이 서비스의 이용과 관련하여 회사에 손해를 입힌 경우 회원은 회사에 대하여 손해를 배상하여야 합니다<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회원이 서비스를 이용함에 있어 행한 불법행위 또는 본 약관을 위반한 행위로 회사가 당해 이용자 외의 제3자로부터 손해배상청구 또는 소송 등 각종 이의제기를 받는 경우 당해 회원은 자신의 책임과 비용으로 회사를 면책시켜야 하며, 회사가 면책되지 못한 경우 당해 이용자는 그로 인하여 회사에 발생한 모든 손해를 배상할 책임이 있습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 24 조 (책임의 한계)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사는 천재지변 또는 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 관한 책임이 면제됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사는 회원의 귀책사유로 인한 서비스 중지 또는 이용의 장애에 대하여는 책임을 지지 아니하며, 기간통신사업자가 전기통신서비스를 중지하거나 정상적으로 제공하지 아니하여 회원에게 손해가 발생한 경우에는 책임이 면제됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➂ 회사는 회원이 서비스와 관련하여 게재한 정보, 자료, 사실의 신뢰도, 정확성 등의 내용에 관하여는 책임을 지지 않습니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➃ 회사는 회원 간 또는 회원과 제3자 상호간에 서비스를 매개로 하여 거래 등을 한 경우에는 책임이 면제됩니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➄ 회사는 무료로 제공되는 서비스 이용과 관련하여 관련법령에 특별한 규정이 없는 한 책임을 지지 않습니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 25 조 (준거법 및 재판관할)<br></font></div>
<br>
<div ><font color="black" >&nbsp;➀ 회사와 회원 간 제기된 소송은 대한민국법을 준거법으로 합니다.<br></font></div>
<br>
<div ><font color="black" >&nbsp;➁ 회사와 회원간 발생한 분쟁에 관한 소송은 민사소송법 상의 관할법원에 제소합니다.<br></font></div>
<br>
<div style="font-weight:bold;"><font color="black" >제 25 조 (준거법 및 재판관할)<br></font></div>
<div ><font color="black" >&nbsp; 회사의 상호 및 주소 등은 다음과 같습니다.<br></font></div>
<div ><font color="black" >&nbsp; 상호 : SmartEar Co. Ltd<br></font></div>
<div ><font color="black" >&nbsp; 대표자 : 최진호<br></font></div>
<div ><font color="black" >&nbsp; 주소 : 대구광역시 수성구 동대구로 300<br></font></div>
<div ><font color="black" >&nbsp; 대표전화 : 010-5213-3836<br></font></div>
<div ><font color="black" >&nbsp; 이메일 주소 : smart-help@smartear.co.kr<br></font></div>

</div>   

</body>
</html>

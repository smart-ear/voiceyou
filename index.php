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
<script src="/voiceyoutest/js/jquery-1.8.3.min.js"></script>
<script src="/voiceyoutest/js/menulink.js"></script>
<script src="/voiceyoutest/js/unslider.min.js"></script>
<link rel="canonical" href="">
<link rel="stylesheet" href="/voiceyoutest/css/mobile.css" />

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
    <h1 id="hd_h1">VOICEYOU</h1>
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
                    <a href="javascript:script();" class="gnb_1da">Upload</a>

                </li>
                <li class="gnb_1dli">
                    <a href="/voiceyoutest/mobile/chart_test.php" class="gnb_1da">Chart</a>
                </li>
            <!--    <li class="gnb_1dli">
                    <a href="../voiceyou_dongkyu/mobile/elice_m.php;" class="gnb_1da">Apply</a>
                </li>-->
            </ul>

        </div>
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
          <!--<div id="member">
          <span id="button"><a href="/voiceyoutest/mobile/my_grade.php"><img src="/voiceyoutest/img/icon_member.png" alt="회원아이콘"><?php echo $_SESSION["id"];?>님</a>
            <!--<button id="btn" type="submit" onclick="location.href='../m/logout.php';"><img src="../img/logout.png"></button>-->
          <!--  </span>
            </div>-->
            </div>
            <div id="gnb" class="hd_div">
            <button type="button" id="gnb_close" class="hd_closer"><span class="sound_only">메뉴 </span>닫기</button>

            <ul id="gnb_1dul">
            <li class="gnb_1dli">
                    <span id="button"><a href="/voiceyoutest/mobile/my_grade.php" class="gnb_1da"><img src="/voiceyoutest/img/icon_member.png" alt="회원아이콘" style="width: auto; height: 20px;" max-height:"20px">&nbsp;<?php echo $_SESSION["id"];?></a>
                </li>
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
                    <a href="/voiceyoutest/mobile/script.php" class="gnb_1da">Leture</a>

                    
                </li>
                <li class="gnb_1dli">
                    <a href="/voiceyoutest/mobile/chart_test.php" class="gnb_1da">Chart</a>
                </li>
                <li class="gnb_1dli">
                    <a href="" class="gnb_1da">My Page</a>

                    <button type="button" class="btn_gnb_op">하위분류</button>
                    <ul class="gnb_2dul">
                        <li class="gnb_2dli"><a href="/voiceyoutest/mobile/my_page_list.php" class="gnb_2da"><span></span>Feedback</a></li>
                         
                        <li class="gnb_2dli"><a href="/voiceyoutest/mobile/script_new.php" class="gnb_2da"><span></span>Upload</a></li>
                        <!--<li class="gnb_2dli"><a href="" class="gnb_2da"><span></span>Lecture</a></li> -->
                    </ul>
                </li>
            <!--    <li class="gnb_1dli">
                    <a href="../voiceyou_dongkyu/mobile/elice_m.php;" class="gnb_1da">Apply</a>
                </li>-->
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
        <li><a href="/voiceyoutest/mobile/script.php">Upload</a></li>
        <li><a href="/voiceyoutest/mobile/chart_test.php">Chart</a></li>
    <!--    <li><a href="../voiceyou_dongkyu/mobile/elice_m.php">apply</a></li>-->

    </ul>
    <!-- 상단 메뉴 끝 -->
</header>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <!-- 메인 비쥬얼 -->
    <div id="main_bn">
        <ul class="bn_ul">
            <li class="bn_bg1">
                <img src="img/mobile/main_bn.jpg" alt="">
            </li>
            <li class="bn_bg2">
                <div class="bn_wr">
                <img src="img/mobile/main_bn2.jpg" alt="">
                </div>
            </li>
            <li class="bn_bg3">
                <div class="bn_wr">
                <img src="img/mobile/main_bn3.jpg" alt="">
                </div>
            </li>
        </ul>
        <div class="bn_btn">
            <a href="#" class="unslider-arrow prev">이전 내용</a>
            <a href="#" class="unslider-arrow next">다음 내용</a>
        </div>
    </div>
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
     <?php if(isset($_SESSION["id"])) { ?>
    <div class="banner">
        <p><?php echo $_SESSION["id"];?>님 VOICEYOU에서<strong>목소리에 대한 평가를 받아보세요<i>!</i></strong></p>
        <a href="/voiceyoutest/mobile/script.php">바로가기</a>
    </div>
    <?php }else { ?>
    <div class="banner">
        <p>VOICEYOU에서<strong>목소리에 대한 평가를 받아보세요<i>!</i></strong></p>
        <a href="../voiceyou_dongkyu/mobile/apply_cancle.php">바로가기</a>
    </div>
    <?php } ?>
    <?php if(isset($_SESSION["id"])) { ?>
    <div class="banner2">
        <p>VOICEYOU에서<strong>전문가로 수익을 창출하세요<i>!</i></strong></p>
        <a href="../voiceyou_dongkyu/mobile/elice_m.php">바로가기</a>
    </div>
    
    <?php }else { ?>
    <div class="banner2">
        <p>VOICEYOU에서<strong>전문가로 수익을 창출하세요<i>!</i></strong></p>
        <a href="../voiceyou_dongkyu/mobile/apply_cancle.php">바로가기</a>
    </div>

    <?php } ?>
    
    

    <div id="container" class="main">
        <section id="part1">
            <header>
                <h2>VOICEYOU</h2>
                <p>당신의 목소리를 성장 시키세요.<br>현재 나의 목소리를 분석하고 개선하는 서비스입니다.</p>
            </header>
            <ul>
                <li>
                    <img src="img/part1_icon_1.png" />
                        <strong>목소리 트레이닝 수요 증가</strong>
                        <p>높은 수준의 목소리 및 스피치 기술을<br>원하는 사람들이 증가</p>
                </li>
                <li>
                    <img src="img/part1_icon_2.png" />
                        <strong>높은 가격 경쟁력</strong>
                        <p>목소리 및 스피치 분석의 커리큘럼이 모바일 서비스로<br>이동함으로써 가지는 높은 가격 경쟁력</p>
                </li>
                <li>
                    <img src="img/part1_icon_3.png" />
                        <strong>목소리 전문가 매칭</strong>
                        <p>현직 아나운서, 연설가가 나의 목소리를 직접 평가하여<br>피드백 제공</p>
                </li>
                <li>
                    <img src="img/part1_icon_4.png" />
                        <strong>인공지능 평가 서비스</strong>
                        <p>목소리 및 스피치에 대한 빠른 피드백 니즈를<br>인공지능 기술로 해결</p>
                </li>
            </ul>
        </section>
        <section id="script">
            <header>
                <h2>VOICE TEST</h2>
                <p>보이스유를 통해 목소리에 대한 평가를 받아보세요<i>!</i><br>(전문가 견해 분석 결과를 알려드립니다.)</p>
            </header>
            <div id="lt">
            <nav id="bo_cate">
                <h2>VOICE TEST 카테고리</h2>
                <ul>
                    <li><a href="">전체</a></li>
                    <li><a href="">자기소개</a></li>
                    <li><a href="">비즈니스</a></li>
                    <li><a href="">연설</a></li>
                </ul>
            </nav>  
            <ul class="list_01">
                <!-- 리스트 반복 -->
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/no_image.jpg" />
                            <span>01:39</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>COS PRO JAVA 모의고사</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">자기소개</a></div>
                </li>
                <!--// 리스트 반복 -->
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/image2.jpg" />
                            <span>01:39</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>학습과제 발표를 위한 녹음 파일</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src="/voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">비즈니스</a></div>
                </li>
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/no_image.jpg" />
                            <span>03:10</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>COS PRO C++ 모의고사</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">연설</a></div>
                </li>
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/image3.jpg" />
                            <span>05:22</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>COS PRO JAVA 모의고사</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">자기소개</a></div>
                </li>
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/no_image.jpg" />
                            <span>01:39</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>학습과제 발표를 위한 녹음 파일</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">비즈니스</a></div>
                </li>
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/image4.jpg" />
                            <span>03:10</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>COS PRO C++ 모의고사</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">연설</a></div>
                </li>
                <li>
                    <div class="gall_li_wr">
                        <a href="" class="gall_img">
                            <img src="img/no_image.jpg" />
                            <span>05:22</span>
                        </a>
                        <div class="lt_info">
                            <a href="" class="lt_tit"><strong>COS PRO JAVA 모의고사</strong></a>
                            <span class="mb_id">voice0214</span>
                            <span class="lt_date">2018.09.17</span>       
                        </div>
                    </div>
                    <div class="lt_cate"><button type="submit" id="" class="bt_play"><img src=" /voiceyoutest/img/common/btn/bt_play_2.png" alt="재생"></button><a href="" class="cate">자기소개</a></div>
                </li>
            </ul>
            <div class="li_more_btn">
                <button type="button" id="btn_more_item">더보기</button>
            </div>
            </div>
        </section>
    </div>

<?php include_once('tail.html');?> 
<?php
session_start(); // 로그인 세션 유지

// PC & 모바일 구분
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://106.255.255.203/m/main.php');
?>
 <html>
 <head>
   <META http-equiv="Expires" content="-1">
   <META http-equiv="Pragma" content="no-cache">
   <META http-equiv="Cache-Control" content="No-Cache">
   <meta content="text/html"; charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/mainmenu.css">

   <style>
   .w3-badge,.w3-tag,.w3-sign{background-color:#E6E6E6;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}
   .w3-white{background-color: gray;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}
   .w3-white,.w3-badge{border-radius:50%}
   .mySlides {display:none}
   .w3-left, .w3-right, .w3-badge {cursor:pointer}
   .current,.w3-badge {height:10px;width:10px;padding:0px;margin-right: 2px;}
   .w3-display-container:hover .w3-display-hover{display:block}
   .w3-display-container:hover span.w3-display-hover{display:inline-block}
   .w3-display-hover{display:none}
   </style>
   <title>SmartEar</title>
 </head>
 <body>
   <div id="main">
       <header id="mainheader">
         <h1 id="logo"><a href="main.php"><img src = "img/smartear.png"/></a>
               <!-- 로그인 안 했을 경우 메뉴-->
            <?php if(!isset($_SESSION["id"])) { ?>
          <span id="button"><button id="btn" type="submit" onclick="location.href = 'login.html';"><img src="img/login.png"></button>
            <button id="btn" type="submit" onclick="location.href='register.html';"><img src="img/register.png"></button>
          </span>
        </h1>
      </header>
            <aside>
                <img class="mainSlides" src = "img/background.png"/>
            </aside>
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
            <span id="button"><button id="btn" type="submit">이용권구매</button>
            <button id="btn" type="submit" onclick="location.href='/MyPage/main.php';">마이페이지</button>
            <button id="btn" type="submit" onclick="location.href='logout.php';">로그아웃</button>
            <button id="btn" type="submit"><span id="id_text"><?php echo $_SESSION["id"];?></span>님</button></span></h1></header>
            <aside>
                <img class="mainSlides" src = "img/background2.jpg"/>
            </aside>
         <?php } ?>

         <div id="menu" style='text-align:center;background-image: url(/img/menub.png);background-position: center center;'>
                <ul>
                  <li id="test"><b href = "#" onclick="openWin('/Make/makeWave.html')"><img src = "img/music.png" border="0" align="absmiddle"> 음성 만들기</b></li>
                  <li id="test"><b href = "#" onclick="openWin('/Make/makeVideo.html')"><img src = "img/video.png" border="0" align="absmiddle"> 영상 만들기</b></li>
                  <li><a href = "/Video/main.php"> SE 인기 영상</a></li>
                  <li><a href = "/Voice/main.php"> 목소리 찾기</a></li>
                  <li><a href = "/board/list.php"> Q&A 게시판</a></li>
               </ul>
         </div>

         <div id="wrapper">
           <!-- 메인화면 이미지 넘기는 부분 -->
           <div id="main1">
             <div class="w3-content w3-display-container">
               <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
               <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
               <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
               <img class="mySlides" src="../img/test8.jpg">
               <img class="mySlides" src="../img/test7.jpg">
               <img class="mySlides" src="../img/test9.jpg">
             </div>
           </div>
           <div id="main2">
              <!-- 메인화면 인기 목소리 부분 -->
             <h4> 인기 목소리 >> </h4>
               <div id="image1">
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">사나</a></h1>
                  <p class="content"><a href="Voice/detail_page.php"><img src="../img/test1.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">유아인</a></h1>
                  <p class="content"><a href="#"><img src="../img/test2.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">손석희</a></h1>
                  <p class="content"><a href="#"><img src="../img/test3.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
               </div>
               <div id="image2">
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">오바마</a></h1>
                  <p class="content"><a href="#"><img src="../img/test4.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">정유미</a></h1>
                  <p class="content"><a href="#"><img src="../img/test5.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
                 <div class="imgTopic">
                  <h1 class="title"><a href="#">아이유</a></h1>
                  <p class="content"><a href="#"><img src="../img/test6.jpg" alt="" /><span class="date"></span></a></p>
                 </div>
               </div>
           </div>
            <!-- 메인화면 인기 영상 부분 -->
           <div id="main3">
             <h4> 인기 영상 >> <span ><a id="text4">Smart Ear를 통해 만들어진 재미있는 영상들을 감상해보세요</span></a></h4>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
             <div id="group">
               <video id="movies" onmouseover="this.play()" onmouseout="this.pause()" autobuffer="true" >
                 <source src="http://106.255.255.203/uploads/blizzard1345@naver.com/The_Power_of_Teamwork_-_Funny_Animation.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
               </video><br>
               <span id="text1">펭귄이 부르는 지드래곤 히트곡들</span><br>
               <span id="text2">이병원</span><br>
               <span id="text3">조회수1명 · 3일전</span><br>
             </div>
           </div>
         </div>
         <div id=footer>
           <div class="foot_wrap"><span><a href="#">회사소개</a><a href="#">이용약관</a>
             <a href="#">개인정보처리방침</a><a href="#">청소년보호정책</a><a href="#">제휴/프로모션문의</a><a href="#">이메일주소무단수집거부</a>
             <a href="#">파트너센터</a><a href="#">사업자정보확인</a><br></span></div>

             <div class="foot_wrap"><span> <a>대전광역시 유성구 문지로 193 카이스트 문지캠퍼스 A409호 SmartEar</a><a>대표이사 : 최진호</a><a>사업자등록번호: 318-81-02441</a>
               <a>문의전화 : 042-863-3836 </a></div>
         </div>
  </div>
 </body>

 <script>
  // 메인화면에 클릭해서 사진 넘기는 코드
 var slideIndex = 1;
 showDivs(slideIndex);

 function plusDivs(n) {
   showDivs(slideIndex += n);
 }

 function currentDiv(n) {
   showDivs(slideIndex = n);
 }

 function showDivs(n) {
   var i;
   var x = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("demo");
   if (n > x.length) {slideIndex = 1}
   if (n < 1) {slideIndex = x.length}
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
   }
   x[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " w3-white";
 }

// 음성만들기, 영상만들기 새로운 창 띄우는 함수
 function openWin(url){
     window.open(url,"Player", "width=1100, height=700, toolbar=no, menubar=no, scrollbars=no, resizable=no" );
 }
 </script>
 </html>

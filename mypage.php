<?php session_start(); ?>
<!DOCTYPE html>
<html xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
  <link rel="stylesheet" type="text/css" href="../css/m_mypage.css">
<script type="text/javascript">
<!--
// 주소창 자동 닫힘
window.addEventListener("load", function()
{
  setTimeout(loaded, 100);
}, false);

function loaded()
{
  window.scrollTo(0, 1);
}
//-->
</script>
</head>
<body>
    <div class="info">
      <?php if(!isset($_SESSION["id"])) { ?>
      <img id="logo" src="../img/logo.png"/>
      <span id="button"><button id="btn" type="submit" onclick="location.href = '../login.html';"><img src="../img/login.png"></button>
        <button id="btn" type="submit" onclick="location.href='../register.html';"><img src="../img/register.png"></button>
      <?php }else {?>
      <div class="after">
          <img src="../img/test.png">
          <div id="text"><span id="id_text"><?php echo $_SESSION["id"] . "님";?></span></div><br>
          <div id="text0">보유 이용권 : <?php echo $_SESSION["coupon"];?></div>
          <div id="text0">SE 포인트 : <?php echo $_SESSION["point"]."점";};?></div>
     </div>
      </span>
    </div>
    <div class="my_menu">
      <div id="sub1">
        <span id="wrap">
        <img src="../img/mypage/m_voice.png"/>
        <a href="#">내가 저장한 목소리</a>
        <div class="hide">

        </div>
        </span>

      </div>
      <div id="sub2">
        <img src="../img/mypage/m_video.png"/>
        <a href="#">내가 만든 영상</a>
      </div>
      <div id="sub3">
        <img src="../img/mypage/m_sound.png"/>
        <a href="#">내가 만든 음성</a>
      </div>
      <div id="sub4">
        <img src="../img/mypage/m_board.png"/>
        <a href="#">내가 게시한 글</a>
      </div>
    </div>
    <div class="fixed_menu">
      <ul>
        <li><a href="main.php"><img id=img1 src="../img/m_video_off.png"/></a></li>
        <li><a href="voice.php"><img id=img2 src="../img/m_voice_off.png"/></a></li>
        <li><a href="make.php"><img id=img3 src="../img/m_plus_off.png"/></a></li>
        <li><a href="mypage.php"><img id=img4 src="../img/m_user_on.png"/></a></li>
      </ul>
    </div>

    <script>
    // 클릭한 탭 화면 나오도록 하는 자바스크립트 코드.
      $(document).reday(function(){
        $(".my_menu>a").click(function(){
          $(this).next("div").removeClass("hide");
        })
      })
    </script>
</body>
</html>

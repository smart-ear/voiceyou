<?php session_start(); ?>
<!DOCTYPE html>
<html xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <META http-equiv="Expires" content="-1">
   <META http-equiv="Pragma" content="no-cache">
   <META http-equiv="Cache-Control" content="No-Cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <link rel="stylesheet" type="text/css" href="../css/m_main.css">
  <link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/menu_component.css" />
<script src="../js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
//<!--
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

<style>
   </style>
</head>
<body>
<script language = "javascript">
  //var naver_id_login = new naver_id_login("bC7wUtwtalhY8g3IwpW7", "http://127.0.0.1/m/main.php");  
  //접근 토큰 값 출력은 안됨, CALLBACK url에서 토큰값을 받을 수 있음
  //alert(naver_id_login.oauthParams.access_token);
</script>
<div class="mainheader">
		 <div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a class="gn-icon gn-icon-download">Mypage</a>
									<!--<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>-->
								</li>
								<li><a class="gn-icon gn-icon-cog" href="creator_studio.php">Creator Studio</a></li>
								<li><a class="gn-icon gn-icon-help">Logout</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><h1 id="logo"><a href="main.php"><img src = "../img/smartear.png"/></a></h1></li>
		 <li><!-- 로그인 안 했을 경우 메뉴-->
            <?php if(!isset($_SESSION["id"])) { ?>
          <span id="button"><button id="btn" type="submit" onclick="location.href = 'login.html';"><img src="../img/login.png"></button>
            <button id="btn" type="submit" onclick="location.href='register.html';"><img src="../img/register.png"></button>
          </span>
              <!-- 로그인 했을 경우 메뉴 -->
          <?php }else { ?>
		  <span id="button">
            <button id="userbtn" type="submit" onclick="location.href='mypage.php';"><img src="../img/m_user_on.png"></button>
			<span id="id_text"><?php echo $_SESSION["id"];?>님</span>
            <button id="btn" type="submit" onclick="location.href='logout.php';"><img src="../img/logout.png"></button>
            </span>
         <?php } ?></li>
			</ul>
			</div>
</div>
    <div class="global_header">
      <input type="text" placeholder="인기 콘텐츠 검색"><a href="#" class="search"><img src="../img/m_search.png"/></a></input>
         <span id="button">
      <button type="submit" onclick="location.href='upload-1.php';"><a href="#" class="setting">
     <img src="../img/m_setting.png"/></a></button></span>
    </div>

	</div>
<div class="fixed_menu">
      <ul>
        <li class="topMenuLi"><a class="menuLink" href="main.php">Mypage</a></li>
        <li class="topMenuLi"><a class="menuLink" href="chart_page.php">Chart</a></li> 
        <li class="topMenuLi"><a class="menuLink" href="#">Round</a></li>
        <li class="topMenuLi"><a class="menuLink" href="#">Payment</a></li>
      </ul>
    </div>
	<div class="fixed_menu">
      <ul>
        <li class="topMenuLi"><a class="menuLink" href="chart_page.php">연설</font></a></li>
        <li class="topMenuLi"><a class="menuLink" href="eng_page.php">영어</a></li> 
        <li class="topMenuLi"><a class="menuLink" href="difficult_page.php">어려운 문구</a></li>
        <li class="topMenuLi"><a class="menuLink" href="emotion_page.php">연애/감성/가족</a></li>
      </ul>
    </div>
  <!-- 녹음api테스트 부분 -->
 
  <div class="contents">
  <br>
  <h4> 일간 랭킹 >> <span ><a id="text4"></span></a></h4>

<?php
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = 'http://' . $http_host . $request_uri;

$strTok =explode('?' , $url);
//echo $strTok[1];
$category_id=$strTok[1]; //차트 카테고리 저장
$url_id=$strTok[2];      //차트의 index 값 저장

?>

  <?php

 include 'db.php';

  // 데이터 베이스 연결.
  $link = connect_db($host, $dbid, $dbpw, $dbname);

  mysqli_set_charset($link, "utf8"); //한국어 인코딩 코드
   $select_query = "SELECT Nick_Name, Audio_file_address FROM Total_Audio_Contents WHERE Category='$category_id' AND Chart_id='$url_id'";  

//echo $category_id.$url_id;

   $result_set = mysqli_query($link, $select_query);


  while ($row = mysqli_fetch_array($result_set)){
      echo '<br>';?>
	   
 <div id="main3">
              <div id="group"> 
			 <!-- Category, Chart_id와 Nick_Name을 url에 담아 다음페이지 이동-> 하나의 chart에서 사용자 별 하나씩 등록되기 때문에 이정도를 key로 다음 평가 출력 페이지를 구성!-->
               <audio controls="controls">
  <source src="<?php echo $row['Audio_file_address']; ?>" type="audio/mpeg" />
</audio><br>
<div id="group" style=" background-color: gold; padding:10px; cursor: pointer;" onclick="location.href='graph.php?<?php echo $category_id; ?>?<?php echo $url_id; ?>?<?php printf($row["Nick_Name"]);?>';"> 
               <span id="text1">오디오 제목</span><br>
               <span id="text2"><?php printf($row["Nick_Name"]);?></span><br>
			   </div>
             </div>
    </div>
    <?php }

    mysqli_close($link);
   ?>

</body>

<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

</body>
</html>

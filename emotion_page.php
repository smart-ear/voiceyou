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
								<li><a class="gn-icon gn-icon-cog">Creator Studio</a></li>
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
        <li class="topMenuLi"><a class="menuLink" href="chart_page.php">연설</a></li>
        <li class="topMenuLi"><a class="menuLink" href="eng_page.php">영어</a></li> 
        <li class="topMenuLi"><a class="menuLink" href="difficult_page.php">어려운 문구</a></li>
        <li class="topMenuLi"><a class="menuLink" href="emotion_page.php"><font style="color: rgb(176,176,176)">연애/감성/가족</font></a></li>
      </ul>
    </div>
  <!-- 여기에 동영상들이 들어가야합니다. -->

  <div class="contents">
    여기는 연애/감성/가족 페이지 입니다
<?php
 include 'db.php';

  // 데이터 베이스 연결.
  $link = connect_db($host, $dbid, $dbpw, $dbname);

  mysqli_set_charset($link, "utf8"); //한국어 인코딩 코드
   $select_query = "SELECT title, script, index_id, Chart_category FROM Chart_script WHERE Chart_category='emotion'";

   $result_set = mysqli_query($link, $select_query);


   while ($row = mysqli_fetch_array($result_set)){

     //print_r($row);
//printf("ID: %s  Name: %s", $row["Nick_Name"], $row["Audio_file_address"]); // 각각 호출
//<audio controls="controls">
//  <source src="https://s3.ap-northeast-2.amazonaws.com/storytoyou/S3_Sleep+Away.mp3" type="audio/mpeg" />
//</audio>
      echo '<br>';?>
	   
 <div id="main3">
             <div id="group" style=" background-color: gold; padding:10px; cursor: pointer;" onclick="location.href='Script_page.php?<?php printf($row["Chart_category"]);?>?<?php printf($row["index_id"]);?>';"> 
			 <!-- 해당 스크립트 index_id를 url에 담아 다음페이지 이동, 다음 페이지에서 index_id값에 맞는 db 리스트 출력-->
            
               <span id="text1"><?php printf($row["index_id"]);?></span>
			   <span id="text1"><?php printf($row["title"]);?></span><br>
               <span id="text2"><?php printf($row["script"]);?></span><br>
             </div>
    </div>
    <?php }

    mysqli_close($link);
   ?>

</div>

<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

</body>
</html>

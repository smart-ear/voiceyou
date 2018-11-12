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
    </div>
<div class="fixed_menu">
      <ul>
        <li class="topMenuLi"><a class="menuLink" href="main.php">Mypage</a></li>
        <li class="topMenuLi"><a class="menuLink" href="chart_page.php">Chart</a></li> 
        <li class="topMenuLi"><a class="menuLink" href="#">Round</a></li>
        <li class="topMenuLi"><a class="menuLink" href="#">Payment</a></li>
		        <li class="topMenuLi"><a class="menuLink" href="#">test</a></li>

      </ul>
    </div>
  <!-- 녹음api테스트 부분 -->
<?php
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = 'http://' . $http_host . $request_uri;

$strTok =explode('?' , $url);
echo $strTok[1];
$category_id=$strTok[1]; //카테고리 저장

?>
  <div class="contents">
  <br>
  <h4> 크리에이터스튜디오 >> <span ><a id="text4"></span></a></h4>

  <div style=" text-align:center; ">  <!--업로드 폴더 작업 -->
  <h1> <font size="5em" color="green" > Upload </h1>
<!--  <form action="transfer_test.php" method="post" enctype="multipart/form-data" style="line-height:10%;" > -->

    <table border="0" cellpadding="0" cellspacing="0">
        <tbody><tr>
            <td>
                <select id="sel1" name="sel1" onchange="update_cate1(this)" style="width:140px;"><!--1차-->
                    <option value="">--메이커--</option>
                <!--1단은 db에서 목록 받아와서 뿌려줌-->
					<option value="a">연설</option>
					<option value="b">영어</option>
					<option value="c">어려운 문구</option>
					<option value="d">연애/감성/가족</option>
                </select>
                 
            </td>
            <td id="catetd2" name="catetd2" style="padding-left:3px;">
<!--sel2 셀렉트박스 들어옴-->
<select id="sel2" name="sel2" onchange="update_cate2()" style="width:140px;"><!--1차-->
                    <option>스크립트를 선택해주세요!</option> 
					
                </select>
            </td>
        </tr>
    </tbody></table>
   
    <!--Select File to upload<br><br>-->
    &nbsp;&nbsp;
<!--	 <input type="text" id="textbox"><br><br>

    <input type="file" name="uploaded_file" id="fileToUpload"><br><br>

    <input type="submit" value="파일 업로드" name="submit" style="margin-left: : 100px">
  </form> -->
</div>
    </div>
<?php


include '/db.php';

$link = connect_db($host, $dbid, $dbpw, $dbname);
//echo "111";
mysqli_set_charset($link, "utf8");
//echo "222";
    $cateval = $_REQUEST['cateval'];
    $cateval_len=strlen($cateval);

if($cateval == "a")  $cateval="speech";
if($cateval == "b")  $cateval="english";
if($cateval == "c")  $cateval="difficult";
if($cateval == "a")  $cateval="emotion";
    //echo $cateval;
    $select_query = "SELECT title, script, index_id, Chart_category FROM Chart_script WHERE Chart_category='$cateval'";
//ex)"SELECT * FROM category where CHARACTER_LENGTH(category)=9 and LEFT(category,6)='".$cateval."' order by sno";
   $result_set = mysqli_query($link, $select_query);
    $sbvnum = mysqli_num_rows($result_set);

    $sbvnum=$sbvnum+1;
//결과 없을경우 셀박스를 띄우기 않음

if($sbvnum>1){
	//echo '결과있음';
//아래 셀렉트 박스 id 와 네임을 2단(get_cate2.php)의 경우 sel3 3단(get_cate3.php)의 경우 sel4
?>
<select id="sel2" name="sel2" onchange="update_cate2(this)" style="width:140px;">

<?php
    while($row = mysqli_fetch_array($result_set)){
	?>
    <option value="sa"><?php echo ($row['index_id']).':'.($row['title']);?><?php printf($row['script']); ?></option>
	<?php
    $i++;
    }
    echo "</select>";
}else{
  echo '결과없음';
}
    mysqli_close($link);

?>

<div style=" text-align:center; ">  <!--업로드 폴더 작업 -->
  <form action="transfer_test.php" method="post" enctype="multipart/form-data" style="line-height:10%;" >
 <input type="text" name="script" id="textbox"><br><br>
    <input type="file" name="uploaded_file" id="fileToUpload"><br><br>
<?php echo $cateval; ?>
    <input type="submit" value="파일 업로드" name="submit" style="margin-left: : 100px">
  </form>
  </div>
<script language = "javascript">
//-----------------------1단-----------------------------    
    function update_cate1(e)
    {
        var cateval = $('#sel1').attr('value');
		//alert(e.value);
		var cateval = e.value;
		location.href='select_php.php?'+ cateval;
        //$.get('select_php.php?cateval=' + cateval,show_cates1);
    }
    function update_cate2(e)
    {
        //var cateval = $('#sel1').attr('value');
		//alert(e.value);
		//var cateval = e.value;
		//alert('hello');
		var target = document.getElementById("sel2");
				//alert('test출력');
		var textbox = document.getElementById("textbox");
		textbox.value=target.options[target.selectedIndex].text+':'+'<?php echo $cateval; ?>';		//select박스 텍스트 부분 가져오는 코드! http://rockdrumy.tistory.com/1255
		//alert('<?php echo $cateval; ?>');

		//target.options[target.selectedIndex].text = location.href.split(":");

		//name=temp[0];
		//name1=temp[2];
		//name2=temp[3];
		//textbox.value = name2;
		//alert('test출력');
		//alert(script_text+test);
        //$.get('select2_php.php?script_text=' + script_text,show_cates1);
    }
 
    function show_cates1(res){
    $('#catetd2').html(res);
    $('#catetd3').html("");
    $('#catetd4').html("");
 
    }
	</script>
<?php session_start(); 
  include 'db.php'  
?>
<!DOCTYPE html>
<html xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <META http-equiv="Expires" content="-1">
   <META http-equiv="Pragma" content="no-cache">
   <META http-equiv="Cache-Control" content="No-Cache">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
  <link rel="stylesheet" type="text/css" href="../css/m_main.css">
  <link rel="stylesheet" type="text/css" href="../css/menu_component.css" />
  <link rel="stylesheet" type="text/css" href="../css/detail_voice.css">
  <link rel="shortcut icon" href="../favicon.ico">
  <script src="../js/modernizr.custom.js"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
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
<div>
<form action = "graph_point_update.php" method="post">
<div style=" text-align:center;">
  <div style="position:relative; height: 20px; width:100%; text-align:center">

<?php
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = 'http://' . $http_host . $request_uri;


$strTok =explode('?' , $url);
$category_id=$strTok[1];
$chart_id=$strTok[2];
$user_id=$strTok[3];

//echo $category_id.$chart_id.$user_id;

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['chart_id'] = $chart_id; //session에 저장 후 graph_point_update 페이지로 넘김
$_SESSION['user_id'] = $user_id; 
$_SESSION['category_id']=$category_id
?>
<?php
    $link = connect_db($host, $dbid, $dbpw, $dbname);
    mysqli_set_charset($link, "utf8");

    $sql = "SELECT pronunciation, vocalization, voice_bulk, voice_speed, voice_tone, sympathy FROM User_Voice_Point WHERE ID='$user_id' AND Chart_id='$chart_id' AND Category='$category_id'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    $pronunciation = $row['pronunciation'];
    $vocalization = $row['vocalization'];
    $voice_bulk = $row['voice_bulk'];
    $voice_speed = $row['voice_speed'];
    $voice_tone = $row['voice_tone'];
    $sympathy = $row['sympathy'];

   ?>

  참여자
  공감 <?php echo $sympathy; ?>
  순위
  
  발음 <?php echo $pronunciation; ?> 
  음색 <?php echo $vocalization; ?> 
  발성 <?php echo $voice_bulk; ?> 
  속도 <?php echo $voice_speed; ?> 
  목소리크기 <?php echo $voice_tone; ?> </br>
  

  </div>
</div>
<div style="position:relative; height: 20px; width:100%; text-align:center">
<input type="checkbox" name="chk_info[]" value="a">발음
<input type="checkbox" name="chk_info[]" value="b">음색
<input type="checkbox" name="chk_info[]" value="c">발성
<input type="checkbox" name="chk_info[]" value="d">속도
<input type="checkbox" name="chk_info[]" value="e">목소리 크기
</div>
<div style="position:relative; height: 30px; width:100%; bottom:0px; text-align:center" >
        <input type="submit" name="submit" value="평가등록">
</div>

<div style="height: auto; width: 500px; text-align:center;">
<!-- <div class="chart-container" style="position: relative; height:40vh; width:80vw"> -->
  <!-- http://www.chartjs.org/docs/latest/charts/radar.html 참고-->
<canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
  data: {
    labels: ['발성', '발음', '목소리톤', '공명음', '장단음'],
	
    datasets: [{  //http://touchsoul.tistory.com/86 옵션 정리, https://code.tutsplus.com/tutorials/getting-started-with-chartjs-radar-and-polar-area-charts--cms-28444 두개의 레이어 표시!!
		label: '평가지표군',
        data: [<?php echo $pronunciation; ?>, <?php echo $vocalization; ?>,<?php echo $voice_bulk; ?>, <?php echo $voice_speed; ?>,<?php echo $voice_tone; ?>],

			backgroundColor: [
                //'rgba(255, 223, 0, 1)', //노랑
		        'rgba(255, 145, 0, 0.7)', //주황 
            
            ],
            borderColor: [
                //'rgba(255, 223, 0, 1)',
			'rgba(255, 145, 0, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                
            ],
			pointBackgroundColor: [ // 점채우기색상 // 각 항목마다 색상 설정 가능
                'rgba(255, 223, 0, 1)', //노랑
				'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
		        //;'rgba(255, 145, 0, 0.7)', //주황 
            
            ],
			pointBorderColor:[  //점 경계 컬러 각 항목마다 색상 설정가능 , 점 경계 채우기
				 'rgba(255, 223, 0, 1)',
				'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
			],
			pointStyle:      'triangle', //https://gist.github.com/katogiso/32e09c77a91d6417f7af402be9180890#file-chartjs_line_pointstyle_index-html-L40 깃허브 샘플 표시
				                       // star 설정 시 원이엇던 것이 좀 더 작아짐
			//pointHoverBorderWidth: 5,//보폭에 있을 때의 테두리 폭입니다.
			pointBorderWidth: 5,//점 경계선의 폭  //참고 사이트 https://blog.vanila.io/chart-js-tutorial-how-to-make-gradient-line-chart-af145e5c92f9
            borderWidth: 3,     //그래프 선의 폭 - 그래프 표시 선 테두리 굵기
			//borderDash:      [ 5, 7],  //대시의 길이와 간격 , 그래프 선 대시 표시
			//showLine: true, // show line in scatter plot
            //fill: '-2' // backgroundColor가 fill false면 나타나지 않음, 어느정도 채울지 결정할 수 있음 -> 라인 아래의 영역을 채우는 법, http://www.chartjs.org/docs/latest/charts/area.html 참고
			scaleShowLabels : false,
				pointLabelFontSize : 10,
				pointLabelFontColor : "#666",
				angleLineWidth : 2,
    }]
},

    // Configuration options go here
    options: {
        scales: { 
           //display: false, //차트뒤에 눈금선 제거
	/*	   yAxes: [{ // 이러면 뒤의 와이축 라인만 변경됨..
                ticks: {
                    beginAtZero:true,
						 min: 0,
						 max: 5,
						 stepSize: 1
                }
            }]
		
		*/
		  //https://code.tutsplus.com/ko/tutorials/getting-started-with-chartjs-scales--cms-28477 방사형 차트 변경
	gridLines: {
      color: "black",
      lineWidth: 3
    },
    angleLines: {
      display: false
    },
    ticks: { // 레이어 범주 설정가능
      beginAtZero: true,
      min: 0,
      max: 10,
      stepSize: 1
    },
    pointLabels: {
      fontSize: 18,
      fontColor: "green"
    }
  },
  legend: { // gridLines 등의 포지션 설정 외에 lable 설정이 움직이지 않음
    //position: 'left'
  }

    }
});
</script>
</div>
</div>
</form>

</div>
         <!-- 댓글 부분. 지금 임시로 다 적어놨는데 나중에 데이터베이스 만든 다음에 데이터 불러와서 집어넣으면 됩니다.-->
           <div class="comment">
             <div class="head">
               <span id="title">댓글</span>
               <span id="btn1"><button>인기댓글순</button></span>
               <span id="btn2"><button>최근댓글순</button></span>
            </div>
            <div class="body">
              <image src="../img/test.png"></image>
  <form action="transfer_test.php" method="post" enctype="multipart/form-data" style="line-height:10%;" >
  <?php
$http_host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = 'http://' . $http_host . $request_uri;


$strTok =explode('?' , $url);
$category_id=$strTok[1];
$chart_id=$strTok[2];
$user_id=$strTok[3];

//echo $category_id.$chart_id.$user_id;

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['chart_id'] = $chart_id; //session에 저장 후 transfer_test.php 페이지로 넘김,
								   //혹여나 평가하지 않고 댓글만 남길 때를 위해 위의 평가 후 세션에 담기도 하지만 여기도 선언해 놓음
$_SESSION['user_id'] = $user_id; 
$_SESSION['category_id']=$category_id
?>

 <input type="text" placeholder="댓글 달기" name="script" id="textbox"><br><br>
    <input type="submit" value="등록" name="submit" style="margin-left: : 100px">
  </form>
  </div>
           </div>
           <div class="tail">
             <image src="../img/test.png"></image>
             <span id="id">MUNI</span><br>
             <span id="contents">너무 재밌어요</span><br>
             <button id="btn1">답글 달기</button>
             <image id="img" src="../img/heart.png"></image>
             <span id="count">230</span><br>
             <button id="btn2">답글 모두 보기</button>
           </div>
           <div class="tail">
             <image src="../img/test.png"></image>
             <span id="id">MUNI</span><br>
             <span id="contents">너무 재밌어요</span><br>
             <button id="btn1">답글 달기</button>
             <image id="img" src="../img/heart.png"></image>
             <span id="count">230</span><br>
             <button id="btn2">답글 모두 보기</button>
           </div>
           <div class="tail">
             <image src="../img/test.png"></image>
             <span id="id">MUNI</span><br>
             <span id="contents">너무 재밌어요</span><br>
             <button id="btn1">답글 달기</button>
             <image id="img" src="../img/heart.png"></image>
             <span id="count">230</span><br>
             <button id="btn2">답글 모두 보기</button>
           </div>
           </div>

         </div>

<script src="../js/classie.js"></script>
		<script src="../js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
</body>



</html>

﻿<?php session_start(); ?>
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

</head>
<body>
<script type="text/javascript">  //네이버콜백 받은 후 처리
  var naver_id_login = new naver_id_login("bC7wUtwtalhY8g3IwpW7", "http://127.0.0.1/m/n_login_check.php");
  // 접근 토큰 값 출력
  alert(naver_id_login.oauthParams.access_token); //로그아웃 시 필요하지만,, email, name 정보를 가지고 Session에 저장하여 없어지지 않도록 구성(DB에 저장)
  // 네이버 사용자 프로필 조회
	naver_id_login.get_naver_userprofile("naverSignInCallback()");
var login_name;
  // 네이버 사용자 프로필 조회 이후 프로필 정보를 처리할 callback function
  function naverSignInCallback() {
    alert(naver_id_login.getProfileData('email'));
    alert(naver_id_login.getProfileData('name')+"님이 로그인하셨습니다.");
    //alert(naver_id_login.getProfileData('age'));
//	login_email = naver_id_login.getProfileData('email');
	//login_name = naver_id_login.getProfileData('nickname');
	login_name = naver_id_login.getProfileData('name');
	 //document.write(login_name);  
	
	  //alert(login_name);
	  location.href="/m/n_login_register.php?"+naver_id_login.getProfileData('name'); // 값넘김! get방식!
  }


//window.location.replace("http://" + window.location.hostname + ( (location.port==""||location.port==undefined)?"":":" + location.port) + "/m/main.php"); //main으로 돌아가는


</script>
<script language = "javascript">


//location.href="/m/main.php?"+login_name;
</script>

</body>
</html>

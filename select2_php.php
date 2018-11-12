<?php


include '/db.php';

$link = connect_db($host, $dbid, $dbpw, $dbname);
//echo "111";
mysqli_set_charset($link, "utf8");
//echo "222";
    $cateval = $_REQUEST['script_text'];
    $cateval_len=strlen($cateval);

$strTok =explode('?' , $cateval);  //받은 값 php로 자르는 구문
$script_text_split=$strTok[0];


 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['script_text_split'] = $script_text_split; //session에 저장 후 graph_point_update 페이지로 넘김

?>


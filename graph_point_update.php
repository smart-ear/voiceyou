<?php
  include 'db.php';
  session_start();
  // 데이터 베이스 연결.
  $link = connect_db($host, $dbid, $dbpw, $dbname);
  $link2 = connect_db($host, $dbid, $dbpw, $dbname);

  //$id = $_SESSION['id'];

$chart_id= $_SESSION['chart_id'];
$user_id= $_SESSION['user_id'];
$category_id=$_SESSION['category_id'];

  mysqli_set_charset($link, "utf8");
  $sql = "SELECT pronunciation, vocalization, voice_bulk, voice_speed, voice_tone, sympathy FROM User_Voice_Point WHERE ID='$user_id' AND Chart_id='$chart_id' AND Category='$category_id'";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

  $check_list = $_POST['chk_info'];
  //echo '$row : ';
  //print_r($row);

  //echo "position:".$position;
//  echo "//0:".$check_list[0];
//  echo "1:".$check_list[1];
//  echo "2:".$check_list[2];
//  echo "3:".$check_list[3];
//  echo "4:".$check_list[4];

  //echo "count://".count($_POST['check_list']);


  $pronunciation = $row['pronunciation'];
  $vocalization = $row['vocalization'];
  $voice_bulk = $row['voice_bulk'];
  $voice_speed = $row['voice_speed'];
  $voice_tone = $row['voice_tone'];
  mysqli_close($link);

  for($i=0; $i<5; $i++){
    //$position = $_POST['check_list'];
    if($check_list[$i] == "a"){
      $pronunciation = $pronunciation+1;
     }
    if($check_list[$i] == "b") {
       $vocalization = $vocalization+1;
     }
    if($check_list[$i] == "c"){
      $voice_bulk = $voice_bulk+1;
     }
    if($check_list[$i] == "d"){
      $voice_speed = $voice_speed+1;
     }
     if($check_list[$i] == "e"){
       $voice_tone = $voice_tone+1;
     }
  }

    $sql2 = "UPDATE User_Voice_Point SET pronunciation = '$pronunciation' , vocalization = '$vocalization', voice_bulk = '$voice_bulk', voice_speed = '$voice_speed', voice_tone = '$voice_tone', sympathy = '0' WHERE ID='$user_id' AND Chart_id='$chart_id' AND Category='$category_id'";
 

  $result2 = mysqli_query($link2,$sql2);
  
  mysqli_close($link2);

  echo $pronunciation;
  echo $vocalization;
  echo $voice_bulk;
//  echo $voice_speed;
//  echo $voice_tone;

echo ("<script>alert(\"평가가 완료되었습니다.\");</script>");
 ?>

<script>location.replace('graph.php?<?php echo $category_id;?>?<?php echo $chart_id;?>?<?php echo $user_id;?>');</script>

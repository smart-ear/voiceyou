<?php

//User_comment 테이블에서 호출!

include '/db.php';

session_start();

$script = $_POST['script'];
echo "<script>alert(\"<php? printf($script);\");</script>";

$chart_id= $_SESSION['chart_id'];
$user_id= $_SESSION['user_id'];
$category_id=$_SESSION['category_id'];

echo "<script>alert(\"<php? printf($script);\");</script>";

$id = $_SESSION['id']; // 세션에 저장되어 있는 id 불러옴, 누가 댓글을 남겼는지 보기 위해 선언해둠.


$link2 = connect_db($host, $dbid, $dbpw, $dbname);
//echo "111";
mysqli_set_charset($link2, "utf8");
$sql2 = "INSERT INTO Total_Audio_Contents (Nick_Name, Chart_id, Category, Audio_contents_title,Script_file_address, Audio_file_address, Commend_file_address, View_Count, Subscription_count, Register_date) VALUES ('$id','$chart_id','$category','title','abcd','$File_URL','d','e','f','g')";

$sql2 =  "UPDATE Total_Audio_Contents SET comment = '$pronunciation' , vocalization = '$vocalization', voice_bulk = '$voice_bulk', voice_speed = '$voice_speed', voice_tone = '$voice_tone', sympathy = '0' WHERE ID='$user_id' AND Chart_id='$chart_id' AND Category='$category_id'";

$result2 = mysqli_query($link2,$sql2);
mysqli_close($link2);


?>

<script>location.replace('graph.php?<?php echo $category_id;?>?<?php echo $chart_id;?>?<?php echo $user_id;?>');</script>
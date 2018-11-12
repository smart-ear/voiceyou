<?php
  
    $file_path = "uploads/";
     
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
        echo "success\n";
    } else{
        echo "fail\n";
    }
echo 'debug\n ';
print_r($_FILES);
print "</pre>";
 ?>
<img src="file/?$_FILES['userfile']['name']?>' />
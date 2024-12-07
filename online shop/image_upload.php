<?php
 # image upload procedure
 $img_name = $img['name'];
 $img_tmp = $img['tmp_name'];
 $uploadDir = "upload_dir/" ;
 if (!is_dir($imageDir)) {
     mkdir($imageDir,0777,true);
 }
 $img_path = $imageDir.$img_name ;
 move_uploaded_file($img_tmp,$img_path);
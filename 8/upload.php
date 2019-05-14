<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');
for ($i = 0; $i < 4; $i++) {
   move_uploaded_file($_FILES['files']['tmp_name'][$i], "upload/" . mt_rand(0, 1000) . date("Ymdhis", time()));
   echo $_FILES['files']['name'][$i];
   echo $_FILES['files']['size'][$i] . "<br>";
};
<?php
$fileName = $_POST['candidate'];
$file = fopen($fileName, "r");
$num = fread($file, filesize($fileName))+1;
fclose($file);

$file = fopen($fileName, "w");
fwrite($file,$num);

$url = "vote.php";
echo "<script language='javascript' type='text/javascript'>";
echo "alert('提交成功');";
echo "window.location.href='$url'";
echo "</script>";
?>
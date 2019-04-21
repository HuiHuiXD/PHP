<?php
$fileName = "vNum";
$number = 0;
if (!file_exists($fileName)) {
    $file = fopen($fileName, "w");
    fwrite($file, "1");
    fclose($file);
    $number = 1;
} else {
    $file = fopen($fileName, "r");
    $number = fread($file, filesize($fileName));
    fclose($file);
    $number++;

    $file = fopen($fileName, "w");
    fwrite($file, $number);
    fclose($file);
}
echo "你是第" . $number . "个访客。";
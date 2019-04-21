<?php
$fileName = "ysh";
if (!file_exists($fileName)) {
   $flie = fopen($fileName, "w");
   for ($i = 0; $i < 100; $i++) {
      fwrite($flie, mt_rand(10, 99));
   }
   fclose($flie);
}

echo "用fread()读出该文件所有内容"."<br>";
$flie = fopen($fileName, "r");
$str = fread($flie, filesize($fileName));
echo $str . "<br><br>";
fclose($flie);

echo "用fgetc()读出每行四个数"."<br>";
$flie = fopen($fileName, "r");
$counter = 0;
while (($char = fgetc($flie)) !== false) {
   echo $char;
   $counter++;
   if ($counter % 2 == 0)
      echo "&nbsp;&nbsp;";
   if ($counter % 8 == 0)
      echo "<br>";
}
echo "<br><br>";
fclose($flie);

echo "用file()输出每行内容到数组(数组名和自己的名字一致),并对数组排序"."<br>";
$flie = fopen($fileName, "w");
for ($i = 0; $i < 100; $i++) {
   fwrite($flie, mt_rand(10, 99)."\n");
}
fclose($flie);
$yshArray = file($fileName);
sort($yshArray);
print_r($yshArray);
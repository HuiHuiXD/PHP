<?php
$arry[10];
for ($i = 0; $i < 10; $i++) {
   $arry[$i] = 2 + 2 * $i;
}
for ($i = 0; $i < 10; $i++) {
   echo $arry[$i] . " ";
}
echo "<br>";
for ($i = 0; $i < 10; $i++) {
   $arry[$i] = mt_rand();
}
for ($i = 0; $i < 10; $i++) {
   echo $arry[$i] . " ";
}
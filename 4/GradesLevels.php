<?php
header("charset=utf-8");
$number = $_POST['number'];
if ($number > 100 || $number < 0) {
    echo "数据出界";
} else if ($number >= 90) {
    echo "优秀";
} else if ($number >= 80) {
    echo "良好";
} else if ($number >= 70) {
    echo "中等";
} else if ($number >= 60) {
    echo "及格";
} else {
    echo "不及格";
}
?>
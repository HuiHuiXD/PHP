<?php
$n=$_POST['number'];
date_default_timezone_set('PRC');
echo date("Y-m-d H:i:s",strtotime("+$n day"))."<br>"; 
?>
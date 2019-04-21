<?php
  $number=$_POST['number'];
  $str="";
  for($k=0,$i=100;$i<=999;$i++){
    $hundreds=floor($i/100);
    $tens=floor(($i/10)%10);
    $ones=floor($i%10);
    if(pow($hundreds,3)+pow($tens,3)+pow($ones,3)==$i){
      $str.=$i."  ";
      $k++;
    }
    if($number==$k){
      break;
    }
  } 
  echo $str;
?>
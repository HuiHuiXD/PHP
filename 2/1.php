<html>
   <head>
      <mate charset="utf-8"/>
      <title>张三的第一个动态网页</title>
   </head>
   <body bgcolor=<?php echo "red"; ?> text=<?php echo "yellow";?>>
      <?php
         echo "hai，大家好，我是16软工的袁少辉同学。";
         date_default_timezone_set("PRC");
         echo "<br>"."现在为您报时：".date("Y-m-d H:i:s");
      ?> 
   </body>
</html>
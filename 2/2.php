<html>
   <head>
      <title>这是我的第二个动态网页</title>
      <style type="text/css">
         body{background:yellow;text-align:center;}
      </style>
   </head>
   <body>
      <?php
         echo date_default_timezone_get();
         echo "<br />";
         date_default_timezone_set('PRC');
         echo date_default_timezone_get();
         echo '<br />';
         echo date("Y-m-d H:i:s",time()-24*60*60*365);
         echo '<br />';   
         echo "<center><h1>新年好</h1></center>";
         for($i=1;$i<10;$i++){
            echo "<p>$i ****************</p>";
         }      
      ?>
      <script type="text/javascript">
	 alert('happy new year!!');
      </script> 
   </body>
</html>
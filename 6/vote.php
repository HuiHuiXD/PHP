<html>

   <head>
      <style>
      body {
         text-align: center;
      }

      li {
         list-style-type: none;
         background: linear-gradient(to right, yellow, white, yellow);
      }

      #main {
         margin: auto;
         width: 600px;
      }

      form {
         margin: 10px;
      }
      </style>
   </head>

   <body>
      <div id="main">
         <li>2019最美学生网络投票</li>
         <form id="test" action="votehandle.php" method="post">
            <input type="radio" value="1" name="candidate" /><label>1.唐宁康</label>
            <input type="radio" value="2" name="candidate" /><label>2.葛平</label>
            <input type="radio" value="3" name="candidate" /><label>3.王朗</label><br><br>
            <input type="button" value="提交" onclick="check()" />
         </form>
         <li>投票结果</li>
      </div>
   </body>

</html>
<script text="javascript">
function check() {
   var candidate = document.getElementsByName("candidate");
   var tag = true;
   for (var i = 0; i < candidate.length; i++) {
      if (candidate[i].checked) {
         tag = false;
         break;
      }
   }
   if (tag == true)
      alert("nothing has selected");
   else {
      var form = document.getElementById("test");
      form.submit();
   }
}
</script>
<?php
$arr = [3];
for ($i = 1; $i <= 3; $i++) {
   $fileName = $i;
   if (!file_exists($fileName)) {
      $file = fopen($fileName, "w");
      fwrite($file, "0");
      fclose($file);
   }
   $file = fopen($fileName, "r");
   $num = fread($file, filesize($fileName));
   $arr[$i] = $num;
   fclose($file);

   if ($i == 1)
      echo "唐宁康" . $num . "票 ";
   if ($i == 2)
      echo "葛平" . $num . "票 ";
   if ($i == 3)
      echo "王朗" . $num . "票 ";
}
?>
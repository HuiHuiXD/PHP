<style type="text/css">
   * {
      margin: 0;
      padding: 0;
   }

   html {
      border: 1px solid red;
   }

   body {
      border: 1px solid green;
      text-align: center;
   }

   div {
      width: 30px;
      height: 30px;
      background-color: red;
      border: 1px solid #ffff00;
      display: inline-block;
      margin: 3px;
   }
</style>

<?php
for ($i = 1; $i <= 7; $i++) {
   for ($j = 1; $j <= (2 * $i - 1); $j++) {
      echo "<div></div>";
   }
   echo "<br>";
}
for ($i = 6; $i >= 1; $i--) {
   for ($j = 1; $j <= (2 * $i - 1); $j++) {
      echo "<div></div>";
   }
   echo "<br>";
}
?>
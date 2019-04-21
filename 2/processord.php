<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>鲍勃的汽车零件----订单结果</title>
</head>
<body>
    <h1>鲍勃的汽车零件</h1>
    <h2>订单结果</h2>
    <?php
       echo "<p>已处理的订单在";
       date_default_timezone_set("PRC");
       echo date('H:i jS F Y');
       echo "</p>";
       $tireqty=$_POST['tireqty'];
       $oilqty=$_POST['oilqty'];
       $sparkqty=$_POST['sparkqty'];

       echo $tireqty.' 轮胎<br />';
       echo $oilqty.' 石油<br />';
       echo $sparkqty.' 火花塞<br />';
    ?>
</body>
</html>
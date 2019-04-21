<html>
   <head>
      <mate charset="utf-8">
      <title>订单表单</title>
   </head>
   <body>
      <form action="processord.php" method="post">
         <table border='1'>
            <tr style="background=:#CCC;">
               <td style="width:150px;text-align:center;">项目</td>
               <td style="width:150px;text-align:center;">数量</td>
            </tr>
            <tr>
               <td>轮胎</td>
               <td><input type="text" name="tireqty" size="3" maxlengh="3"></td>
            </tr>
            <tr>
               <td>石油</td>
               <td><input type="text" name="oilqty" size="3" maxlengh="3"></td>
            </tr>
            <tr>
               <td>火花塞</td>
               <td><input type="text" name="sparkqty" size="3" maxlengh="3"></td>
            </tr>
            <tr>
               <td colspan="2" style="textt-align:center;">
                  <input type="submit" value="提交订单"/>
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>

<?php
echo ' <script src="color.js"></script>';
echo "<table border=1>";
for ($i = 1; $i <= 9; $i++) {
    $bgcolor = ($i % 2 == 0) ? "#ffff00" :"#00ffff";
    echo "<tr onmouseover='haveColor(this)' onmouseout='noColor(this)' style='background-color:$bgcolor;'>";
    for ($j = 0; $j < 10 - $i; $j++) {
        echo "<td>" . "$i*$j=" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>


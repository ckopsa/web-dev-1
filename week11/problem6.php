<?php
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 6</title>";
echo "</head>";
echo "<body>";
echo "<p>test stuff.. :)</p>";
$strings = explode(',', $_POST["input6"]);
echo "<table>";
foreach (sort($strings) as $value) {
    echo "<tr>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

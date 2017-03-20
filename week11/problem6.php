<?php
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 6</title>";
echo "</head>";
echo "<body>";
$sortedStrings = explode(',', $_POST["input6"]);
sort($sortedStrings);
echo "<table>";
foreach ($sortedStrings as $value) {
    echo "<tr>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

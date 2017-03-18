<?php
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 5</title>";
echo "</head>";
echo "<body>";
echo "<table>";
echo "<tr>";
echo "<th>N</th>";
echo "<th>X^n</th> ";
echo "</tr>";
$x = $_POST["x"];
for ($n = 1; $n <= $_POST["n"]; $x++) {
    echo "<tr>";
    echo "<td>$n</td>";
    echo "<td>". pow($x, $n) . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

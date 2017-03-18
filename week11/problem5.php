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
for ($x = 1; $x <= $_POST["n"]; $x++) {
    echo "<tr>";
    echo "<td>$x</td>";
    echo "<td>0</td> ";
    echo "</tr>";
    echo "The number is: $x <br>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

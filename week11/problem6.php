<?php
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 6</title>";
echo "</head>";
echo "<body>";
echo "<p>test stuff.. :)</p>";
echo $_POST["input6"];
$sortedStrings = explode(',', $_POST["input6"]);
foreach ($sortedStrings as $value)
    echo $value;
echo "<table>";
foreach ($sortedStrings as $value) {
    echo "<tr>";
    echo $value;
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

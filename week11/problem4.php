<?php
$numbers = array(
    "one"=>"uno",
    "two"=>"dos",
    "three"=>"tres",
    "four"=>"cuatro",
    "five"=>"cinco",
    "six"=>"seis",
    "seven"=>"siete",
    "eight"=>"ocho",
    "nine"=>"nueve",
    "ten"=>"diez",
    "eleven"=>"once",
    "twelve"=>"doce",
    "thirteen"=>"trece",
    "fourteen"=>"catorce",
    "fifteen"=>"quince",
    "sixteen"=>"dieciséis",
    "seventeen"=>"diecisiete",
    "eighteen"=>"dieciocho",
    "nineteen"=>"diecinueve",
    "twenty"=>"veinte"
);
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 4</title>";
echo "</head>";
echo "<body>";
echo "<p>";
if ($numbers[$_POST["input4"]]) {
    echo "The word \"" . $_POST["input4"] . "\" in Spanish is \"" . $numbers[$_POST["input4"]] . "\"";
} else {
    echo "The English cardinal \"" . $_POST["input4"] . "\" is not between \"one\" and \"twenty\"";
}
echo "</p>";
echo "</body>";
echo "</html>";
?>

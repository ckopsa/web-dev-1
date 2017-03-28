<?php
echo "<html>";
echo "<head>";
echo "<title>Original Burger</title>";
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "</head>";
echo "<body>";
echo "<div class=\"nav-bar\">";
echo "<a class=\"home-button nav-bar-button\" href=\"./week12.html\">Original Burger</a>";
echo "<a class=\"nav-bar-button\" href=\"./week12.html\">Place An Order</a>";
echo "</div>";
echo "<div class=\"main-container\">";
if ($_POST["confirm"]) {
echo "<h1>Purchase Complete!</h1>";
echo "<h2>Thanks for eating at Original Burger!</h2>";
} if ($_POST["cancel"]) {
    echo "<h1>Purchase Canceled!</h1>";
}
echo "</div>";
echo "</body>";
echo "</html>";
?>
<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$streetaddress = $_POST["streetaddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone = $_POST["phone"];
$totalMoney = $_POST["totalMoney"];
$shippingMoney = $_POST["shippingMoney"];
$taxMoney = $_POST["taxMoney"];
$finalMoney = $_POST["finalMoney"];
$creditCardExpDate = $_POST["creditcardexpdate"];
$cardType = $_POST["cardtype"];
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
echo "<h1>Order Confirmation Page</h1>";
echo "<h2>Customer Information</h2>";
echo "<p>Name: $firstname $lastname</p>";
echo "<p>Address: $streetaddress, $city, $state, $zipcode</p>";
echo "<p>Phone: $phone</p>";
echo "<h2>Order Information</h2>";
echo "<p>Items:</p>";
if (isset($_POST["burger"])) {
    echo "<p>Burger - $2.00</p>";
}
if (isset($_POST["cheeseburger"])) {
    echo "<p>Cheeseburger - $2.50</p>";
}
if (isset($_POST["fries"])) {
    echo "<p>Fries - $1.50</p>";
}
if (isset($_POST["drink"])) {
    echo "<p>Drink - $1.00</p>";
}
echo "<p>Total: $ $finalMoney</p>";
echo "<h2>Billing Information</h2>";
echo "<p>Credit Card Expiration Date: $creditCardExpDate</p>";
echo "<p>Credit Card Type: $cardType</p>";
echo "<div class=\"submission\">";
echo "<form action=\"confirmation.php\" method=\"post\">";
echo "<input name=\"confirm\" type=\"submit\" value=\"Confirm\"/>";
echo "<input name=\"cancel\" type=\"submit\" value=\"Cancel\"/>";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>
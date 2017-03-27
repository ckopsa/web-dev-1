<?php
$file = $DOCUMENT_ROOT. "week12.html";
$doc = new DOMDocument();
$doc->loadHTMLFile($file);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$streetaddress = $_POST["streetaddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone = $_POST["phone"];
echo $doc->getElementById("total_money")->nodeValue;
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 5</title>";
echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "</head>";
echo "<body>";
echo "<div class=\"nav-bar\">";
echo "<a class=\"home-button nav-bar-button\" href=\"./week12.html\">Original Burger</a>";
echo "<a class=\"nav-bar-button\" href=\"./week12.html\">Place An Order</a>";
echo "</div>";
echo "<div class=\"main-container\"";
echo "<h1>Order Confirmation Page</h1>";
echo "<h2>Customer Information</h2>";
echo "<p>Name: $firstname $lastname</p>";
echo "<p>Address: $streetaddress, $city, $state, $zipcode</p>";
echo "<p>Phone: $phone</p>";
echo "<h2>Order Information</h2>";
echo "<p>Items: $total_money</p>";
echo "</div>";
echo "</body>";
echo "</html>";
?>

/*
Title & Headings: The page should be well formatted and organized with an
appropriate title and headings. The details of how you do this are up to you.

Name: The user's first and last name.

Address: The user's address, presented in an easy-to-read way.

Phone: The user's phone number.

Items: A list of the items selected for purchase and their respective costs.

Total: The total cost of all the items being purchased.

Payment: The credit card type and expiration date. Display the expiration date
with month and year, such as "January 2013."

Confirm & Cancel: At the bottom of the page, have a form element with an action
element referencing the second PHP program (the Confirmation Page). There will
be two submit buttons: one to confirm the purchase and one to cancel the
purchase. Both of these will re-submit all the information presented on the
Review Page.
*/
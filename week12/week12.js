function validate(element, regex, errorMessage) {
    var pattern = new RegExp(regex);
    var input = element;
    var error = element.nextElementSibling;
    if (pattern.test(element.value)) {
        error.innerHTML = ""; // Reset the content of the message
        error.className = "error"; // Reset the visual state of the message
    }
    else {
        error.innerHTML = errorMessage;
        error.className = "error active";
    }
}

function togglePurchase(element) {
    var itemValue = element.parentElement.previousElementSibling.innerHTML;
    var number = Number(itemValue.replace(/[^0-9\.]+/g,"")); 
    var tax = .08;
    var shippingCost = 5;
    if (!element.checked) {
        number *= -1;
    }
    var totalAmount = Number(document.getElementById('total_money').innerHTML.replace(/[^0-9\.]+/g,"")) + number;
    // update total
    document.getElementById('total_money').innerHTML = totalAmount.toFixed(2);
    // update shipping
    var shippingAmount = shippingCost * Number(Boolean(totalAmount));
    document.getElementById('shipping_money').innerHTML = shippingAmount.toFixed(2);
    // update tax
    var taxAmount = Number(document.getElementById('tax_money').innerHTML.replace(/[^0-9\.]+/g,"")) + number * tax;
    document.getElementById('tax_money').innerHTML = taxAmount.toFixed(2);
    // update final
    var finalAmount = totalAmount + shippingAmount + taxAmount;
    document.getElementById('final_money').innerHTML = finalAmount.toFixed(2);
}

function checkAndTogglePurchase(row) {
    var checkbox = row.getElementsByTagName("input")[0];
    checkbox.checked = !checkbox.checked;
    togglePurchase(checkbox);
}

function checkAllInputs(form) {
    var inputs = [].slice.call(form.getElementsByTagName('input'));
    var textInputs = inputs.filter(function(element) {if (element.getAttribute("type") == "text" && element.value == "") { return true; } return false;});
    if (textInputs.length != 0) {
        textInputs.forEach(function(element){validate(element, " ", "Missing Input")});
        return false;
    }
    return true;
}
function clearAllInputs(form) {
    var inputs = [].slice.call(form.getElementsByTagName('input'));
    var textInputs = inputs.filter(function(element) {if (element.getAttribute("type") == "text" && element.value == "") { return true; } return false;});
    textInputs.forEach(function(element){element.value = ""; validate(element, "", "")});
}

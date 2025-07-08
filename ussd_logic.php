<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$menu = explode("*", $text);
$level = count($menu);

if ($text == "") {
    $response = "CON Welcome to M-Pesa USSD\n";
    $response .= "1. Check Balance\n";
    $response .= "2. Send Money\n";
    $response .= "3. Lipa na M-Pesa\n";
    $response .= "4. My Account";
} 
// Option 1 - Check Balance
else if ($text == "1") {
    $response = "END Your balance is Ksh 5,420";
} 
// Option 2 - Send Money
else if ($menu[0] == "2") {
    if ($level == 1) {
        $response = "CON Enter recipient phone number:";
    } else if ($level == 2) {
        $response = "CON Enter amount to send:";
    } else if ($level == 3) {
        $response = "END You have sent Ksh " . $menu[2] . " to " . $menu[1];
    }
}
// Option 3 - Lipa na M-Pesa
else if ($menu[0] == "3") {
    if ($level == 1) {
        $response = "CON Choose option:\n1. Pay Bill\n2. Till Number\n3. Pochi la Biashara";
    } 
    // Pay Bill
    else if ($level == 2 && $menu[1] == "1") {
        $response = "CON Enter Paybill number:";
    } else if ($level == 3 && $menu[1] == "1") {
        $response = "CON Enter amount to pay:";
    } else if ($level == 4 && $menu[1] == "1") {
        $response = "END You have paid Ksh " . $menu[3] . " via Paybill " . $menu[2];
    }
    // Till Number
    else if ($level == 2 && $menu[1] == "2") {
        $response = "CON Enter Till number:";
    } else if ($level == 3 && $menu[1] == "2") {
        $response = "CON Enter amount to pay:";
    } else if ($level == 4 && $menu[1] == "2") {
        $response = "END You have paid Ksh " . $menu[3] . " via Till number " . $menu[2];
    }
    // Pochi la Biashara
    else if ($level == 2 && $menu[1] == "3") {
        $response = "CON Enter phone number:";
    } else if ($level == 3 && $menu[1] == "3") {
        $response = "CON Enter amount to pay:";
    } else if ($level == 4 && $menu[1] == "3") {
        $response = "END You have paid Ksh " . $menu[3] . " to Pochi la Biashara " . $menu[2];
    }
}
// Option 4 - My Account
else if ($text == "4") {
    $response = "END Phone: $phoneNumber\nAccount Status: Active";
}
else {
    $response = "END Invalid choice.";
}

header('Content-type: text/plain');
echo $response;

<?php
echo '<link rel="stylesheet" href="style.css">';
$name = $_POST["name"];
$password = $_POST["password"];
$pen = $_POST["pen"];
$pan = $_POST["pan"];
$pin = $_POST["pin"];
$typesofShipping = $_POST["typesofShipping"];
$penC = $pen*2;
$panC = $pan*30;
$pinC = $pin*1;

echo "Welcome " . $name . "<br>";
echo "Password: " . $password . "<br><br>";
echo "pen -> " .  "Quantity: " . $pen . '&nbsp&nbsp&nbsp&nbsp' . "Sub Total: " . $penC . "<br>";
echo "pan -> " .  "Quantity: " . $pan . '&nbsp&nbsp&nbsp&nbsp' . "Sub Total: " . $panC . "<br>";
echo "pin -> " .  "Quantity: " . $pin . '&nbsp&nbsp&nbsp&nbsp' . "Sub Total: " . $pinC . "<br>";
if ($typesofShipping == "Free 7 day")
{
    echo "Shipping: Free - 7 day" . "<br>";
    $sc = 0;
}
if ($typesofShipping == "50.00 over night")
{
    echo "Shipping: $50.00 - over night" . "<br>";
    $sc = 50;
}
if ($typesofShipping == "5.00 three day")
{
    echo "Shipping: $5.00 - three day" . "<br>";
    $sc = 5;
}
echo "Total Cost ->" . "$" . (($penC)+($panC)+($pinC)+($sc));
?>
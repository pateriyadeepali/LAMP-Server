<?php
// Hardcoded values for products and their prices
$product1 = "Wireless Mouse";
$price1 = 20.99;
$quantity1 = 2;

$product2 = "Mechanical Keyboard";
$price2 = 75.49;
$quantity2 = 1;

$product3 = "USB-C Hub";
$price3 = 34.99;
$quantity3 = 3;

// Calculate total cost
$total1 = $price1 * $quantity1;
$total2 = $price2 * $quantity2;
$total3 = $price3 * $quantity3;

$subtotal = $total1 + $total2 + $total3;

// Apply a discount of 10% if subtotal exceeds $100
$discount = ($subtotal > 100) ? $subtotal * 0.10 : 0;

// Apply a fixed tax rate of 8%
$tax = ($subtotal - $discount) * 0.08;

// Final total
$finalTotal = $subtotal - $discount + $tax;

// Display the order summary
echo "<h1>Order Summary</h1>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th></tr>";
echo "<tr><td>$product1</td><td>$quantity1</td><td>\$$price1</td><td>\$$total1</td></tr>";
echo "<tr><td>$product2</td><td>$quantity2</td><td>\$$price2</td><td>\$$total2</td></tr>";
echo "<tr><td>$product3</td><td>$quantity3</td><td>\$$price3</td><td>\$$total3</td></tr>";
echo "</table>";

echo "<p><strong>Subtotal:</strong> \$" . number_format($subtotal, 2) . "</p>";
echo "<p><strong>Discount:</strong> -\$" . number_format($discount, 2) . "</p>";
echo "<p><strong>Tax (8%):</strong> +\$" . number_format($tax, 2) . "</p>";
echo "<p><strong>Final Total:</strong> \$" . number_format($finalTotal, 2) . "</p>";
?>


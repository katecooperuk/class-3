<?php
function calculate_total($subtotal, $discount, $shipping_method) {

    if($shipping_method == 'priority') {
        $shipping_rate = 5;
    }
    else if($shipping_method == 'express') {
        $shipping_rate = 15;
    }

    $tax = .09 * $subtotal;

    $total = $subtotal + $shipping_rate - $discount;

    return $total;

}
?>
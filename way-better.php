<?php


require "./data.php";


function placeOrder($order, $pizzaPrices)
{
    if (
        !$order['customer']
        || !$order['address']
        || !$order['pizza']
        || !$pizzaPrice = $pizzaPrices[$order['pizza']]
    ) {
        echo "Invalid order. <br><br>";
        return;
    }

    echo "Creating new order... <br>"
        . "A ${order['pizza']} pizza should be sent to ${order['customer']} <br>"
        . "The address: ${order['address']} <br>"
        . "The bill is €${pizzaPrice} <br>"
        . "Order finished. <br><br>";
}


function orderAllPizzas($pizzaPrices, $orders)
{
    foreach ($orders as $order) {
        placeOrder($order, $pizzaPrices);
    }
}

orderAllPizzas($pizzaPrices, $orders);

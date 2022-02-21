<?php


require "./data.php";


function placeOrder($pizza, $customer)
{
    if (!$pizza || !$customer) {
        echo "Invalid order.";
        return;
    }

    echo "Creating new order... <br>"
        . "A ${pizza['name']} pizza should be sent to ${customer['name']} <br>"
        . "The address: ${customer['address']} <br>"
        . "The bill is €${pizza['price']} <br>"
        . "Order finished. <br><br>";
}


function orderAllPizzas($pizzas, $customers)
{
    placeOrder($pizzas["calzone"], $customers["koen"]);
    placeOrder($pizzas["marguerita"], $customers["manuele"]);
    placeOrder($pizzas["golden"], $customers["students"]);
}

orderAllPizzas($pizzas, $customers);

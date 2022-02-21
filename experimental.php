<?php

$customers = [
    "koen" => [
        "name" => "koen",
        "address" => "a yacht in Antwerp",
    ],
    "manuele" => [
        "name" => "manuele",
        "address" => "somewhere in Belgium",
    ],
    "students" => [
        "name" => "students",
        "address" => "BeCode office",
    ],
];

$pizzas = [
    "marguerita" => [
        "name" => "marguerita",
        "price" => 5,
    ],
    "golden" => [
        "name" => "golden",
        "price" => 100,
    ],
    "calzone" => [
        "name" => "calzone",
        "price" => 10,
    ],
];


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

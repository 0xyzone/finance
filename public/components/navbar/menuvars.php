<?php
if($_SESSION['vcaf_user'] == "admin"){
    $menuitems = array(
    "home" =>
    [
        "name" => "Dashboard",
        "link" => "?page=dashboard",
        "icon" => "<i class='fa-solid fa-chart-line'></i>"
    ],
    "transactions" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
    "transactions1" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
    "transactions2" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
    "transactions3" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
    "transactions4" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
    "transactions5" =>
    [
        "name" => "Transactions",
        "link" => "?page=transactions",
        "icon" => "<i class='fa-solid fa-circle-plus'></i>"
    ],
);
} else {
    $menuitems = array(
        "home" =>
        [
            "name" => "Dashboard",
            "link" => "?page=dashboard",
            "icon" => "<i class='fa-solid fa-chart-line'></i>"
        ]);
}


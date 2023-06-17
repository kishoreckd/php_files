<?php

require "router.php";

$controller = new Router();

$controller->post("/","index");
$controller->post("/create","create");
$controller->post("/list","list");
$controller->post("/delete","delete");
$controller->post("/edit","edit");
$controller->post("/update","update");
$controller->route();

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

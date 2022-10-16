<?php

$routeList = require('../config/routes.php');
$url = filter_input(INPUT_SERVER, "REQUEST_URI");

if ($url === null) {
    $url = '/';
}
foreach ($routeList as $key => $route) {
    if ($url === $key) {
        include "../src/Controller/" . $route['controller'];
        $route['action']();
    }
}

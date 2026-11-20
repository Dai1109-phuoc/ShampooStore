<?php
$controller = $_GET['controller'] ?? 'Home';
$action = $_GET['action'] ?? 'index';

require_once __DIR__ . "/../controller/{$controller}.php";

switch ($controller) {
    case "Home":
        $controller = new Home();
        break;
    default:
        $controller = new Home();
        break;
}

if (method_exists($controller, $action)) {
    $controller->{$action}();
} else {
    $controller->index();
}
?>
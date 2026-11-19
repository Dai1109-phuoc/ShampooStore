<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/../config.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Home';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = __DIR__ . '/../app/controller/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    if (class_exists($controllerName)) {
        $controllerObject = new $controllerName();

        if (method_exists($controllerObject, $actionName)) {
            $controllerObject->$actionName();
        } else {
            echo "Khong tim thay hanh dong (Action): $actionName";
        }
    } else {
        echo "Khong tim thay lop Controller: $controllerName";
    }
} else {
    http_response_code(404);
    echo "Trang ban tim kiem khong ton tai (404 Not Found)";
}
?>
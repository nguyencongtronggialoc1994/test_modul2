<?php
require __DIR__ . "/vendor/autoload.php";
$productController = new \App\controller\ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'add':
        $productController->add();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'edit':
        $productController->edit();
        break;
    case 'search':
        $productController->search();
        break;
    default:
        $productController->show();
        break;
}
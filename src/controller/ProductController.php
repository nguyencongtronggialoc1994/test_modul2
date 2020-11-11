<?php

namespace App\controller;

use App\model\Product;
use App\model\ProductManagement;

class ProductController
{
    protected $productManagement;

    public function __construct()
    {
        $this->productManagement = new ProductManagement();
    }

    public function show()
    {
        $product = $this->productManagement->getAll();
        include_once 'src/view/ListProduct.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/view/AddProduct.php';
        } else {

            $productName = $_REQUEST['productName'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $product = new Product($productName, $type, $price, $quantity, $description);
            $this->productManagement->addProduct($product);
            header('location:index.php');
        }

    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->productManagement->delete($id);
        header('location:index.php');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $product = $this->productManagement->getById($id);
            include_once 'src/view/EditProduct.php';
        } else {
            $id = $_GET['id'];
            $productName = $_REQUEST['productName'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $product = new Product($productName, $type, $price, $quantity, $description);
            $product->setProductCode($id);
            $this->productManagement->update($product);
            header('location:index.php');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = "%" . $_POST['search'] . "%";
            $product = $this->productManagement->search($search);

            include_once 'src/view/Search.php';
        }
    }
}
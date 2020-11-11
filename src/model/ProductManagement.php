<?php


namespace App\model;


class ProductManagement
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $stmt = $this->database->prepare("SELECT * FROM products");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item['productName'], $item['type'], $item['price'], $item['quantity'], $item['description']);
            $product->setProductCode($item['productCode']);
            $arr[] = $product;
        }
        return $arr;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO `products`( `productName`, `type`, `price`, `quantity`, `description`) VALUES (:productName,:type,:price,:quantity,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName', $product->getProductname());
        $stmt->bindParam(':type', $product->getType());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->database->prepare("DELETE FROM products WHERE productCode=$id");
        $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM products WHERE productCode=$id");
        $stmt->execute();
        $result = $stmt->fetch();
        $product = new  Product($result['productName'], $result['type'], $result['price'], $result['quantity'], $result['description']);
        $product->setProductCode($result['productCode']);
        return $product;
    }

    public function update($product)
    {
        $sql = "UPDATE `products` SET `productName`=:productName,`type`=:type,`price`=:price,`quantity`=:quantity,`description`=:description WHERE productCode=:productCode";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':type', $product->getType());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->bindParam(':productCode', $product->getProductCode());
        $stmt->execute();
    }
    public function  search($key){
        $sql="SELECT * FROM products WHERE  productName LIKE '$key'";
        $stmt=$this->database->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        $arr=[];
        foreach ($result as $item){
            $product = new Product($item['productName'],$item['type'],$item['price'],$item['quantity'],$item['description']);
            $arr[]=$product;
        }
        return $arr;
    }
}
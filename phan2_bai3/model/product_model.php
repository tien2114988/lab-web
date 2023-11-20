<?php
include_once '../lib/database.php';
include_once '../model/product.php';

class Product_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getProductList()
    {
        $query = 'SELECT *  FROM products';
        $result = $this->database->select($query);
        $table = $result->fetch_all(MYSQLI_ASSOC);
        $productList = array();
        foreach ($table as $row) {
            $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['image']);
            array_push($productList, $product);
        }
        return $productList;
    }

    public function insertProduct($product_id, $name, $description, $price, $image)
    {
        $query = "INSERT INTO products VALUES('$product_id','$name','$description',$price,'$image')";
        return $this->database->insert($query);
    }

    public function getProduct($product_id)
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
        $result = $this->database->select($query);
        $row = $result->fetch_all(MYSQLI_ASSOC)[0];
        $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['image']);
        return $product;
    }

    public function deleteProduct($product_id)
    {
        $query = "DELETE FROM products WHERE id=$product_id";
        return $this->database->delete($query);
    }

    public function editProduct($product_id, $name, $description, $price, $image)
    {
        $query = "UPDATE products SET name='$name', description='$description', price=$price, image='$image' WHERE id='$product_id'";
        return $this->database->delete($query);
    }
}

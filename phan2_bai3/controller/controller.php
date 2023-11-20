<?php
include_once '../model/product_model.php';

class Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Product_Model();
    }

    public function invoke()
    {
        if (isset($_GET['insert'])) {
            include_once '../view/insert.php';
        } else if (isset($_GET['edit'])) {
            $product = $this->productModel->getProduct($_GET['productID']);
            include_once '../view/insert.php';
        } else if (isset($_GET['read'])) {
            $product = $this->productModel->getProduct($_GET['productID']);
            include_once '../view/read.php';
        } else if (isset($_GET['productID']) && isset($_GET['delete'])) {
            $this->productModel->deleteProduct($_GET['productID']);
            $productList = $this->productModel->getProductList();
            include_once '../view/list.php';
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_GET['edited'])) {
                    $this->productModel->editProduct($_GET['id'], $_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);
                } else if (isset($_POST['id'])) {
                    $this->productModel->insertProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);
                } else {
                    $this->productModel->insertProduct('', $_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);
                }
            }
            $productList = $this->productModel->getProductList();
            include_once '../view/list.php';
        }
    }
}

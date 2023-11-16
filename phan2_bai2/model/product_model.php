<?php
include_once '../lib/database.php';
include_once '../model/product.php';

class Product_Model
{
    private $database;
    private $productList;

    public function __construct()
    {
        $this->database = new Database();
        $this->productList = $this->queryProductList();
    }

    private function queryProductList()
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

    public function getProductList()
    {
        return $this->productList;
    }

    public function getProductListByPageNum($pageNum = 1)
    {
        $productListByPageNum = array();
        $itemCountPerPage = 6;
        $maxCount = 0;
        if ($pageNum * $itemCountPerPage < count($this->productList)) {
            $maxCount = $pageNum * $itemCountPerPage;
        } else {
            $maxCount = count($this->productList);
        }

        for ($i = ($pageNum - 1) * $itemCountPerPage; $i < $maxCount; $i++) {
            array_push($productListByPageNum, $this->productList[$i]);
        }
        return $productListByPageNum;
    }

    public function getTopProducts()
    {
        $topProducts = array();
        for ($i = 0; $i < 5; $i++) {
            if ($i >= count($this->productList)) {
                break;
            }
            array_push($topProducts, $this->productList[$i]);
        }
        return $topProducts;
    }

    public function getMaxNumPage()
    {
        return ceil(count($this->productList) / 6);
    }

    public function getProductByID($id)
    {
        return $this->productList[$id - 1];
    }
}

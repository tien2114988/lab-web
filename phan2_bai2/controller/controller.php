<?php
include_once '../model/product_model.php';

class Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Product_Model();
    }

    public function controlHeader()
    {
        include_once '../view/header.php';
    }

    public function controlNavigation()
    {
        $topProducts = $this->productModel->getTopProducts();
        include_once '../view/navigation.php';
    }

    public function controlContent()
    {
        if (isset($_GET['currentPage'])) {
            $productList = $this->productModel->getProductListByPageNum($_GET['currentPage']);
        } else {
            $productList = $this->productModel->getProductListByPageNum();
        }

        $currentPage = 1;
        $pageNumList = array();
        $maxPage = $this->productModel->getMaxNumPage();
        if (!isset($_GET['currentPage']) || $_GET['currentPage'] == 1) {
            for ($i = 1; $i <= 3; $i++) {
                if ($i > $maxPage) {
                    break;
                }
                array_push($pageNumList, $i);
            }
        } else {
            $currentPage = $_GET['currentPage'];
            array_push($pageNumList, $currentPage - 1);
            array_push($pageNumList, $currentPage);
            if ($currentPage < $maxPage) {
                array_push($pageNumList, $currentPage + 1);
            }
        }

        if (isset($_GET['productID'])) {
            $product = $this->productModel->getProductByID($_GET['productID']);
            include_once '../view/item_detail.php';
        } else {
            include_once '../view/item_list.php';
        }
    }

    public function controlBanner()
    {
        include_once '../view/banner.php';
    }

    public function controlFooter()
    {
        include_once '../view/footer.php';
    }

    public function invoke()
    {
        $this->controlHeader();
        $this->controlNavigation();
        $this->controlContent();
        $this->controlBanner();
        $this->controlFooter();
    }
}

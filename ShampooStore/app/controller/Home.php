<?php
require_once __DIR__ . '/../model/Product.php';

class Home {
    public function index() {
        $productModel = new ProductModel();
        $featuredProducts = $productModel->getFeaturedProducts();

        require_once __DIR__ . '/../view/Layout/header.php';
        require_once __DIR__ . '/../view/Layout/Home/index.php';
        require_once __DIR__ . '/../view/Layout/footer.php';
    }
}
?>
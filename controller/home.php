<?php
class Home {
    public function index() {
        $model = new ModelShampoo();
        $result = $model->getDuLieu();
        require_once "view/home/index.php";
    }
}
?>
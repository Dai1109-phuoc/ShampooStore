<?php
require_once __DIR__ . '/../../config.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getFeaturedProducts() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM products WHERE status = 1 LIMIT 8");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
}
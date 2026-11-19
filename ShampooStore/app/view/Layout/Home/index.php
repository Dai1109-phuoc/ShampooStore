<div class="container" style="padding: 20px;">
    <h2>Chào mừng bạn đến với cửa hàng Dầu gội & Sữa tắm thiên nhiên!</h2>
    <p>Hệ thống MVC đã được thiết lập thành công và kết nối thông suốt.</p>
    
    <hr>
    <h3>Sản phẩm nổi bật (Test dữ liệu từ Database):</h3>
    <div class="product-grid" style="display: flex; gap: 20px; flex-wrap: wrap;">
        <?php if (!empty($featuredProducts)): ?>
            <?php foreach ($featuredProducts as $product): ?>
                <div style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; width: 220px;">
                    <h4><?= htmlspecialchars($product['name']) ?></h4>
                    <p style="color: #e67e22; font-weight: bold;"><?= number_format($product['price']) ?> đ</p>
                    <a href="index.php?controller=Product&action=detail&id=<?= $product['id'] ?>" style="background: #27ae60; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; display: inline-block;">Xem chi tiết</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Chưa có sản phẩm nào trong cơ sở dữ liệu hoặc chưa kết nối được bảng `products`.</p>
        <?php endif; ?>
    </div>
</div>
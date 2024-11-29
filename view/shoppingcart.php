<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppingcart</title>
    <link rel="stylesheet" href="../public/css/shoppingcart.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <div class="tagname">
      <p class="cart2">Giỏ hàng (2)</p>
      <a href="#" class="daux1">×</a>
  </div>

  <!-- Sản phẩm 1 -->
  <body>
    <!-- Include Header -->
    <?php include('header.php'); ?>

    <div class="shopping-cart">
        <div class="tagname">
            <p class="cart2">Giỏ hàng (<?php echo count($products); ?>)</p>
        </div>

        <!-- Hiển thị sản phẩm -->
        <?php foreach ($products as $product): ?>
            <div class="product" id="product-<?php echo $product['id']; ?>">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <div class="product-info">
                    <p><?php echo $product['name']; ?></p>
                    <div class="counter">
                        <button class="decrement" data-id="<?php echo $product['id']; ?>">−</button>
                        <span class="quantity"><?php echo $product['quantity']; ?></span>
                        <button class="increment" data-id="<?php echo $product['id']; ?>">+</button>
                    </div>
                </div>
                <p class="product-price"><?php echo number_format($product['price'], 0, '.', '.'); ?> đ</p>
                <!-- Nút xóa -->
                <form method="POST" action="process_cart.php" style="display:inline;">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="delete-button">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </div>
        <?php endforeach; ?>

        <!-- Tạm tính -->
        <div class="cart-footer">
            <?php
            $total = array_sum(array_map(function ($product) {
                return $product['price'] * $product['quantity'];
            }, $products));
            ?>
            <p id="total-price">Tạm tính: <?php echo number_format($total, 0, '.', '.'); ?> đ</p>
            <button>THANH TOÁN</button>
        </div>
    </div>
</body>
</html>
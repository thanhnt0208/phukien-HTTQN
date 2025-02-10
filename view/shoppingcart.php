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
    <div class="product" id="product-1">
        <img src="../public/img/h11.png" alt="Thắt lưng">
        <div class="product-info">
            <p>Thắt lưng PIERRE CARDIN BE-P 2228</p>
            <div class="counter">
                <button id="decrement-1">−</button>
                <span id="value-1">1</span>
                <button id="increment-1">+</button>
            </div>
        </div>
        <p class="product-price">2.990.000 đ</p>
        <i class="fa-solid fa-trash-can delete-button" data-id="product-1"></i>
    </div>

    <!-- Sản phẩm 2 -->
    <div class="product" id="product-2">
        <img src="../public/img/h12.png" alt="Ví">
        <div class="product-info">
            <p>Ví NAM PIERRE CARDIN LW-P 157</p>
            <div class="counter">
                <button id="decrement-2">−</button>
                <span id="value-2">1</span>
                <button id="increment-2">+</button>
            </div>
        </div>
        <p class="product-price">2.098.000 đ</p>
        <i class="fa-solid fa-trash-can delete-button" data-id="product-2"></i>
    </div>

    <div class="cart-footer">
        <p id="total-price">Tạm tính: 2.397.000 đ</p>
        <button>THANH TOÁN</button>
    </div>
</body>
</html>
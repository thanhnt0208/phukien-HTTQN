<?php include "layout/header.php"; ?>
<body>
    <div class="containerr">
        <div class="section">
            <h3>THÔNG TIN NHẬN HÀNG</h3>
            <form method="POST" action="index.php?action=success">
                <input type="email" name="customer_email" placeholder="Email"  />
                <input type="text" name="customer_name" placeholder="Họ và tên"  />
                <div class="phone-group">
                    <input type="text" name="customer_phone" placeholder="Số điện thoại "  />
                </div>
                <input type="text" name="customer_address" placeholder="Địa chỉ"  />
                <textarea name="note" placeholder="Ghi chú (tùy chọn)"></textarea>

                <div class="payment">
                    <label>
                        <input type="radio" name="payment_method" value="Transfer"  />
                        Chuyển khoản
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="COD"  />
                        Thanh toán khi nhận hàng
                    </label>
                </div>
                <button type="submit">THANH TOÁN</button>
            </form>
                <div class="order-summary">
                    <h3>ĐƠN HÀNG</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Hình Ảnh</th>
                                <th>Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Đơn Giá</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['cart'] as $product): ?>
                                <tr>
                                    <td><img src="public/img/<?= $product['image'] ?>" alt="Sản phẩm" style="width: 50px; height: 50px; object-fit: cover;" /></td>
                                    <td><?= $product['title'] ?></td>
                                    <td>
                                        <div class="counter">
                                            <a href="minuscart/<?= $product['id'] ?>"><button id="decrement-1">−</button></a>
                                            <span id="value-1"><?= $product['quantity'] ?></span>
                                            <a href="pluscart/<?= $product['id'] ?>"><button id="increment-1">+</button></a>
                                        </div>
                                    </td>
                                    <td><?= number_format($product['price']) ?>đ</td>
                                    <td>
                                        <?php if (isset($product['status']) && $product['status'] === 'Đang chờ xử lý'): ?>
                                            <span>Đang chờ xử lý</span>
                                        <?php else: ?>
                                            <a href="deletecart/<?= $product['id'] ?>"><button class="delete-btn">Xóa</button></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="cost">
                        <p class="total">Tổng tiền :
                            <?php
                            $total = 0;
                            foreach($_SESSION['cart'] as $product){
                                $total += $product['price'] * $product['quantity'];
                            }
                            echo number_format($total);
                            ?>đ
                        </p>
                    </div>
                </div>

                
        </div>
    </div>
</body>
</html>
<?php include 'layout/footer.php'; ?>

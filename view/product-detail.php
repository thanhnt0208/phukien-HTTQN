<?php include "header.php" ?>
    <div class="container3">
        <div class="name3">
            <h4 class="h4"><?= htmlspecialchars($product['detail']) ?></h4>
        </div>
            <div class="col">
                <div class="col6">
                    
                    <div class="khunglon">
                        <img src="public/img/<?= htmlspecialchars($product['image']) ?>" alt="">
                    </div>       
                    <div class="khungnho">
                        <img src="public/img/Frame 17.png" alt=""> 
                        <img src="public/img/image.png" alt=""> 
                        <img src="public/img/image (1).png" alt=""> 
                    </div>
                
            </div>
            <div class="col5">
                <div class="price2">
                    <h3><?= htmlspecialchars($product['price']) ?>đ</h3>
                </div>
                <div class="type">
                    <p>Loại Ví: </p>
                </div>
                <div class="button">
                    <button>TIÊU CHUẨN</button>
                    <button>THÊM NGĂN CHỨA THẺ</button>
                </div>
                <div class="soluong">
                    <p>Số lượng:</p>
                    <input type="number" name="soluong" min="1" max="10" value="1">
                </div>
                <div class="addproduct">
                    <button><b>Mua Ngay</b></button>
                    <button><b>Thêm Vào Giỏ Hàng</b></button>
                </div>
            <div class="textproduct">
                    <p>
                        <strong>Hãng: Pierre cardin Jeans</strong> <br>
                        <i>+ VÍ NAM PIERRE CARDIN ( Nhập khẩu chính hãng)</i> <br>
                        <br>
                        <strong>. Mã SP: LW-P 157</strong><br>
                        <br>
                        <strong>. Màu Sắc: Đent</strong><br>
                        <br>
                        <strong>. Chất Liệu: Da Bò</strong><br>
                        <br>
                        <strong>. Kiểu Dáng: Gập Ngang</strong><br>
                        <br>
                        <strong>. Kích Thước: 120 x 95x 15mm</strong><br>
                        <br>
                        <strong>. Xuất Xứ: Pierre cardin ( full box, Túi xách, tag, H.dẫn s.d, thẻ bảo hành tiếng Anh)</strong><br>
                        <br>
                        <strong>+ Hotline : 0792 703 777 (Zalo)</strong><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="comment">
            <p class="name3">ĐÁNH GIÁ SẢN PHẨM VÍ NAM PIERRE CARDIN LW-P 157</p>
            <div class="flex">
                <p class="danhgia">4
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="col3">
            <div class="user">
                <ul><li><i class="fa-regular fa-user"></i></li></ul>
                <h4>Dũng</h4>
            </div>
            <ul class="star">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-regular fa-star"></i></li>
            </ul>
            <div class="quality">
            <p>Sản phẩm tốt, chất lượng.</p>
            </div>
        </div>
        <div class="col3">
            <div class="user">
                <ul><li><i class="fa-regular fa-user"></i></li></ul>
                <h4>Trọng Quý</h4>
            </div>
            <ul class="star">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-regular fa-star"></i></li>
                <li><i class="fa-regular fa-star"></i></li>
            </ul>
            <div class="quality">
            <p>Sản phẩm ổn, chất liệu êm cầm nắm thoải mái.</p>
            </div>
        </div>
        <div class="col3">
            <div class="user">
                <ul><li><i class="fa-regular fa-user"></i></li></ul>
                <h4>Tiến Thành</h4>
            </div>
            <ul class="star">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <div class="quality">
            <p>Thiết kế sản phẩm tinh tế, có độ bền và độ mềm mịn cao.  </p>
            </div>
        </div>
        <div class="col3">
            <div class="user">
                <ul><li><i class="fa-regular fa-user"></i></li></ul>
                <h4>Thái An</h4>
            </div>
            <ul class="star">
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-regular fa-star"></i></li>
            </ul>
            <div class="quality">
            <p>Kích thước ví gọn gàng, vừa vặn trong túi quần mà không gây cộm.</p>
            </div>
        </div>
        <button class="vietdanhgia">Viết đánh giá</button>
        <hr>
        <div class="row">
                <div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div>
                <div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div><div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div><div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div><div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div><div class="col4-1">
                    <img src="public/img/h10.png" alt="">
                    <h4 class="name"></h4>
                    <p>Giá: </p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: cái</p>
                </div>
                
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
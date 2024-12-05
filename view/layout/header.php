<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
</head>
<body>
    <header>
        <div class="col80">
            <div class="logo">
                <img src="public/img/Màu Be Cổ điển Hình tròn Thời trang Logo (2) 1.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li>
                        <a href="">DANH MỤC</a>
                        <ul>
                            <li><a href="<?php echo $baseurl; ?>/index.php?action=iddm&Categories_id=1">Ví - Túi Sách</a></li>
                            <li><a href="<?php echo $baseurl; ?>/index.php?action=iddm&Categories_id=2">Thắt Lưng</a></li>
                            
                            <li><a href="<?php echo $baseurl; ?>/index.php?action=iddm&Categories_id=4">Nón</a></li>
                            <li><a href="<?php echo $baseurl; ?>/index.php?action=iddm&Categories_id=5">Nhẫn</a></li>
                            <li><a href="<?php echo $baseurl; ?>/index.php?action=iddm&Categories_id=6">Dây Chuyền</a></li>
                        </ul>
                    </li>

                    <li><a href="">GIỚI THIỆU</a></li>
                    <li><a href="">LIÊN HỆ</a></li>
                </ul>
            </div>
            <div class="item">
                <input type="text">
                <i class="fa-solid fa-magnifying-glass"></i>
                <a href="<?php echo $baseurl?>/login"><i class="fa-solid fa-user"></i></a>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
    </header>
    <div class="banner">
        <img src="public/img/banner.jpg" alt="">
    </div>
</body>
</html>
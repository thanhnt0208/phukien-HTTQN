<?php include "header.php" ?>
<body>
     <div class="bannerphu">
        <img src="public/img/logo phụ.png" alt="">
     </div>

     <div class="container">
        <h3>SẢN PHẨM NAM</h3>
        <div class="row">
            <?php foreach ($manProducts as $manProduct) { ?>
                <div class="col4">
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($manProduct['id']) ?>"><img src="public/img/<?= htmlspecialchars($manProduct['image']) ?>" alt=""></a>
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($manProduct['id']) ?>"><h4 class="name"><?= htmlspecialchars($manProduct['detail']) ?></h4></a>
                    <p>Giá: <?= htmlspecialchars($manProduct['price']) ?></p>
                    <button>Mua ngay</button>
                    <p class="sohang">Hàng còn: <?= htmlspecialchars($manProduct['Quantity']) ?> cái</p>
                </div>
            <?php } ?>
        </div>
        <div class="bt1">
        <button>xem tất cả</button>
        </div>
        <img src="public/img/h99.png" alt="">
        <h3>SẢN PHẨM NỮ</h3>
        <div class="row">
        <?php foreach ($grilProducts as $girlProduct) { ?>
                <div class="col4">
                <a href=""><img src="public/img/<?= htmlspecialchars($girlProduct['image']) ?>" alt=""></a>
                <a href=""><h4 class="name"><?= htmlspecialchars($girlProduct['detail']) ?></h4></a>
                <p>Giá: <?= htmlspecialchars($girlProduct['price']) ?></p>
                <button>Mua ngay</button>
                <p class="sohang">Hàng còn: <?= htmlspecialchars($girlProduct['Quantity']) ?> cái</p>
                
            </div>
            <?php } ?>
    </div>
    <div class="bt1">
        <button>xem tất cả</button>
        </div>
<?php include "footer.php" ?>

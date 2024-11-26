<?php include "header.php" ?>
<body>
     <div class="bannerphu">
        <img src="public/img/logo phụ.png" alt="">
     </div>

     <div class="container">
        <h3>SẢN PHẨM NAM</h3>
        <div class="row">
            <?php foreach ($manProducts as $manProduct){?>
                <div class="col4">
                <img src="public/img/<?= htmlspecialchars($manProducts['image']) ?>" alt="">
                <h4 class="name"><?= htmlspecialchars($manProducts['title']) ?></h4>
                <p>Giá: <?= htmlspecialchars($manProducts['price']) ?></p>
                <button>Mua ngay</button>
                <p class="sohang">Hàng còn: <?= htmlspecialchars($manProducts['Quantity']) ?> cái</p>
                
            </div>
            <?php}?>
        </div>
        <div class="bt1">
        <button>xem tất cả</button>
        </div>
        <img src="public/img/h99.png" alt="">
        <h3>SẢN PHẨM NỮ</h3>
        <div class="row">
        <?php foreach ($girlProducts as $girlProduct){?>
                <div class="col4">
                <img src="public/img/<?= htmlspecialchars($girlProducts['image']) ?>" alt="">
                <h4 class="name"><?= htmlspecialchars($girlProducts['title']) ?></h4>
                <p>Giá: <?= htmlspecialchars($girlProducts['price']) ?></p>
                <button>Mua ngay</button>
                <p class="sohang">Hàng còn: <?= htmlspecialchars($girlProducts['Quantity']) ?> cái</p>
                
            </div>
            <?php}?>
        <div class="bt1">
        <button>xem tất cả</button>
        </div>
    </div>
<?php include "footer.php" ?>

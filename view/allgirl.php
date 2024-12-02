<?php include "layout/header.php" ?>

<div class="row">
                <?php foreach ($allGirlProducts as $allGirlProduct) { ?>
                    <div class="col4-1">
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($allGirlProduct['id']) ?>"><img src="public/img/<?= htmlspecialchars($allGirlProduct['image']) ?>" alt=""></a>
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($allGirlProduct['id']) ?>"><h4 class="name"><?= htmlspecialchars($allGirlProduct['detail']) ?></h4></a>
                        <p>Giá: <?= htmlspecialchars($allGirlProduct['price']) ?></p>
                        <button>Mua ngay</button>
                        <p class="sohang">Hàng còn: <?= htmlspecialchars($allGirlProduct['Quantity']) ?>cái</p>
                    </div>
                <?php } ?>
                
        </div>

<?php include 'layout/footer.php' ?>
<?php include "layout/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h4.name{
    text-decoration: none;
}
    </style>
</head>
<body>
    
</body>
</html>
<div class="row">
                <?php foreach ($allMenProducts as $allMenProduct) { ?>
                    <div class="col4-1">
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($allMenProduct['id']) ?>"><img src="public/img/<?= htmlspecialchars($allMenProduct['image']) ?>" alt=""></a>
                    <a href="index.php?action=detail&id=<?= htmlspecialchars($allMenProduct['id']) ?>"><h4 class="name"><?= htmlspecialchars($allMenProduct['detail']) ?></h4></a>
                        <p>Giá: <?= htmlspecialchars($allMenProduct['price']) ?></p>
                        <button>Mua ngay</button>
                        <p class="sohang">Hàng còn: <?= htmlspecialchars($allMenProduct['Quantity']) ?>cái</p>
                    </div>
                <?php } ?>
                
        </div>

<?php include 'layout/footer.php' ?>
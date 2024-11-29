<?php include "layout/header.php" ?>


    
<div class="row">
  <?php foreach ($iddmProducts as $iddmProduct) {?>
    <div class="col4">
        <a href="index.php?action=detail&id=<?= htmlspecialchars($iddmProduct['id']) ?>"><img src="public/img/<?= htmlspecialchars($iddmProduct['image']) ?>" alt=""></a>
        <a href="index.php?action=detail&id=<?= htmlspecialchars($iddmProduct['id']) ?>"><h4 class="name"><?= htmlspecialchars($iddmProduct['detail']) ?></h4></a>
        <p>Giá: <?= htmlspecialchars( number_format($iddmProduct['price'], 0, '', ',' ))?>đ</p>
        <button>Mua ngay</button>
        <p class="sohang">Hàng còn: <?= htmlspecialchars($iddmProduct['Quantity']) ?> cái</p>
    </div>
  <?php }?> 
</div>


<?php include 'layout/footer.php' ?>

</html>

<?php include 'header.php' ?>


    
<div class="row">
  <?php foreach ($iddmProducts as $iddmProduct) {?>
    <div class="col4">
        <img src="public/img/<?= htmlspecialchars($iddmProduct['image']) ?>" alt="">
        <h4 class="name"><?= htmlspecialchars($iddmProduct['title']) ?></h4>
        <p>Giá: <?= htmlspecialchars($iddmProduct['price']) ?>đ</p>
        <button>Mua ngay</button>
        <p class="sohang">Hàng còn: <?= htmlspecialchars($iddmProduct['Quantity']) ?> cái</p>
    </div>
  <?php }?> 
</div>


  <?php include 'footer.php' ?>

</html>

<?php include 'view/layout/sidebar.php' ?>      
        <div class="col-75">
        <div class="search">
            <h1>Sản phẩm</h1>
            <div class="search1">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </div>
        <a href="<?= $baseurl?>/addproduct"><button class="addcategory">Thêm sản phẩm</button></a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            
            <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['detail'] ?></td>
                    <td><img src="<?= $baseurl?>/public/img/<?= $product['image'] ?>" alt=""></td>
                    <td class="">
                        <a href="<?= $baseurl?>/editproduct/<?= $product['id'] ?>"><button class="edit">Sửa</button></a>
                        <a href="<?= $baseurl?>/deleteproduct/<?= $product['id'] ?>"><button class="delete">Xóa</button></a>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        </div>
    </main>
    <?php include 'view/layout/footer.php' ?>
</body>
</html>
<?php include 'view/layout/sidebar.php' ?>      
        <div class="col-75">
        <div class="search">
            <h1>Sản phẩm</h1>
            <div class="search1">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </div>
        <a href="<?= $baseurl?>/addcategory"><button class="addcategory">Thêm Danh mục</button></a>
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
            <?php foreach ($categories as $category) { ?>
                <tr>
                    <td><?php echo $category['id']?></td>
                    <td><?php echo $category['name']?></td>
                    <td><img src="<?= $baseurl?>/public/img/<?=$category['image'] ?>" alt=""></td>
                    <td class="">
                        <a href="<?=$baseurl?>/editcategory/<?=$category['id']?>"><button class="edit">Sửa</button></a>
                        <a href="<?=$baseurl?>/deletecategory/<?=$category['id']?>"><button class="delete">Xóa</button></a>
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
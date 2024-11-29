<?php include 'layout/sidebar.php' ?>      
        <div class="col-75">
        <div class="search">
            <h1>Sản phẩm</h1>
            <div class="search1">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </div>
        <button class="addcategory">Thêm danh mục</button>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên Danh Mục</th>
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
                        <button class="edit">Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <?php } ?>
                <!-- <tr>
                    <td>2</td>
                    <td>Dây chuyền bạc 
                        nam sợi nhỏ DCK0029</td>
                    <td><img src="public/img/h13.png" alt="Dây chuyền"></td>
                    <td>
                        <button class="edit">Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nhẫn nữ đính kim cương Moissanite 10 carat</td>
                    <td><img src="public/img/h21.png" alt="Kính mát"></td>
                    <td>
                        <button class="edit">Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nón Nữ - Essential Chic Cap</td>
                    <td><img src="public/img/h4.png" alt="Nón nữ"></td>
                    <td>
                        <button class="edit">Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ví nữ DWL0072-1</td>
                    <td><img src="public/img/h17.png" alt="Nón nữ"></td>
                    <td>
                        <button class="edit">Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr> -->
            </tbody>
        </table>
        </div>
    </main>
    <?php include 'layout/footer.php' ?>
</body>
</html>
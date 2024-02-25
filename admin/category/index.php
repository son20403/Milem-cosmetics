<a href="index.php?action=add_category" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    Thêm
                </a>
<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách loại hàng</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Ảnh loại hàng</th>
                <th>Tên loại hàng</th>
                <th>action</th>
            </tr>
        </thead>
        <?php foreach ($result as $each) { ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><img src="../assets/img/category/<?php echo $each['image_category'] ?>" alt="" srcset="" height="100"></td>
            <td><?php echo $each['name_category'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?php echo $each['id'] ?>" class="btn"
                    style="display: flex;align-content:center;justify-content: center;align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('<?php echo $each['name_category'] ?>')" href="index.php?action=delete&id=<?php echo $each['id'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
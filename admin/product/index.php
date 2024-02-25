<style>
.describe h1{
    font-size: 1rem;
}
</style>
<a href="index.php?action=add_product" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    Thêm
                </a>
<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách sản phẩm</h1>
    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>action</th>
            </tr>
        </thead>
        <?php foreach ($result as $each) { ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['name_product'] ?></td>
            <td><img src="../assets/img/product/<?php echo $each['image_product'] ?>" height="100" alt="" srcset=""></td>
            <td><?php echo number_format($each['price']) ?>đ</td>
            <td class="describe"><?php echo substr($each['describe'] ,0,110)?>...</td>
            <!-- <td><?php echo $each['category_id'] ?></td> -->
            <td><?php echo $each['name_loai'] ?></td>
            <td>
                <a href="index.php?action=edit_product&id=<?php echo $each['id'] ?>" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('<?php echo $each['name_product'] ?>')" href="index.php?action=delete_product&id=<?php echo $each['id'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
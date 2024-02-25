<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=update" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Sửa loại hàng</h1>
            <input required type="hidden" name="id" value="<?php echo $each['id'] ?>">
            <input required type="text" placeholder="Tên thư mục" name="name_category" class="box"
                value="<?php echo $each['name_category'] ?>">
            <input type="file" placeholder="Ảnh sản phẩm" name="image_category_new" class="box">
            <img src="../assets/img/category/<?php echo $each['image_category'] ?>" name="" height="100" alt=""> <br>
            <input required type="hidden" name="anh_sp_cu" value="<?php echo $each['image_category'] ?>">
            <input required type="submit" class="btn" name="add_product" value="Sửa loại hàng">
        </form>
    </div>

</div>
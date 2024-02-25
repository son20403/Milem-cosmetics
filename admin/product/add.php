<!-- <?php
        session_start();
        ?> -->
<div class="container">
    <div class="admin-product-form-container">
        <!-- <?php echo $user['id'] ?> -->
        <form action="index.php?action=store_product" method="post" enctype="multipart/form-data">
            <h1 style="font-size: 30px; text-align: center;">Thêm sản phẩm</h1>
            <input type="hidden" name="staff_id" value=" <?php echo $user['id'] ?>">
            <input required type="text" placeholder="Tên sản phẩm" name="name_product" class="box">
            <input required type="file" placeholder="Ảnh sản phẩm" name="image_product" class="box">
            <!-- <input type="text" placeholder="Mô tả" name="describe" class="box">     -->
            <textarea id="myTextarea" name="describe" class="box" placeholder="Mô tả"></textarea>
            <input required type="number" min="0" placeholder="Giá sản phẩm" name="price" class="box">
            <select name="category_id" id="" class="box" placeholder="Loại hàng">
                <?php foreach ($result as $each) : ?>
                <option value="<?php echo $each['id'] ?>">
                    <?php echo $each['name_category'] ?>
                </option>
                <?php endforeach ?>
            </select>

            <input type="submit" class="btn" name="add_product" value="Thêm sản phẩm">
        </form>
    </div>

</div>
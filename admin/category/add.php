<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=store" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Thêm loại hàng</h1>
          <input type="hidden" name="staff_id" value="<?php echo  $user['id'] ?>">
            <input required type="text" placeholder="Tên loại hàng" name="name_category" class="box">
            <input type="file" placeholder="Ảnh loại hàng" name="image_category" class="box">
      

            <input type="submit" class="btn" name="add_product" value="Thêm loại hàng">
        </form>
    </div>

</div>
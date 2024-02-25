<style>
    
</style>
<div class="container">
    <div class="admin-product-form-container">
        <form action="" method="POST">       
            <label class="admin_lable" for="">ID - Tên sản phẩm</label>
            <input disabled type="text" placeholder="Mã sản phẩm" name="product_id" class="box" value="<?php echo $data_comment['product_id'] ?> -- <?php echo $data_comment['name_product'] ?>">
            <label class="admin_lable" for="">ID - Tên khách hàng</label>
            <input disabled type="text" placeholder="Mã Khách hàng" name="customer_id" class="box"value="<?php echo $data_comment['customer_id'] ?> -- <?php echo $data_comment['full_name'] ?>">
            <label class="admin_lable" for="">Tiêu đề</label>
            <input type="text" placeholder="Tiêu đề" name="title_comment" class="box" value="<?php echo $data_comment['title_comment'] ?>" required>
            <label class="admin_lable" for="">Nội dung</label>
            <input type="text" placeholder="Nội dung" name="comment" class="box" value="<?php echo $data_comment['comment'] ?>"required>
            <input type="submit" class="btn" name="update_comment" value="Sửa Bình luận">
        </form>
    </div>

</div>
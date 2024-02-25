<div class="container">
    <div class="admin-product-form-container">
        <form action="" method="POST">        
            <select placeholder="Mã sản phẩm" name="product_id" type="text" class="box"required >
                <?php foreach($data_product as $value){ ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['name_product'] ?></option>
                <?php }?>
            </select>
            <select placeholder="Mã Khách hàng" name="customer_id" type="text" class="box"required >
                <?php foreach($data_customer as $value){ ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['full_name'] ?></option>
                <?php }?>
            </select>
            <input type="text" placeholder="Tiêu đề" name="title_comment" class="box" required>
            <input type="text" placeholder="Nội dung" name="comment" class="box" required>
            <input type="submit" class="btn" name="add_comment" value="Thêm Bình luận">
            <a href="index.php?page_layout=list_comment&controller=add_comment&action=list_comment" class="btn">Danh sách bình luận</a>
        </form>
    </div>

</div>
<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=update_customer" method="post" enctype="multipart/form-data">
            <h1 style="font-size: 30px; text-align: center;">Sửa khách hàng</h1>
            <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
            <input readonly type="text" placeholder="Tên đăng nhập" name="user_name" class="box" value="<?php echo $each['user_name']  ?>">
            <input required type="text" placeholder="Tên khách hàng" name="full_name" class="box" value="<?php echo $each['full_name'] ?>">
            <input required type="password" placeholder="Mật khẩu" name="password" class="box" value="<?php echo $each['password'] ?>">
            <input required type="text" placeholder="Email" name="email" class="box" value="<?php echo $each['email'] ?>">
            <input required type="text" placeholder="Địa chỉ" name="address" class="box" value="<?php echo $each['address'] ?>">
            <input required type="text" placeholder="Số điện thoại" name="phone" class="box" value="<?php echo $each['phone'] ?>">
            <input type="submit" class="btn" name="add_product" value="Sửa khách hàng">
        </form>
    </div>

</div>
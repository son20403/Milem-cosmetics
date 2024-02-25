<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=store_customer" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Thêm khách hàng</h1>
            <input required type="text" placeholder="Tên đăng nhập" name="user_name" class="box">
            <input required type="text" placeholder="Tên khách hàng" name="full_name" class="box">
            <input required type="password" placeholder="Mật Khẩu" name="password" class="box">
            <input required type="text" placeholder="Email" name="email" class="box">
            <input required type="text" placeholder="Địa chỉ" name="address" class="box">
            <input required type="text" placeholder="Số điện thoại" name="phone" class="box">
            <input type="submit" class="btn" name="add_product" value="Thêm khách hàng">
        </form>
    </div>

</div>
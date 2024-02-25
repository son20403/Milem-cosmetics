<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=update_staff" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Sửa nhân viên</h1>
            <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
            <input readonly type="text" placeholder="Tên đăng nhập" name="user_name" class="box"
                value="<?php echo $each['user_name']  ?>">
            <input required type="text" placeholder="Tên nhân viên" name="full_name" class="box"
                value="<?php echo $each['full_name'] ?>">
            <input required type="password" placeholder="Mật khẩu" name="password" class="box"
                value="<?php echo $each['password'] ?>">
            <input required type="text" placeholder="Địa chỉ" name="address" value="<?php echo $each['address'] ?>" class="box">
            <input required type="text" placeholder="Số điện thoại" name="phone" value="<?php echo $each['phone'] ?>" class="box">
            <input required type="text" placeholder="Email" name="email" value="<?php echo $each['email'] ?>" class="box">
            <input required type="text" placeholder="Chứng minh thư" name="card" value="<?php echo $each['card'] ?>" class="box">
            <input required type="date" placeholder="Ngày gia nhập" name="day_activated" value="<?php echo $each['day_activated'] ?>" class="box">
            <select required name="role" id="" class="box" placeholder="Chức vụ">
                <?php foreach ($data_roles as $value) : ?>
                <option value="<?php echo $value['id_role'] ?>">
                    <?php echo $value['name_role'] ?>
                </option>
                <?php endforeach ?>
            </select>
            <input type="submit" class="btn" name="add_product" value="Sửa nhân viên">
        </form>
    </div>

</div>
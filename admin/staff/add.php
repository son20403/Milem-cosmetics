<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=store_staff" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Thêm Nhân viên</h1>
            <input required type="text" placeholder="Tên đăng nhập" name="user_name" class="box">
            <input required type="text" placeholder="Tên nhân viên" name="full_name" class="box">
            <input required type="password" placeholder="Mật Khẩu" name="password" class="box">
            <input required type="text" placeholder="Địa chỉ" name="address" class="box">
            <input required type="text" placeholder="Số điện thoại" name="phone" class="box">
            <input required type="text" placeholder="Email" name="email" class="box">
            <input required type="text" placeholder="Chứng minh thư" name="card" class="box">
            <input required type="date" placeholder="Ngày gia nhập" name="day_activated" class="box">
            <!-- <input  type="text" placeholder="Chức vụ" name="role" class="box"> -->
            <select required name="role" id="" class="box" placeholder="Chức vụ">
                <?php foreach ($data_roles as $value) : ?>
                <option value="<?php echo $value['id_role'] ?>">
                    <?php echo $value['name_role'] ?>
                </option>
                <?php endforeach ?>
            </select>

            <input type="submit" class="btn" name="add_product" value="Thêm nhân viên">
        </form>
    </div>

</div>
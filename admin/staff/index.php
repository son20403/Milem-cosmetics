
<a href="index.php?action=add_staff" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    Thêm
                </a>
<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách nhân viên</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên đăng nhập</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Chứng minh thư</th>
                <th>Chức vụ</th>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($result as $each) { 
           
            ?>
            
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['user_name'] ?></td>
            <td><?php echo $each['full_name'] ?> </td>
            <td><?php echo $each['address'] ?> </td>
            <td><?php echo $each['phone'] ?> </td>
            <td><?php echo $each['email'] ?> </td>
            <td><?php echo $each['card'] ?> </td>
            <td><?php echo $each['name_role'] ?> </td>


            <td>
                <a href="index.php?action=edit_staff&id=<?php echo $each['id'] ?>" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('<?php echo $each['user_name'] ?>')" href="index.php?action=delete_staff&id=<?php echo $each['id'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
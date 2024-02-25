<a href="index.php?action=add_customer" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
    thêm
</a>
<div class="product-display">
    <h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách khách hàng</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã khách hàng</th>
                <th>Tên đăng nhập khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>action</th>
            </tr>
        </thead>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['user_name'] ?></td>
                <td><?php echo $each['full_name'] ?> </td>
                <td><?php echo $each['email'] ?></td>
                <td><?php echo $each['address'] ?></td>
                <td><?php echo $each['phone'] ?></td>

                <td>
                    <a href="index.php?action=edit_customer&id=<?php echo $each['id'] ?>" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                        <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                        edit
                    </a>
                    <a onclick="return del('<?php echo $each['user_name'] ?>')" href="index.php?action=delete_customer&id=<?php echo $each['id'] ?>" class="btn" style="display: flex;align-content:center; justify-content: center;align-items: center;">
                        <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                        delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
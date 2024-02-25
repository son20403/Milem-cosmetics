<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách bình luận</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã bình luận</th>
                <th>Mã sản phẩm</th>
                <th>Mã khách hàng</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Số điện thoại</th>
            </tr>
        </thead>
        <?php
        if($data_comment == 0){
            echo '<td></td><td></td><td></td><td>Không có bình luận nào</td><td><td></td></td><td></td>         
            ';
        }else{
        foreach ($data_comment as $value) { ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['product_id'] ?></td>
            <td><?php echo $value['customer_id'] ?> </td>
            <td><?php echo $value['title_comment'] ?> </td>
            <td><?php echo $value['comment'] ?></td>
            <td><?php echo $value['comment_date'] ?></td>
            <td>
                <a href="index.php?page_layout=update_comment&controller=add_comment&action=update_comment&id=<?php echo $value['id'] ?>" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('Comment này')" href="index.php?page_layout=update_comment&controller=add_comment&action=delete_comment&id=<?php echo $value['id'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php }} ?>
    </table>
</div>
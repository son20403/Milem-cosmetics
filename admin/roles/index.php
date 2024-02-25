<style>
    h1,
    p{
        font-size: 15px;
    }
</style>
<a href="index.php?page_layout=add_role&controller=roles&action=add_role" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    Thêm
                </a>
<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách vai trò</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Vai trò</th>

                <th></th>
            </tr>
        </thead>
        <?php foreach ($data_roles as $value) { ?>
        <tr>
            <td><?php echo $value['id_role'] ?></td>
            <td><?php echo $value['name_role'] ?></td>
            <td>
                <a href="index.php?page_layout=update_role&controller=roles&action=update_role&id=<?php echo $value['id_role'] ?>" class="btn" style="">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('<?php echo $value['name_role'] ?>')" href="index.php?page_layout=view_role&controller=roles&action=delete_role&id=<?php echo $value['id_role'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
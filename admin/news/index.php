<style>
    h1,
    p{
        font-size: 15px;
    }
</style>
<a href="index.php?page_layout=add_news&controller=news&action=add_news" class="btn" style="display: flex;align-content:center;justify-content: center;
    align-items: center;">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    Thêm
                </a>
<div class="product-display">
<h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách bài viêt</h1>

    <table class="product-display-table">
        <thead>
            <tr>
                <th>Mã</th>
                <th>Nhân viên</th>
                <th>Tiêu đề</th>
                <th>Ảnh</th>
                <th>Nội dung</th>
                <th>Ngày</th>
                <th>Lượt xem</th>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($data_news as $value) { ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['staff_id'] ?></td>
            <td><?php echo $value['title'] ?></td>
            <td><img src="../assets/img/news/<?php echo $value['image_new'] ?>" height="100" alt="" srcset=""></td>
            <td style="font-size: 14px;"><?php echo substr($value['content'],0,20) ?>...</td>
            <td><?php echo $value['news_date'] ?></td>
            <td><?php echo $value['view_news'] ?></td>
            <td>
                <a href="index.php?page_layout=update_news&controller=news&action=update_news&id=<?php echo $value['id'] ?>" class="btn" style="">
                    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                    edit
                </a>
                <a onclick="return del('<?php echo $value['title'] ?>')" href="index.php?page_layout=view_news&controller=news&action=delete_news&id=<?php echo $value['id'] ?>" class="btn"
                    style="display: flex;align-content:center; justify-content: center;align-items: center;">
                    <ion-icon name="trash-bin" style="font-size: 1rem;"></ion-icon>
                    delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
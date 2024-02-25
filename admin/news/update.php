<div class="container">
    <div class="admin-product-form-container">
        <form action="" method="POST" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">sửa bài viết</h1>
            <input type="hidden" name="staff_id" value=" <?php echo $user['id'] ?>">
            <input required type="text" placeholder="Tiêu đề" value="<?php echo $data_news['title'] ?>" name="title" class="box">
            <input type="file" placeholder="Ảnh sản phẩm" name="image_news_new" class="box">
            <img src="../assets/img/news/<?php echo $data_news['image_new'] ?>" name="" height="100" alt="">
            <input type="hidden" name="image_news_old" value="<?php echo $data_news['image_new'] ?>" >
            <input id="myTextarea" name="content" class="box" placeholder="Mô tả"
                value="<?php echo $data_news['content'] ?>"></input>
            <input type="submit" class="btn" name="update" value="Sửa">
        </form>
    </div>
</div>
<div class="container">
    <div class="admin-product-form-container">
        <form action="" method="POST" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Thêm Bài viết</h1>
            <input type="hidden" name="staff_id" value=" <?php echo $user['id'] ?>">
            <input required type="text" placeholder="Tiêu đề" name="title" class="box">
            <input required type="file" placeholder="Ảnh sản phẩm" name="image_news" class="box">
            <textarea id="myTextarea" name="content" class="box" placeholder="Mô tả"></textarea>
            <input type="submit" class="btn" name="add" value="Thêm tin tức">
        </form>
    </div>
</div>
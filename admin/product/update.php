<?php
$conn = mysqli_connect("localhost", "root", "", "du_an_1");
$sql = "SELECT * FROM `categorys`";
$category = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<div class="container">
    <div class="admin-product-form-container">
        <form action="index.php?action=update_product" method="post" enctype="multipart/form-data">
        <h1 style="font-size: 30px; text-align: center;">Sửa sản phẩm</h1>
            <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
            <input type="hidden" name="staff_id" value="<?php echo $each['staff_id'] ?>">
            <input required type="text" placeholder="Tên sản phẩm" name="name_product" class="box"
                value="<?php echo $each['name_product'] ?>">
            <input type="file" placeholder="Ảnh sản phẩm" name="image_product_new" class="box">
            <img src="../assets/img/product/<?php echo $each['image_product'] ?>" name="" height="100" alt=""> <br>
            <input type="hidden" name="anh_sp_cu" value="<?php echo $each['image_product'] ?>">

          
            <input id="myTextarea" name="describe" class="box" placeholder="Mô tả"
                value="<?php echo $each['describe'] ?>"></input>

            <input type="number" min="0" placeholder="Giá sản phẩm" name="price" class="box" value="<?php echo $each['price'] ?>">
            <select name="category_id" id="" class="box" placeholder="Loại hàng">
                <?php foreach ($category as $category) : ?>
                <option value="<?php echo $category['id'] ?>">
                    <?php echo $category['name_category'] ?>
                </option>
                <?php endforeach ?>
            </select>
            

            <input type="submit" class="btn" name="add_product" value="Cập nhật">
        </form>
    </div>

</div>
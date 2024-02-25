<div class="product-display">
    <table class="product-display-table">
    <h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách chi tiết đơn hàng</h1>

        <thead>
            <tr>
                <th>Mã hóa đơn</th>
                <th>Mã sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>
        <?php

        foreach ($data_cart_detail as $value) { ?>
        <tr>
            <td><?php echo $value['order_id'] ?></td>
            <td><?php echo $value['product_id'] ?> </td>
            <td><img width="100px" src="../assets/img/product/<?php echo $value['image_product'] ?>" alt=""></td>
            <td><?php echo $value['name_product'] ?> </td>
            <td><?php echo $value['quantity'] ?> </td>
            <td><?php echo number_format($value['price'] )?>đ</td>
        </tr>
        <?php } ?>
    </table>
</div>
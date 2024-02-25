<link rel="stylesheet" href="../assets/css/grid.css">
<link rel="stylesheet" href="../assets/css/base.css">
<link rel="stylesheet" href="../assets/font/fontawesome/css/all.min.css">
<style>
    .product-display {
        height: 300px;
        overflow-y: auto;
        margin: 0;
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .cart_view {}

    .cart_view-heading {
        width: 100%;
        padding: 30px 0;
        font-size: 2.5rem;
        font-weight: 400;
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .cart_view-left {
        margin-bottom: 50px;
        height: 300px;
        overflow-y: auto;
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .cart_view-left-list .thead {
        position: relative;
    }

    .cart_view-left-list .thead::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 1px;
        top: 100%;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .cart_view-left-list tbody {
        position: relative;
    }

    .cart_view-left-list .tbody::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 1px;
        top: 100%;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .cart_view-left-list .thead th:nth-child(1) {
        font-size: 1.3rem;
        font-weight: 400;

        width: 15%;
    }

    .cart_view-left-list .thead th:nth-child(2) {
        width: 60%;
    }

    .cart_view-left-list .thead th:nth-child(3) {
        font-size: 1.3rem;
        font-weight: 400;
        width: 20%;
    }

    .cart_view-left-list .thead th:nth-child(4) {
        width: 5%;
    }

    .cart_view-left-img {
        width: 100%;
    }

    .cart_view-left-list .tbody td {
        vertical-align: top;
        padding-top: 20px;
    }

    .cart_view-left-list .tbody td:nth-child(1) {
        padding-top: 10px;
    }

    .cart_view-left-list .tbody td:nth-child(3) {}

    .cart_view-left-list .tbody td:nth-child(4) i {
        color: var(--text-color)
    }

    .cart_view-left-img {
        width: 70%;
    }

    .cart_view-left-info {
        padding: 0 20px;
    }

    .cart_view-left-name {
        font-size: 1.6rem;
        line-height: 2rem;
        font-weight: 400;
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .cart_view-left-price {
        display: block;
        margin: 20px 0;
        font-size: 1.7rem;
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .cart_view-left-quantity form {
        display: flex;
        vertical-align: top;
    }

    .cart_view-left-input {
        width: 40%;
        min-width: 40px;
        padding: 0 5px;
    }

    .btn.cart_view-left-btn {
        width: 60%;
    }

    .cart_view-left-delete {
        cursor: pointer;
        text-align: center;
    }

    .cart_view-right {
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .cart_view-right-heading {
        font-size: 1.7rem;
        font-weight: 400;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding-bottom: 5px;
    }

    .cart_view-right-main {
        margin: 30px 0;
        display: flex;
        justify-content: space-between;
        font-size: 1.4rem;
    }

    .cart_view-right-total {
        display: flex;
        justify-content: space-between;
        font-size: 1.4rem;
        font-weight: 600;
    }

    .cart_view-right-total span {
        display: block;
        font-size: 1.2rem;
        font-weight: 400;
    }

    .btn.cart_view-right-btn {
        width: 100%;
        margin-top: 50px;
    }

    .products_detail-quantity1 {
        /* margin-top: 20px; */
        display: flex;
        /* text-align: center; */
    }

    .products_detail-quantity-input {
        -moz-appearance: textfield;
        text-align: center;
        font-size: 13px;
        border: none;
        background-color: #ffffff;
        color: #202030;
        padding: 10px 0;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .products_detail-quantity1 .products_detail-quantity-input {
        width: 54%;
        font-size: 1.3rem;
    }

    .products_detail-quantity-input::-webkit-outer-spin-button,
    .products_detail-quantity-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .products_detail-quantity-btn {
        color: var(--primary-color);
        background-color: #ffffff;
        border: none;
        font-size: 10px;
        cursor: pointer;
        text-align: center;
        display: block;
    }

    .products_detail-quantity1 .products_detail-quantity-btn {
        width: 36%;
    }

    .products_detail-quantity1 .products_detail-quantity-btn i {
        font-size: 1.5rem;
        text-align: center;
        vertical-align: middle;
    }

    #decrement {
        padding: 10px 5px 10px 10px;
        border-radius: 45px 0 0 45px;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    #increment {
        padding: 10px 10px 10px 5px;
        border-radius: 0 45px 45px 0;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .products_detail-quantity {
        display: flex;
    }

    .checkout {
        font-family: "Trirong", arial, helvetica, sans-serif;

    }

    .checkout_heading {
        font-size: 2.5rem;
        font-weight: 400;
        padding: 20px 0;
    }

    .checkout_form {
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 15px;
        position: relative;
    }

    .checkout_form-heading {
        font-size: 1.6rem;
        font-weight: 400;
        padding: 0 0 15px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .checkout_form-info {
        margin-top: 15px;
    }

    .checkout_form-left,
    .checkout_form-right {
        margin: 0 10px;
    }

    .checkout_form-left h1,
    .checkout_form-right h1 {
        font-family: "Trirong", arial, helvetica, sans-serif;

    }

    .checkout_form-left-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 50px 0;
    }

    .checkout_form-left-info a {
        font-size: 1.5rem;
        text-decoration: none;
        color: var(--primary-color);
        cursor: pointer;
    }

    .checkout_form-left-info label {
        width: 30%;
        font-size: 1.5rem;
    }

    .checkout_form-left-info input {
        height: 40px;
        flex: 1;
        padding: 5px 10px;
        outline: none;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 2px;
        font-size: 1.2rem;
    }

    .btn.checkout_btn {
        /* position: absolute; */
        flex: 1;

        /* width: 30%; */
        text-transform: uppercase;
        padding: 12px 10px;
    }

    .checkout_form-p {
        font-size: 1.4rem;
        font-weight: 600;
    }
</style>
<section>
    <h1 style="font-size: 30px; text-align: center;">Thêm đơn hàng</h1>
    <div class="grid wide">

        <h1 class="cart_view-heading">
            Sản phẩm
        </h1>
        <div class="product-display">
            <table class="product-display-table">

                <?php foreach ($data_products as $value) { ?>
                    <tr>
                        <td style="font-size: 1.3rem;"><?php echo $value['id'] ?></td>
                        <td style="font-size: 1.3rem;"><?php echo $value['name_product'] ?></td>
                        <td style="font-size: 1.3rem;"><img src="../assets/img/product/<?php echo $value['image_product'] ?>" height="50" alt="" srcset=""></td>
                        <td style="font-size: 1.3rem;"><?php echo number_format($value['price']) ?>đ</td>
                        <td style="font-size: 1.3rem;"><?php echo $value['name_category'] ?></td>
                        <td>
                            <form action="index.php?page_layout=add_cart&controller=cart&action=add_cart_admin&id=<?php echo $value['id'] ?>" method="POST" class="products_detail-form">
                                <div class="products_detail-form-button">
                                    <div class="form_label-number">
                                        <input type="hidden" name="action_cart" value="add">
                                        <input name="quantity" class="products_detail-input" type="hidden" value="1">
                                    </div>
                                    <div class="products_detail-form-button">
                                        <button name="add_cart" type="submit" class="btn btn--primary products_detail-fixed-btn-add add">THÊM VÀO GIỎ HÀNG</button>
                                        <!-- <button name="checkout" class="btn btn--primary products_detail-fixed-btn">MUA NGAY</button> -->
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>


        <div class="cart_view">
            <h1 class="cart_view-heading">
                Giỏ hàng
            </h1>
            <div class="row">
                <div class="col l-9 c-12 m-12">
                    <div class="cart_view-left">
                        <table class="cart_view-left-list">
                            <?php
                            if ($cart != []) { ?>
                                <thead class="thead">
                                    <th><?php echo totalItem($cart) ?> sản phẩm</th>
                                    <th></th>
                                    <th>Số lượng</th>
                                    <th></th>
                                </thead>

                                <?php foreach ($cart as $value) { ?>
                                    <tbody class="tbody">
                                        <td>
                                            <img src="../assets/img/product/<?php echo $value['image'] ?>" alt="" class="cart_view-left-img">
                                        </td>
                                        <td>
                                            <div class="cart_view-left-info">

                                                <a style="text-decoration: none; color: var(--text-color);" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">
                                                    <h1 class="cart_view-left-name">
                                                        <?php echo $value['name'] ?>
                                                    </h1>
                                                </a>
                                                <span class="cart_view-left-price">
                                                    <?php echo number_format($value['price']) ?>đ
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart_view-left-quantity">

                                                <div class="products_detail-quantity1">
                                                    <a href="index.php?page_layout=add_cart&controller=cart&action=add_cart_admin&action_cart=minus&id=<?php echo $value['id'] ?>" class="products_detail-quantity-btn" id="decrement"> <i class="fa-solid fa-minus"></i> </a>
                                                    <input class="products_detail-quantity-input" name="quantity" type="number" min="0" max="100" step="1" value="<?php echo $value['quantity'] ?>" id="my-input" readonly>
                                                    <a href="index.php?page_layout=add_cart&controller=cart&action=add_cart_admin&action_cart=plus&id=<?php echo $value['id'] ?>" class="products_detail-quantity-btn" type="submit" id="increment"> <i class="fa-solid fa-plus"></i> </a>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart_view-left-delete">
                                                <a href="index.php?page_layout=add_cart&controller=cart&action=add_cart_admin&action_cart=delete&id=<?php echo $value['id'] ?>"><i class="fa-solid fa-xmark"></i></a>
                                            </div>
                                        </td>
                                    </tbody>
                                <?php }
                            } else { ?>

                                <h1 style="text-align: center; font-weight: 600; margin: 50px 0;" class="cart_view-left-name">
                                    Không có sản phẩm
                                </h1>

                            <?php  } ?>

                        </table>
                    </div>
                </div>
                <div class="col l-3 c-12 m-12">
                    <div class="cart_view-right">
                        <h1 class="cart_view-right-heading">
                            THÔNG TIN ĐƠN HÀNG
                        </h1>
                        <div class="cart_view-right-main">
                            <p>Tạm tính:</p>
                            <p><?php echo number_format(totalPrice($cart)) ?>đ</p>
                        </div>
                        <div class="cart_view-right-total">
                            <p>Thành tiền: <span>(Tổng số tiền thanh toán):</span></p>
                            <p><?php echo number_format(totalPrice($cart)) ?>đ</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php if ($cart != []) { ?>

            <div class="checkout">
                <div class="checkout_form">
                    <h2 class="checkout_form-heading">
                        Địa chỉ giao hàng
                    </h2>
                    <form class="checkout_form-info" method="POST">
                        <div class="row">
                            <div class="col l-8 c-12 m-12">
                                <div class="checkout_form-left">
                                    <h1>Thông tin khách hàng:</h1>

                                    <div class="checkout_form-left-info">
                                        <label for="">Họ tên:</label>
                                        <input type="text" name="full_name" placeholder="Họ và tên" required>
                                    </div>
                                    <div class="checkout_form-left-info">
                                        <label for="">Email:</label>
                                        <input type="text" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="checkout_form-left-info">
                                        <label for="">Điện thoại:</label>
                                        <input type="text" name="phone" placeholder="Điện Thoại" required>
                                    </div>
                                    <div class="checkout_form-left-info">
                                        <label for="">Địa chỉ:</label>
                                        <input type="text" name="address" placeholder="Địa chỉ" required>
                                    </div>

                                </div>
                            </div>
                            <div class="col l-4 c-12 m-12">
                                <div class="checkout_form-right">
                                    <h1>Thông tin đơn hàng</h1>
                                    <div class="checkout_form-left-info">
                                        <label for="">Tổng số lượng:</label>
                                        <p class="checkout_form-p"><?php echo $total_item ?></p>
                                    </div>
                                    <div class="checkout_form-left-info">
                                        <label for="">Tổng tiền:</label>
                                        <p class="checkout_form-p"><?php echo number_format($total_price) ?>đ</p>
                                    </div>
                                    <div class="checkout_form-left-info">
                                        <button name="checkout" type="submit" class="btn btn--primary checkout_btn">Tiến hành thanh toán</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>

    </div>
</section>
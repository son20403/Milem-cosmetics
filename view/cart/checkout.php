<!-- products_detail -->
<!-- header_title -->
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <a href="./index.php" class="title1">Trang chủ</a>
                <span>/</span>
                <a href="index.php?page_layout=products&controller=products&action=view_all" class="title1">Sản phẩm</a>
                <span>/</span>
                <a href="index.php?page_layout=cart_view" class="title1">Giỏ hàng</a>
                <span>/</span>
                <p class="title1">Thanh toán</p>
            </div>
        </div>
    </div>
</div>
<!--end header_title -->

<!-- product_detail-cart-fixed -->

<!-- end product_detail-cart-fixed -->

<!-- products_detail-fixed  -->

<!-- end products_detail-fixed  -->

<!-- cart  -->
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="checkout">
                    <h1 class="checkout_heading">
                        Địa chỉ giao hàng
                    </h1>
                    <div class="checkout_form">
                        <h2 class="checkout_form-heading">
                            Địa chỉ giao hàng
                        </h2>
                        <form class="checkout_form-info" method="POST">
                            <div class="row">
                                <div class="col l-8 c-12 m-12">
                                    <div class="checkout_form-left">
                                        <h1>Thông tin khách hàng:</h1>
                                        <?php if ($data_customer != []) { ?>
                                            <div class="checkout_form-left-info">
                                                <label for="">Họ tên:</label>
                                                <input type="text" name="full_name" value="<?php echo $data_customer['full_name'] ?>" required>
                                            </div>
                                            <div class="checkout_form-left-info">
                                                <label for="">Email:</label>
                                                <input type="text" name="email" value="<?php echo $data_customer['email'] ?>" required>
                                            </div>
                                            <div class="checkout_form-left-info">
                                                <label for="">Điện thoại:</label>
                                                <input type="text" name="phone" value="<?php echo $data_customer['phone'] ?>" required>
                                            </div>
                                            <div class="checkout_form-left-info">
                                                <label for="">Địa chỉ:</label>
                                                <input type="text" name="address" value="<?php echo $data_customer['address'] ?>" required>
                                            </div>
                                        <?php } else { ?>
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
                                        <?php } ?>
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
            </div>
        </section>
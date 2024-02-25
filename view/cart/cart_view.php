<?php
$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
?>
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
                <p class="title1">Giỏ hàng</p>
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
                                                    <img src="./assets/img/product/<?php echo $value['image'] ?>" alt="" class="cart_view-left-img">
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
                                                                <a href="index.php?page_layout=cart_view&controller=add_cart&action=add_cart&action_cart=minus&id=<?php echo $value['id'] ?>" class="products_detail-quantity-btn" id="decrement" > <i class="fa-solid fa-minus"></i> </a>
                                                                <input class="products_detail-quantity-input" name="quantity" type="number" min="0" max="100" step="1" value="<?php echo $value['quantity'] ?>" id="my-input" readonly>
                                                                <a href="index.php?page_layout=cart_view&controller=add_cart&action=add_cart&action_cart=plus&id=<?php echo $value['id'] ?>" class="products_detail-quantity-btn" type="submit" id="increment"> <i class="fa-solid fa-plus"></i> </a>
                                                            </div>
                                                        
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="cart_view-left-delete">
                                                    <a href="index.php?page_layout=cart_view&controller=add_cart&action=add_cart&action_cart=delete&id=<?php echo $value['id'] ?>" ><i class="fa-solid fa-xmark"></i></a>                
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
                                <?php if($cart != []){ ?>
                                    <a href="index.php?page_layout=checkout&controller=add_cart&action=checkout" class="btn--primary btn cart_view-right-btn">
                                    Tiến Hàng đặt hàng
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
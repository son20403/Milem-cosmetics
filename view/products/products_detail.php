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
                <p class="title1"><?php echo $data['name_product'] ?></p>
            </div>
        </div>
    </div>
</div>
<!--end header_title -->

<!-- product_detail-cart-fixed -->
<!-- <div class="products_detail-cart">
    <div class="products_detail-cart-close">
        <button onclick="click" class="close_product_btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="cart_modal">
        <div class="cart_modal-section">
            <div class="row">
                <div class="col l-6 c-6 m-6">
                    <div class="cart_modal-section-left">
                        <span class="cart_modal-section-title">
                            1 sản phẩm mới đã được thêm vào giỏ hàng của bạn.
                        </span>
                        <div class="cart_modal-section-content">
                            <img class="cart_modal-section-img" src="./assets/img/product/<?php echo $data['image_product'] ?>" alt="">
                            <div class="cart_modal-section-info">
                                <h1 class="cart_modal-section-heading">
                                    <?php echo $data['name_product'] ?>
                                </h1>
                                <p class="cart_modal-section-price">
                                    <?php echo number_format($data['price']); ?>đ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-6 c-6 m-6">
                    <div class="cart_modal-section-right">
                        <div class="cart_modal-section-right-head">
                            <h1 class="cart_modal-section-head-heading">
                                Giỏ hàng
                            </h1>
                            <span class="cart_modal-section-head-span">
                                2 sản phẩm
                            </span>
                        </div>
                        <div class="cart_modal-section-main">
                            <p class="cart_modal-section-main-p">Tạm tính:</p>
                            <p class="cart_modal-section-main-p">650.000đ</p>
                        </div>
                        <div class="cart_modal-section-total">
                            <p class="cart_modal-section-total-text">Thành tiền:<span class="cart_modal-section-total-span">(Tổng số tiền thanh toán)</span></p>
                            <p class="cart_modal-section-total-price">650.000đ</p>
                        </div>
                        <div class="cart_modal-section-control">
                            <a href="#" class="cart_modal-section-control-link">Tiếp tục mua sắm</a>
                            <button class="btn btn--primary cart_modal-section-control-btn">Xem giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end product_detail-cart-fixed -->

<!-- products_detail-fixed  -->
<div class="grid products_detail-fixed" id="products_detail-fixed">
    <div class="products_detail-fixed-info grid wide">
        <div class="products_detail-fixed-header">
            <div class="products_detail-fixed-section">
                <img src="./assets/img/product/<?php echo $data['image_product'] ?>" alt="" class="products_detail-fixed-img">
                <div class="products_detail-fixed-header">
                    <h1 class="products_detail-fixed-heading">
                        <?php echo $data['name_product'] ?>
                        <p class="products_detail-fixed-heading-category">Thương hiệu:
                            <a href="index.php?page_layout=products&controller=products&action_product=products_category&action=view_category&id_category=<?php echo $data['category_id'] ?>" class="products_detail-fixed-heading-link"><?php echo $data['name_category'] ?></a>
                            <span class="products_detail-fixed-price"><?php echo number_format($data['price']); ?>đ</span>
                        </p>
                    </h1>
                </div>
            </div>
            <form action="index.php?page_layout=cart_view&controller=add_cart&action=add_cart&id=<?php echo $data['id'] ?>" method="POST" class="products_detail-form">
                <div class="products_detail-form-button">
                    <div class="form_label-number">
                        <input type="hidden" name="action_cart" value="add">
                        <input name="quantity" class="products_detail-input" type="hidden" value="1">
                    </div>
                    <div class="products_detail-form-button">
                        <button name="add_cart" type="submit" class="btn btn--primary products_detail-fixed-btn-add add">THÊM VÀO GIỎ HÀNG</button>
                        <button name="checkout" class="btn btn--primary products_detail-fixed-btn">MUA NGAY</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="products_detail-fixed-tab">
            <div class="row">
                <div class="products_detail-tab-item col l-2-4 c-6">
                    <a href="#" class="products_detail-tab-link">Sản phẩm
                    </a>
                </div>
                <div class="products_detail-tab-item col l-2-4 c-0">
                    <a href="#product_info-section" class="products_detail-tab-link">Mô tả
                        sản phẩm</a>
                </div>
                <div class="products_detail-tab-item col l-2-4  c-0">
                    <a href="#product_user-guide-section" class="products_detail-tab-link">Hướng dẫn sử dụng</a>
                </div>
                <div class="products_detail-tab-item col l-2-4  c-0">
                    <a href="#product_specification-section" class="products_detail-tab-link">Thành phần</a>
                </div>
                <div class="products_detail-tab-item col l-2-4 c-6">
                    <a href="#product_comment-section" class="products_detail-tab-link">Đánh
                        giá</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end products_detail-fixed  -->
<div class="app">
    <div class="magin_app">
        <section>
            <div class="detail_products">
                <div class="grid wide">
                    <div class="products_detail">
                        <div class="row">
                            <div class="col l-5 m-12 c-12">
                                <!-- SLIDER_IMAGE_PRODUCTS_DETAIL -->
                                <div class="silder_img-products">
                                    <ul class="slider_products-thumb">
                                        <li class="slider_products-list">
                                            <a href="./assets/img/product/thumb1.jpg" target="imgBox" class="slider_products-link">
                                                <img src="./assets/img/product/thumb1.jpg" alt="" class="slider_products-img">
                                            </a>
                                        </li>
                                        <li class="slider_products-list">
                                            <a href="./assets/img/product/thumb2.jpg" target="imgBox" class="slider_products-link">
                                                <img src="./assets/img/product/thumb2.jpg" alt="" class="slider_products-img">
                                            </a>
                                        </li>
                                        <li class="slider_products-list">
                                            <a href="./assets/img/product/thumb3.jpg" target="imgBox" class="slider_products-link">
                                                <img src="./assets/img/product/thumb3.jpg" alt="" class="slider_products-img">
                                            </a>
                                        </li>
                                        <li class="slider_products-list">
                                            <a href="./assets/img/product/thumb4.jpg" target="imgBox" class="slider_products-link">
                                                <img src="./assets/img/product/thumb4.jpg" alt="" class="slider_products-img">
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="imgBox"><img src="./assets/img/product/<?php echo $data['image_product'] ?>" alt="" class="slider_products-main"></div>
                                </div>
                            </div>

                            <div class="col l-6 l-o-1 c-12 m-12">
                                <!-- PRODUCTS_DETAIL -->
                                <div class="products_detail-info">
                                    <div class="products_detail-header">
                                        <h1 class="products_detail-heading">
                                            <?php echo $data['name_product'] ?>
                                        </h1>
                                        <p class="products_detail-heading-category">Thương hiệu
                                            <a href="index.php?page_layout=products&controller=products&action_product=products_category&action=view_category&id_category=<?php echo $data['category_id'] ?>" class="products_detail-heading-link"><?php echo $data['name_category'] ?></a>
                                        </p>
                                    </div>
                                    <span class="products_detail-price"><?php echo number_format($data['price']); ?>đ</span>
                                    <div class="products_detail-title">
                                        
                                        <?php echo $data['describe'] ?>
                                    </div>
                                    <form action="index.php?page_layout=cart_view&controller=add_cart&action=add_cart&id=<?php echo $data['id'] ?>" method="POST" class="products_detail-form">
                                        <div class="products_detail-form-button">
                                            <div class="form_label-number">
                                                <input type="hidden" name="action_cart" value="add">
                                                <label for="">Số lượng:</label>
                                                <!-- <input name="quantity" class="products_detail-input" type="number" value="1"> -->
                                                <div class="products_detail-quantity">
                                                    <button class="products_detail-quantity-btn" type="button" id="decrement" onclick="stepper(this)"> <i class="fa-solid fa-minus"></i> </button>
                                                    <input class="products_detail-quantity-input" name="quantity" type="number" min="0" max="100" step="1" value="1" id="my-input" readonly>
                                                    <button class="products_detail-quantity-btn" type="button" id="increment" onclick="stepper(this)"> <i class="fa-solid fa-plus"></i> </button>
                                                </div>
                                            </div>
                                            <button type="submit" name="add_cart" class="btn btn--primary products_detail-btn-add add">THÊM VÀO
                                                GIỎ HÀNG</button>
                                            <button type="submit" name="checkout" class="btn btn--primary products_detail-btn">MUA NGAY</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col l-12 m-12 c-12">
                                <div class="products_detail-content">
                                    <div class="products_detail-tab">
                                        <div class="row">
                                            <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                <a href="#product_info-section" class="products_detail-tab-link">Mô
                                                    tả
                                                    sản phẩm</a>
                                            </div>
                                            <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                <a href="#product_user-guide-section" class="products_detail-tab-link">Hướng dẫn sử dụng</a>
                                            </div>
                                            <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                <a href="#product_specification-section" class="products_detail-tab-link">Thành phần</a>
                                            </div>
                                            <div class="products_detail-tab-item col l-3 c-3 m-3">
                                                <a href="#product_comment-section" class="products_detail-tab-link">Đánh
                                                    giá</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_info-section"></div>
                                    <div class="product_detail-description">
                                        <div class="product_detail-description-wrapper">
                                            <h2 class="product_detail-information-title">Mô tả sản phẩm</h2>
                                            <div>
                                                <p>Dầu tẩy trang chứa hỗn hợp các loại dầu và thành phần làm sạch
                                                    được
                                                    tuyển chọn kĩ càng, không lưu lại lớp dầu trên da sau khi tẩy
                                                    trang
                                                </p>

                                                <p>- Dễ dàng hoà tan và tẩy sạch mọi lớp trang điểm dù cứng đầu nhất
                                                    như
                                                    mascara, son môi, chống nắng và bụi bẩn.</p>

                                                <p>- Thành phần chủ yếu là dầu Oliu chống oxy hoá và Vitamin E dưỡng
                                                    ẩm
                                                    cho da luôn mềm mại, mịn màng và tươi trẻ ngay sau khi sử dụng.
                                                </p>

                                                <p>- Làm sạch sâu lỗ chân lông, ngừa mụn ẩn, mụn đầu đen.</p>

                                                <p>- Không cay mắt, có thể sử dụng cho cả vùng mắt và môi.</p>

                                                <p>- Nhiều năm liền đạt giải nhất bảng xếp hạng Cosme của Nhật.</p>

                                                <p>- Không hương liệu, không chất bảo quản.</p>

                                                <p>Phù hợp với mọi loại da, không gây kích ứng.</p>

                                                <p>Sản xuất tại Nhật Bản</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_user-guide-section"></div>
                                    <div class="product_detail-description">
                                        <div class="product_detail-description-wrapper">
                                            <h2 class="product_detail-information-title">Hướng dẫn sử dụng</h2>
                                            <div>
                                                <ul>
                                                    <li>Giữ mặt khô ráo, tay rửa sạch và lau khô.</li>
                                                    <li>Cho một lượng dầu tầm 2-3 lần xịt ra tay, xoa đều rồi
                                                        massage
                                                        nhẹ nhàng trên mặt tầm 1-3 phút.</li>
                                                    <li>Nhúng ướt tay với 1 chút nước, rồi lại massage lên mặt để
                                                        dầu
                                                        chuyển dần sang màu trắng sữa (hay còn gọi là nhũ hoá), lặp
                                                        lại
                                                        động tác này 2-3 lần cho dầu nhũ hoá hết không còn nhờn trên
                                                        da.
                                                    </li>
                                                    <li>Rửa sạch với nước.</li>
                                                    <li>Dùng sữa rửa mặt sau đó.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_specification-section"></div>
                                    <div class="product_detail-description">
                                        <div class="product_detail-description-wrapper">
                                            <h2 class="product_detail-information-title">Thành phần sản phẩm</h2>
                                            <div>
                                                <p class="product_detail-information-p">Cetyl Ethylhexanoate,
                                                    Butylene
                                                    Glycol Diisononanoate, Polyglyceryl-10
                                                    Diisostearate, Caprylyl Caprylate / Caprate, Polyglyceryl-20
                                                    Octaisononanoate, Diphenylsiloxy Phenyl Trimethicone,
                                                    Polyglyceryl-20 Hexacaprylate, Limnanthes Alba (Meadowfoam) Seed
                                                    Oil, Dimethicone, Glyceryl Behenate/Eicosadioate, Phytosteryl /
                                                    Isostearyl / Cetyl / Stearyl / Behenyl Dimer Dilinoleate,
                                                    Tocopherol, Stearoyl Inulin, Dextrin Palmitate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_comment-section"></div>
                                    <div class="product_detail-description">
                                        <div class="product_detail-description-wrapper">
                                            <h2 class="product_detail-information-title">Góp ý - Bình luận</h2>

                                            <?php
                                            if (!isset($_SESSION['username'])) {
                                            ?>
                                                <form action="" method="POST" class="product_detail-comment-form">
                                                    <h2 class="product_detail-comment-form-heading">Xin vui lòng chia sẻ
                                                        đánh giá của bạn về sản phẩm này</h2>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Tiêu đề đánh giá (optional)</label>
                                                        <input name="title_comment" type="text" class="product_detail-comment-input-title" disabled>
                                                    </div>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Mô tả đánh giá</label>
                                                        <textarea name="content_comment" class="product_detail-comment-input-content" id="review-description" name="description" maxlength="400" spellcheck="true" disabled></textarea>
                                                    </div>
                                                    <a href="index.php?page_layout=signin&controller=users&action=signin" onclick="return loginNow('Vui lòng đăng nhập bình luận!');" class="btn btn--primary product_detail-comment-btn">
                                                        GỬI NHẬN XÉT
                                                    </a> <br>
                                                    <h2 class="product_detail-comment-form-heading">Vui lòng đăng nhập để sử dụng bình luận</h2>
                                                </form>
                                            <?php } else { ?>
                                                <form action="" method="POST" class="product_detail-comment-form">
                                                    <h2 class="product_detail-comment-form-heading">Xin vui lòng chia sẻ
                                                        đánh giá của bạn về sản phẩm này</h2>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Tiêu đề đánh giá (optional)</label>
                                                        <input name="title_comment" type="text" class="product_detail-comment-input-title" required>
                                                    </div>

                                                    <div class="product_detail-comment-form-title">
                                                        <label for="">Mô tả đánh giá</label>
                                                        <textarea name="content_comment" class="product_detail-comment-input-content" id="review-description" name="description" maxlength="400" spellcheck="true" required></textarea>
                                                    </div>
                                                    <button type="submit" name="comment" class="btn btn--primary product_detail-comment-btn">
                                                        GỬI NHẬN XÉT
                                                    </button>
                                                </form>
                                            <?php } ?>

                                            <div class="product_detail-comment">
                                                <h2 class="product_detail-comment-view-heading">Tất cả bình luận về
                                                    sản
                                                    phẩm</h2>
                                                <div class="product_detail-comment-view">
                                                    <div class="product_detail-comment-top row">
                                                        <div class="product_detail-comment-head col l-2 c-2 m-2">Tên</div>
                                                        <div class="product_detail-comment-head col l-8 c-8 m-8">Nội dung</div>
                                                        <div class="product_detail-comment-head col l-2 c-2 m-2">Thời gian</div>
                                                    </div>
                                                    <?php
                                                    if ($data_comment == 0) { ?>
                                                        <div class="product_detail-comment-bottom row">
                                                            <div class="product_detail-comment-content col l-2 c-2 m-2"></div>
                                                            <div style="text-align: center; font-size: 1.5rem;" class="product_detail-comment-content col l-8 c-8 m-8 comment_center">
                                                                Sản phẩm chưa có bình luận
                                                            </div>
                                                            <div class="product_detail-comment-content col l-2 c-2 m-2"></div>
                                                        </div>
                                                        <?php } else {
                                                        foreach ($data_comment as $value) { ?>
                                                            <div class="product_detail-comment-bottom row">
                                                                <div class="product_detail-comment-content col l-2 c-2 m-2"><?php echo $value['user_name'] ?></div>
                                                                <div class="product_detail-comment-content col l-8 c-8 m-8">
                                                                    <b><?php echo $value['title_comment'] ?></b> <br>
                                                                    <?php echo $value['comment'] ?>
                                                                </div>
                                                                <div class="product_detail-comment-content col l-2 c-2 m-2"><?php echo $value['comment_date'] ?></div>
                                                            </div>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid wide">
                    <!-- sản phẩm mới -->
                    <div class="section_new-products-header">
                        <h1 class="section_new-products-heading">Sản phẩm tương tự
                            <a href="index.php?page_layout=products_category&controller=products&action=view_category&id_category=<?php echo $data['category_id'] ?>" class="section_new-products-link">Xem thêm
                                <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                            </a>
                        </h1>
                        <div class="row">
                            <?php
                            foreach ($data_category as $value) {
                            ?>
                                <div class="slick__item col l-3 c-6 m-6 ">
                                    <div class="slick__item-content" title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">

                                            <img class="slick__item-img" class="" src="./assets/img/product/<?php echo $value['image_product'] ?>" alt="">
                                        </a>

                                        <h2 class="slick__item-heading">
                                            <a class="slick__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">
                                                <?php echo $value['name_product'] ?>
                                            </a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
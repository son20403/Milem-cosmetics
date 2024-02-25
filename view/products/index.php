<!-- products_detail -->

<!-- header_title -->
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <a href="./index.php" class="title1">Trang chủ</a>
                <span>/</span>
                <p class="title1">Sản phẩm</p>
            </div>
        </div>
    </div>
</div>
<!-- end products_detail-fixed  -->
<div class="app">
    <div class="magin_app">
        <section>
            <div class="products_all">
                <div class="grid wide">
                    <div class="products_banner">
                        <div class="row">
                            <div class="col l-6 c-12 m-12">
                                <img src="https://www.milem.vn/fileserver/images/file/fixsize-980x460/upload/sitemap/san-pham.png.webp?v=1.3" alt="" class="products_banner-img">
                            </div>
                            <div class="col l-6 c-12 m-12">
                                <div class="products_banner-content">
                                    <h1 class="products_banner-heading">Sản phẩm</h1>
                                    <p class="products_banner-heading-p active">Tại MILEM bạn sẽ được:</p>
                                    <p class="products_banner-heading-p">Chia sẻ kiến thức chăm sóc da theo từng độ
                                        tuổi.</p>
                                    <p class="products_banner-heading-p">Tư vấn quy trình dưỡng da phù hợp theo nhu
                                        cầu.</p>
                                    <p class="products_banner-heading-p">Cam kết hàng chính hãng đã qua kiểm nghiệm
                                        và chọn lọc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products_section">
                        <div class="row">
                            <div class="col l-2 c-12">
                                <div class="products_list-left">
                                    <div class="products_list-left-click ">
                                        <div class="products_list-left-header js_left-click1">
                                            <a class="products_list-left-link">Sản phẩm</a>
                                            <i class="products_list-left-i js_left-rotate1 fa-solid fa-caret-right"></i>
                                        </div>
                                        <div class="js_left-remove1">
                                        </div>
                                    </div>
                                    <div class="products_list-left-body js_left-show1">
                                        <ul class="products_list-left-list">
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=son dưỡng" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Son dưỡng môi
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=tẩy trang" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Tẩy trang
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=kem dưỡng" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Kem dưỡng
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=kem dưỡng mắt" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Kem dưỡng mắt
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=rửa mặt" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Nước rửa mặt
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=nước hoa" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Nước hoa
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=kem dưỡng da" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Kem dưỡng da
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_keys&action=keys&keys=dầu tẩy trang" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Dầu tẩy trang
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="products_list-left">
                                    <div class="products_list-left-click">
                                        <div class="products_list-left-header js_left-click2">
                                            <a class="products_list-left-link">Thương hiệu</a>
                                            <i class="products_list-left-i js_left-rotate2 fa-solid fa-caret-right"></i>
                                        </div>
                                        <div class="js_left-remove2">
                                        </div>
                                    </div>
                                    <div class="products_list-left-body js_left-show2">
                                        <ul class="products_list-left-list">
                                            <?php if (empty($dataAll_category)) { ?>
                                                <li class="products_list-left-item">
                                                    <a href="#" class="products_list-left-item-link">
                                                        <i class="fa-solid fa-chevron-right"></i> không tồn tại thương hiệu
                                                    </a>
                                                </li>

                                                <?php   } else {
                                                foreach ($dataAll_category as $value) {
                                                ?>
                                                    <li class="products_list-left-item">
                                                        <a href="index.php?page_layout=products&controller=products&action_product=products_category&action=view_category&id_category=<?php echo $value['id'] ?>" class="products_list-left-item-link">
                                                            <i class="fa-solid fa-chevron-right"></i> <?php echo $value['name_category'] ?>
                                                        </a>
                                                    </li>
                                            <?php  }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="products_list-left">
                                    <div class="products_list-left-click">
                                        <div class="products_list-left-header js_left-click3">
                                            <a class="products_list-left-link">Mức giá</a>
                                            <i class="products_list-left-i js_left-rotate3 fa-solid fa-caret-right"></i>
                                        </div>
                                        <div class="js_left-remove3">
                                        </div>
                                    </div>
                                    <div class="products_list-left-body js_left-show3">
                                        <ul class="products_list-left-list">
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=0&price2=200000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Dưới 200.000đ
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=200000&price2=400000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> từ 200.000đ đến 400.000đ
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=400000&price2=600000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> từ 400.000đ đến 600.000đ
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=600000&price2=800000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> từ 600.000đ đến 800.000đ
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=800000&price2=1000000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> từ 800.000đ đến 1.000.000đ
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=price&price1=1000000&price2=10000000" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> trên 1.000.000đ
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="products_list-left">
                                    <div class="products_list-left-click">
                                        <div class="products_list-left-header js_left-click4">
                                            <a class="products_list-left-link">Vấn đề quan tâm</a>
                                            <i class="products_list-left-i js_left-rotate4 fa-solid fa-caret-right"></i>
                                        </div>
                                        <div class="js_left-remove4">
                                        </div>
                                    </div>
                                    <div class="products_list-left-body js_left-show4">
                                        <ul class="products_list-left-list">
                                            <li class="products_list-left-item">
                                                <a href="#" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Chăm sóc da
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="#" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Trang điểm
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="#" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Dưỡng thể
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="#" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Thức uống đẹp da
                                                </a>
                                            </li>
                                            <li class="products_list-left-item">
                                                <a href="#" class="products_list-left-item-link">
                                                    <i class="fa-solid fa-chevron-right"></i> Chăm sóc tóc
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col l-10 c-12">
                                

                                <?php
                                if (isset($_GET['action_product'])) {
                                    $action_product = $_GET['action_product'];
                                } else {
                                    $action_product = '';
                                }

                                switch ($action_product) {
                                    case '':
                                        include "./view/products/products.php";
                                        break;
                                    case 'products':
                                        include "./view/products/products.php";
                                        break;
                                    case 'products_search':
                                        include "./view/products/products_search.php";
                                        break;
                                    case 'products_category':
                                        include "./view/products/products_category.php";
                                        break;
                                    case 'products_keys':
                                        include "./view/products/products_keys.php";
                                        break;
                                    case 'products_type':
                                        include "./view/products/products_type.php";
                                        break;
                                    case 'category':
                                        include "./view/products/category.php";
                                        break;
                                    default: {
                                            include "./view/products/products.php";
                                            break;
                                        }
                                }


                                ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
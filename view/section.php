<div class="app">
    <div class="magin_app">
        <!-- slider -->
        <!--  -->
        <!-- sectiom -->
        <div class="grid wide">
            <section class="section">
                <!-- sản phẩm mới -->
                <div class="section_new-products-header">
                    <h1 class="section_new-products-heading">Sản phẩm mới
                        <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=top" class="section_new-products-link">Xem thêm
                            <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                        </a>
                    </h1>
                    <div class="slick">
                        <div class="slick__slider row">
                            <?php
                            foreach ($data_top as $value) {
                            ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content" title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">
                                            <img class="slick__item-img" class="" src="./assets/img/product/<?php echo $value['image_product'] ?>" alt="">
                                        </a>

                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- banner -->
                <div class="section_new-products-banner">
                    <div class="row">
                        <div class="col l-6 c-12 m-12">
                            <img src="https://www.milem.vn/fileserver/images/file/fixsize-540x200/upload/addon/adbanner/W5bcd5575532e8/milemskiiantiaging.png?v=1.3" alt="" class="section_new-products-banner-img">
                        </div>
                        <div class="col l-6 c-12 m-12">
                            <img src="https://www.milem.vn/fileserver/images/file/fixsize-540x200/upload/addon/adbanner/W5bcd55e27baa0/en-elixir20anshomepagedesktopeng-(1).png?v=1.3" alt="" class="section_new-products-banner-img">
                        </div>
                    </div>
                </div>
                <!-- Sản phẩm bán chạy -->
                <div class="section_new-products-header">
                    <h1 class="section_new-products-heading">Top sản phẩm được xem nhiều nhất
                        <a href="index.php?page_layout=products&controller=products&action_product=products_type&action=type&type=view" class="section_new-products-link">Xem thêm
                            <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                        </a>
                    </h1>
                    <div class="slick">
                        <div class="slick__slider row">
                            <?php
                            foreach ($data_view as $value) {
                            ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content" title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">
                                            <img class="slick__item-img" class="" src="./assets/img/product/<?php echo $value['image_product'] ?>" alt="">
                                        </a>
                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>

                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Sản phẩm -->
                <div class="section_new-products-header">
                    <h1 class="section_new-products-heading">Sản phẩm gợi ý
                        <a href="index.php?page_layout=products&controller=products&action_product=products&action=view_all" class="section_new-products-link">Xem thêm
                            <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                        </a>
                    </h1>
                    <div class="slick">
                        <div class="slick__slider row">
                            <?php
                            foreach ($data as $value) {
                            ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content" title="<?php echo $value['name_product'] ?>">
                                        <a class="silck__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>">
                                            <img class="slick__item-img" class="" src="./assets/img/product/<?php echo $value['image_product'] ?>" alt="">
                                        </a>
                                        <h2 class="slick__item-heading"><a class="slick__item-link" href="index.php?page_layout=products_detail&controller=products_detail&action=view&id=<?php echo $value['id'] ?>"> <?php echo $value['name_product'] ?></a>
                                        </h2>
                                        <span class="slick__item-price"><?php echo number_format($value['price']) ?>đ</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- Thương hiệu -->
                <div class="section_new-products-header">
                    <h1 class="section_new-products-heading">Thương hiệu
                        <a href="index.php?page_layout=products&controller=products&action_product=category&action=category" class="section_new-products-link">Xem thêm
                            <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                        </a>
                    </h1>
                    <div class="slick">
                        <div class="slick__slider row">
                            <?php
                            foreach ($data1 as $value) {
                            ?>
                                <div class="slick__item col l-3">
                                    <div class="slick__item-content" title="<?php echo $value['name_category'] ?>">
                                        <a class="silck__item-link" href="index.php?page_layout=products&controller=products&action_product=products_category&action=view_category&id_category=<?php echo $value['id'] ?>">
                                            <img class="slick__item-img-brand" class="" src="./assets/img/category/<?php echo $value['image_category'] ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--tin tức -->
                <div class="section_news">
                    <h1 class="section_new-products-heading">Giới thiệu và tin tức
                        <a href="index.php?page_layout=news&controller=news&action=view_news" class="section_new-products-link">Xem thêm
                            <i class="section_new-products-i fa-solid fa-chevron-right"></i>
                        </a>
                    </h1>
                    <div class="row">
                        <div class="col l-6 c-12 m-12">
                            <iframe class="section_news-video" width="560" height="315" src="https://www.youtube.com/embed/MPqiIX7fiec" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col l-6 c-12 m-12">
                            <div class="row">
                                <?php foreach($data_news as $value){ ?>
                                <div class="col l-6 c-12 m-12">
                                    <div class="section_news-block break">
                                        <div class="section_news-block-img">
                                            <a href="index.php?page_layout=news_detail&controller=news&action=news_detail&id=<?php echo $value['id'] ?>" class="section_news-block-link">
                                                <img src="./assets/img/news/<?php echo $value['image_new'] ?>" alt="" class="section_news-img">
                                            </a>
                                        </div>
                                        <h1 class="section_news-heading">
                                            <a class="section_news-block-link" href="">
                                            <?php echo $value['title'] ?>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
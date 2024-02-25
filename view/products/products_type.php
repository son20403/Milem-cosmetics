<style>
    .active{
        color: var(--primary-color);
    }
</style>
<?php include './view/products/navbar.php';
 ?>
<div class="row">
<?php
if ($data_products == 0) { ?>
        <!-- PRODUCTS -->
        <div class="slick__item col l-12 c-12 m-12 ">
            <h1 class="text_tb">Không tồn tại sản phẩm</h1>
        </div>
        <?php    } else {
        foreach ($data_products as $value) {
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
    <div class="products_content-bottom">
        <div class="row">
            <div class="col l-12">
                <ul class="products_content-bottom-list">
                    <li class="products_content-bottom-item">
                        <a href="#" class="products_content-bottom-link i"><i class="fa-solid fa-chevron-left"></i></a>
                    </li>
                    <li class="products_content-bottom-item">
                        <a href="#" class="products_content-bottom-link">1</a>
                    </li>
                    <li class="products_content-bottom-item">
                        <a href="#" class="products_content-bottom-link">2</a>
                    </li>
                    <li class="products_content-bottom-item">
                        <a href="#" class="products_content-bottom-link">3</a>
                    </li>
                    <li class="products_content-bottom-item">
                        <a href="#" class="products_content-bottom-link i"><i class="fa-solid fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php  } ?>
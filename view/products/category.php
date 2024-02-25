
<?php
include './view/products/navbar.php';
if ($dataAll_category != []) { ?>
    <div class="row">
        <!-- PRODUCTS -->

        <?php
        foreach ($dataAll_category as $value) {
        ?>
            <div class="slick__item col l-3 c-6 m-6 ">
                <div class="slick__item-content" title="<?php echo $value['name_category'] ?>">
                    <a class="silck__item-link" href="index.php?page_layout=products&controller=products&action_product=products_category&action=view_category&id_category=<?php echo $value['id'] ?>">
                        <img class="slick__item-img-brand" class="" src="./assets/img/category/<?php echo $value['image_category'] ?>" alt="">
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
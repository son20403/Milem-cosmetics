<style>
    .news a {
        text-decoration: none;
    }

    .news .heading {
        text-align: center;
        padding: 30px 0;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 400;
        font-size: 2.5rem;
    }

    .news_block {
        margin-bottom: 20px;
    }

    .news_head {
        overflow: hidden;
        height: 200px;
    }

    .news_image {
        width: 100%;
        /* height: 100%; */
        transition: all 0.3s ease-in-out;
    }

    .news_block:hover .news_image {
        transform: scale(1.1);
    }

    .news_section {
        background-color: var(--primary-color);
        color: var(--white-color);
        text-align: center;
        padding: 30px 20px;
    }

    .news_date {
        padding: 10px 0;
        font-size: 1.3rem;
        font-weight: 300;
    }

    .news_heading {
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 300;
        font-size: 1.6rem;
        line-height: 2rem;
        padding: 10px 0;
        height: 50px;
    }
</style>
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <p class="title1">Trang chủ</p>
                <span>/</span>
                <p class="title1">Tin tức</p>
            </div>
        </div>
    </div>
</div>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="news">
                    <h1 class="heading">Sự kiện Milem</h1>
                    <div class="row">
                        <?php foreach($data_news as $value){ ?>
                        <div class="col l-3 m-6 c-6">
                            <div class="news_block">
                                <a href="index.php?page_layout=news_detail&controller=news&action=news_detail&id=<?php echo $value['id'] ?>">
                                    <div class="news_head">
                                        <img class="news_image" src="./assets/img/news/<?php echo $value['image_new'] ?>" alt="">
                                    </div>
                                    <div class="news_section">
                                        <p class="news_date">
                                        <?php echo $value['news_date'] ?>
                                        </p>
                                        <h1 class="news_heading">
                                        <?php echo $value['title'] ?>
                                        </h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
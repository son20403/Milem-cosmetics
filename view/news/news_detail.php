<style>
    a {
        text-decoration: none;
        color: var(--text_color);
    }

    .news_detail {}

    .news_detail-left {}

    .news_detail-heading {
        text-align: center;
        padding: 30px 0;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 400;
        font-size: 2.5rem;
    }

    .news_detail-date {
        text-align: center;
        font-size: 1.3rem;
        font-weight: 300;
    }

    .news_detail-content {
        font-size: 1.5rem;
        line-height: 2.5rem;
        color: var(--text-color);
    }

    .news_detail-content h1 {
        margin: 20px 0;
        color: red;
        text-align: center;
    }

    .news_detail-content strong {
        color: red;
    }

    .news_detail-content p {
        margin: 40px 0;
    }

    .news_detail-image {
        width: 100%;
    }

    .news_detail-right {}

    .news_detail-right .news_detail-right-head {
        text-align: center;
        padding: 30px 0;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 500;
        font-size: 2rem;
    }

    .news_detail-right .news_detail-list {}

    .news_detail-right .news_detail-item {
        border-top: 1px solid rgba(0, 0, 0, 0.3);
        border-bottom: 1px solid rgba(0, 0, 0, 0.3);
        padding: 10px 0;
        margin: 20px 0;
        list-style: none;
    }

    .news_detail-right .news_detail-link {
        display: flex;
    }

    .news_detail-right .news_detail-image {
        width: 30%;
        /* height: 90px; */
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .news_detail-right .news_detail-heading {
        display: flex;
        flex: 1;
        align-items: center;
        justify-content: center;
    }

    .news_detail-right .news_detail-heading h1 {
        font-weight: 400;
        font-size: 1.3rem;
        line-height: 2rem;
    }
</style>
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <a href="./index.php" class="title1">Trang chủ</a>
                <span>/</span>
                <p class="title1"><a href="index.php?page_layout=news&controller=news&action=view_news">Tin tức</a></p>
                <span>/</span>
                <p class="title1"><?php echo $data_news['title'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="news_detail">
                    <div class="row">
                        <div class="col l-8 m-12 c-12">
                            <div class="news_detail-left">
                                <h1 class="news_detail-heading">
                                    <?php echo $data_news['title'] ?>
                                </h1>
                                <p class="news_detail-date"><?php echo $data_news['news_date'] ?></p>
                                <img src="./assets/img/news/<?php echo $data_news['image_new'] ?>" alt="" class="news_detail-image">
                                <div class="news_detail-content">
                                    <?php echo $data_news['content'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 l-o-1 m-12 c-12">
                            <div class="news_detail-right">
                                <h1 class="news_detail-right-head">
                                    Bài viết khác
                                </h1>
                                <ul class="news_detail-list">
                                    <?php foreach ($data_news_list as $value) { ?>
                                        <li class="news_detail-item">
                                            <a href="index.php?page_layout=news_detail&controller=news&action=news_detail&id=<?php echo $value['id'] ?>" class="news_detail-link">
                                                <img src="./assets/img/news/<?php echo $value['image_new'] ?>" alt="" class="news_detail-image">
                                                <div class="news_detail-heading">
                                                    <h1><?php echo $value['title'] ?></h1>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
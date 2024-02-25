<style>
    .contact {}

    .contact__slide {
        display: flex;
        height: 100%;
        align-items: center;
    }

    .contact__info {}

    .contact__heading {
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 300;
        font-size: 3rem;
        margin: 40px 0;
    }

    .contact__list {}

    .contact__item {
        display: flex;
        list-style: none;
        margin: 15px 0;
        color: var(--text-color);
        font-size: 1.4rem;
    }

    .contact .i {
        width: 30px;
    }
</style>
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <a href="./index.php" class="title1">Trang chủ</a>
                <span>/</span>
                <p class="title1">Liên hệ</p>
            </div>
        </div>
    </div>
</div>
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="contact">
                    <div class="row">
                        <div class="col l-6">
                            <div class="contact__slide">
                                <?php include "./view/slider.php"; ?>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="contact__info">
                                <h1 class="contact__heading">MILEM | Your Skincare Friend</h1>
                                <ul class="contact__list">
                                    <li class="contact__item">
                                        <i class="i fa-solid fa-location-dot"></i>
                                        <p>
                                            04 Nguyễn Thúy - Hòa Minh - Liên Chiểu - Đà Nẵng
                                        </p>
                                    </li>
                                    <li class="contact__item">
                                        <i class="i fa-solid fa-phone"></i>
                                        <p>
                                            032 884 6202
                                        </p>

                                    </li>
                                    <li class="contact__item">
                                        <i class="i fa-solid fa-clock"></i>
                                        <p>
                                            Giờ hoạt động
                                        </p>
                                    </li>
                                    <li class="contact__item">
                                        <div class="i"></div>
                                        <p>
                                            Thứ 2 - Thứ 7: 10:00 - 21:30
                                        </p>
                                    </li>
                                    <li class="contact__item">
                                        <div class="i"></div>
                                        <p>
                                            Chủ Nhật: 12:30 - 21:30
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.6996354128864!2d108.15986811465156!3d16.081069088873615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218c348347aa7%3A0xa80ff0d95fb8ef89!2zMDQgTmd1eeG7hW4gVGjDunksIEhvw6AgTWluaCwgTGnDqm4gQ2hp4buDdSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1669715149173!5m2!1svi!2s" width="600" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
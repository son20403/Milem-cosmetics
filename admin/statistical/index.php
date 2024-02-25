<link rel="stylesheet" href="../assets/css/grid.css">
<link rel="stylesheet" href="../assets/css/base.css">
<link rel="stylesheet" href="../assets/font/fontawesome/css/all.min.css">

<style>
    .statistical {
        /* background-color: aqua; */
        padding: 10px;
        margin: 10px;
        border-radius: 2px;
    }

    .statistical.red{
        background-color: red;
        color: white;
        position: relative;
    }
    .statistical__chart{
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: rgba(0,0,0,0.2);
        right: 0;
        text-align: center;
    }
    .statistical__link{
        display: block;
        color: white;
        font-size: 1.3rem;
        padding: 5px 0;
        font-weight: 500;
    }
    .statistical__link:hover{
        color: aqua;
    }
    .statistical.aqua{
        background-color:aqua ;
        
    }
    .statistical.cornflowerblue{
        background-color: cornflowerblue;
        color: white;
    }
    .statistical.gold{
        background-color: gold;
        color: white;
    }
    .statistical.greenyellow{
        background-color: greenyellow;
    }
    .statistical.brown{
        background-color: brown;
        color: white;
    }
    .statistical.darkmagenta{
        background-color: darkmagenta;
        color: white;
    }
    .statistical.deeppink{
        background-color: deeppink;
        color: white;
    }


    .statistical__quantity p {
        font-size: 5rem;
    }

    .statistical_name {}

    .statistical_name p {
        font-size: 2.5rem;
        font-family: "Trirong", arial, helvetica, sans-serif;
    }

    .statistical__icon {}

    .statistical__icon i {
        font-size: 13rem;
        opacity: 0.6;
    }
</style>

<section>
    <div class="grid wide">
        <div class="row">
            <div class="col l-4">
                <div class="statistical red">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_products ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Sản phẩm</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-brands fa-product-hunt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="statistical__chart">
                        <a href="index.php?page_layout=chart&controller=statistical&action=chart" class="statistical__link">Xem biểu đồ</a>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical aqua">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_categorys ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Loại hàng</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-recycle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical cornflowerblue">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_customers ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Khách hàng</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-user-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical gold">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_staff ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Nhân viên</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical greenyellow">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_comments ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Bình luận</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-comment"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical brown">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_orders ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Đơn hàng</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical darkmagenta">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_news ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Bài viết</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l-4">
                <div class="statistical deeppink">
                    <div class="statistical__block">
                        <div class="row">
                            <div class="col l-6">
                                <div class="statistical__quantity">
                                    <p><?php echo $data_roles ?></p>
                                </div>
                                <div class="statistical_name">
                                    <p>Vai trò</p>
                                </div>
                            </div>
                            <div class="col l-6">
                                <div class="statistical__icon">
                                <i class="fa-sharp fa-solid fa-list"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
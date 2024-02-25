<?php if(empty($_SESSION['username'])){
    header('location: ./index.php');
} ?>
<!-- products_detail -->
<!-- header_title -->
<div class="sticky_product_title">
    <div class="grid header_product-title">
        <div class="grid wide">
            <div class="header_product">
                <a href="./index.php" class="title1">Trang chủ</a>
                <span>/</span>
                <p class="title1">Xem đơn hàng</p>
            </div>
        </div>
    </div>
</div>
<!--end header_title -->

<!-- product_detail-cart-fixed -->

<!-- end product_detail-cart-fixed -->

<!-- products_detail-fixed  -->

<!-- end products_detail-fixed  -->
<style>
    .bill{
    font-family: "Trirong", arial, helvetica, clean, sans-serif;
    }

    .bill_form ,.bill_form_detail{
        padding:0 20px;
        border: 1px solid rgba(0,0,0,0.1);
        margin: 10px 0 90px 0;  
    }
    .bill_form_detail{
        margin: 10px 0;
    }
    .bill_heading{
        color: red;
    }
    .bill_info{
        display: flex;
        margin: 30px 0;
        align-items: center;
    }
    .bill_info.bill_btn{
        width: 100%;
        justify-content: center;
        background-color: antiquewhite;
        padding: 10px 0;
    }
    .bill_info label{
        width: 40%;
        font-size: 1.5rem;
        display: block;
        font-weight: 600;
        color: var(--primary-color);
    }
    .bill_info input,.bill_info p{
        flex: 1;
        outline: none;
    }
    .bill_info input{
        padding: 10px;
        border: 1px solid rgba(0,0,0,0.1);
    }
    .bill_info p{
        font-size: 1.4rem;
        /* text-align: center; */
        font-weight: 400;
    font-family: "roboto", arial, helvetica, clean, sans-serif;

    }
    .bill_btn p{
        text-align: center;
        font-family: "Trirong", arial, helvetica, clean, sans-serif;
        font-weight: 500;
    }
    .btn{
        margin: 0 10px;
    }
    .noti p{
        font-weight: 600;
    }
    .id p{
        color: red;
        font-weight: 700;
    }

</style>
<!-- cart  -->
<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="bill">
                    <h1 class="cart_view-heading">
                        Đơn hàng
                    </h1>
                    <?php 
                    if($data_cart > 0){
                   
                    foreach($data_cart as $value){ ?>
                    <div class="row">
                        <div class="col l-6">
                            <h1 class="bill_heading" >Đơn hàng <?php echo $value['id'] ?></h1>
                            <form class="bill_form" method="POST">
                                <div class="bill_info id">
                                    <label for="">Mã đơn hàng:</label>
                                    <p><?php echo $value['id'] ?></p>
                                    <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                </div>
                                <div class="bill_info noti">
                                    <label for="">Tình trạng:</label>
                                    <p>
                                        <?php echo  $value['status'] ?>
                                    </p>
                                    
                                </div>
                                
                                <div class="bill_info total_money">
                                    <label for="">Tổng tiền:</label>
                                    <p><?php echo number_format($value['total_money']) ?>đ</p>
                                </div>
                                <div class="bill_info total_item">
                                    <label for="">Tổng số lượng sản phẩm:</label>
                                    <p><?php echo $value['total_item'] ?></p>
                                </div>
                                <div class="bill_info total_item">
                                    <label for="">Ngày mua:</label>
                                    <p><?php echo $value['buying_date'] ?></p>
                                </div>
                                
                                <div class="bill_info name">
                                    <label for="">Tên khách hàng:</label>
                                    <input required <?php if($value['status'] != "Chưa xử lý"){ echo 'readonly style="border: none;"';} ?> name="full_name" type="text" value="<?php echo $value['full_name'] ?>">
                                </div>
                                <div class="bill_info address">
                                    <label for="">Địa chỉ:</label>
                                    <input required <?php if($value['status'] != "Chưa xử lý"){ echo 'readonly style="border: none;"';} ?> name="address" type="text" value="<?php echo $value['address'] ?>">
                                </div>
                                <div class="bill_info phone">
                                    <label for="">Số điện thoại:</label>
                                    <input required <?php if($value['status'] != "Chưa xử lý"){ echo 'readonly style="border: none;"';} ?> name="phone" type="text" value="<?php echo $value['phone'] ?>">
                                </div>
                                <div class="bill_info email">
                                    <label for="">Email:</label>
                                    <input required <?php if($value['status'] != "Chưa xử lý"){ echo 'readonly style="border: none;"';} ?> name="email" type="text" value="<?php echo $value['email'] ?>">
                                </div>
                                <?php if($value['status'] == "Chưa xử lý"){ ?>
                                <div class="bill_info bill_btn">
                                    <button onclick="return loginNow('Bạn muốn cập nhật đơn hàng <?php echo $value['id'] ?> không?')" name="update_bill" class="btn btn--primary">Cập nhật</button>
                                    <a onclick="return del('đơn hàng <?php echo $value['id'] ?>')" href="index.php?page_layout=bill&controller=add_cart&action=delete_cart&id=<?php echo $value['id'] ?>" class="btn btn--primary">Hủy đơn hàng</a>
                                </div>
                                 <?php }else{?>
                                    <div class="bill_info bill_btn">
                                    <p><?php echo $value['status'] ?></p>
                                    <?php if($value['status'] == "Đang giao, đã thanh toán"){ ?>
                                    <a onclick="return tb('đơn hàng <?php echo $value['id'] ?>')" href="index.php?page_layout=bill&controller=add_cart&action=update_cart&id=<?php echo $value['id'] ?>" class="btn btn--primary">Đã Nhận được hàng</a>
                                    <?php }?>
                                </div>
                                    <?php }?>
                            </form>
                        </div>
                        <div class="col l-6">
                        <h1 class="bill_heading">Chi tiết đơn hàng <?php echo $value['id'] ?></h1>
                        <?php 
                            $table_order_detail = 'order_details';
                            $order_id = $value['id'];
                            $data_cart_detail = getIDCart($table_order_detail,$order_id,$conn);

                            foreach($data_cart_detail as $value_detail){
                        ?>
                        <div class="bill_form_detail">
                            
                            <div class="bill_info id">
                                    <label for="">Mã đơn hàng:</label>
                                    <p><?php echo $value['id'] ?></p>
                                </div>
                            <div class="bill_info name_product">
                                <label for="">Tên sản phẩm:</label>
                                <p><?php echo $value_detail['name_product'] ?></p>
                            </div>
                            <div class="bill_info image_product">
                                <label for="">Ảnh sản phẩm:</label>
                                <img width="50px" src="./assets/img/product/<?php echo $value_detail['image_product'] ?>" alt="">
                            </div>
                            <div class="bill_info price">
                                <label for="">Giá sản phẩm:</label>
                                <p><?php echo number_format($value_detail['price']) ?>đ</p>
                            </div>
                            <div class="bill_info quantity">
                                <label for="">Số lượng:</label>
                                <p><?php echo $value_detail['quantity'] ?></p>
                            </div>
                        </div>
                        <?php }?>
                        </div>
                    </div>
                    <?php } 
                    }else{?>
                        <h1 class="text_tb">Không có hóa đơn nào</h1>
                        <?php }?>
                </div>
            </div>
        </section>
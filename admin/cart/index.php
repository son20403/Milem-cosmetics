<style>
    * {
        font-size: 13px;
    }

    td b {
        color: red;
    }
</style>
<a href="index.php?page_layout=add_cart&controller=cart&action=add_cart_admin" class="btn" style="display: flex;font-size: 10px;align-content:center;justify-content: center;
        align-items: center;">
    <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
    Thêm
</a>

<div class="product-display">
    <table style="font-size: 10px;" class="product-display-table">
        <h1 style="font-size: 30px; text-align: center; margin-bottom: 30px;">Danh sách đơn hàng</h1>

        <thead>
            <tr>
                <th>Mã hóa đơn</th>
                <!-- <th>ID Nhân viên xử lý</th> -->
                <th>ID Khách hàng</th>
                <th>Họ và tên</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Tổng Sản phẩm</th>
                <th>Ngày đặt hàng</th>
                <th>Tình trạng</th>
                <th></th>
            </tr>
        </thead>
        <?php
        if ($data_order == 0) {
            echo '<td></td><td></td><td></td><td></td><td></td><td>Không có đơn hàng nào</td><td></td><td></td><td></td><td></td><td></td>         
            ';
        } else {
            foreach ($data_order as $value) {


        ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>

                    <td><?php
                        if ($value['customer_id'] == '') {
                            echo "<p style='color:red'> Không có </p>";
                        } else {
                            echo $value['customer_id'];
                        }

                        ?> </td>
                    <td><?php echo $value['full_name'] ?> </td>
                    <td><?php echo $value['address'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['phone'] ?></td>
                    <td><?php echo number_format($value['total_money']) ?>đ</td>
                    <td><?php echo $value['total_item'] ?></td>
                    <td><?php echo $value['buying_date'] ?></td>

                    <td>
                        <?php  if($value['status'] != "Đã giao hàng thành công"){?>
                        <b><?php echo $value['status'] ?></b>
                        <?php }else{?>
                            <b style="color: green;"><?php echo $value['status'] ?></b>

                       <?php } ?>
                                <?php
                                if($value['status'] != "Đã giao hàng thành công"){?>
                        <form action="index.php?" method="GET">
                            <input type="hidden" name="page_layout" value="cart_detail">
                            <input type="hidden" name="controller" value="cart">
                            <input type="hidden" name="action" value="get_bill">

                            <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            <select required style="width: 130px; margin: 10px 0;" name="status" placeholder="Chức vụ">
                            <option>               
                            </option>
                            
                              <?php  if ($value['status'] == "Chưa xử lý") { ?>
                                    <option>
                                        Chưa xử lý
                                    </option>
                                <?php  } ?>
                                <option>
                                    Đã xử lý
                                </option>
                                <option>
                                    Đang giao hàng
                                </option>
                                <option>
                                    Đã giao hàng thành công
                                </option>
                                }
                            </select>
                            <button type="submit" onclick="return tb('<?php echo $value['id'] ?>')" name="get_bill" class="" style=" font-weight: 600; padding: 5px; border: 1px solid;">
                                
                                cập nhật
                                
                            </button>
                        </form>
                        <?php }?>
                    </td>
                    <td>
                        
                        
                        <a href="index.php?page_layout=cart_detail&controller=cart&action=cart_detail&id=<?php echo $value['id'] ?>" class="btn" style="display: flex;width: 130px;font-size: 10px;align-content:center;justify-content: center;
        align-items: center; background-color: darkgreen;">
                                <ion-icon name="create" style="font-size: 1rem;"></ion-icon>
                                Chi tiết
                                </a>
                                
                        <?php
                        if ($user['role'] == 1 && $value['status'] == "Chưa xử lý") { ?>
                            <a onclick="return del('đơn hàng <?php echo $value['id'] ?>')" href="index.php?page_layout=cart_detail&controller=cart&action=delete_cart_admin&id=<?php echo $value['id'] ?>" class="btn" style="display: flex;width: 130px;font-size: 10px;align-content:center;justify-content: center;
            align-items: center;">

                                Hủy đơn
                            </a>
                <?php
                        }
                    }
                }
                 ?>

                    </td>
                </tr>
    </table>
</div>
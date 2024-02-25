<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    # code...
}
switch ($action) {
    case '':
       
        include '../model/product.php';
        $result = product_index();
        include './thumb.php';
        break;
    case 'add_category':
        // include './model/category.php';
        include '../model/staff.php';
        $result = staff_index();
        include './category/add.php';
        break;
    case 'list_category':
        include '../model/category.php';
        $result = category_index();
        include './category/index.php';
        break;
    case 'store':
        $staff_id = $_POST['staff_id'];
        $name_category = $_POST['name_category'];
        $image_category = $_FILES['image_category'];
        $errors = array();
        $file_name = $_FILES['image_category']['name'];
        $file_size = $_FILES['image_category']['size'];
        $file_tmp = $_FILES['image_category']['tmp_name'];
        $file_type = $_FILES['image_category']['type'];
        $file_parts = explode('.', $_FILES['image_category']['name']);
        $file_ext = strtolower(end($file_parts));
        $expensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $image_category = $_FILES['image_category']['name'];
        $target = "../assets/img/category/" . basename($image_category);

        move_uploaded_file($_FILES['image_category']['tmp_name'], $target);
        include '../model/category.php';
        category_store($staff_id, $name_category, $image_category);
        ?>
        <script>
            location.href = 'index.php?action=list_category';
        </script>
        <?php
        break;
    case 'edit':
        $id = $_GET['id'];
        include '../model/category.php';
        $each = category_edit($id);
        include 'category/update.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name_category = $_POST['name_category'];
        $image_category = $_FILES['image_category_new'];
        if ($image_category['size'] > 0) {
            $errors = array();
            $file_name = $_FILES['image_category_new']['name'];
            $file_size = $_FILES['image_category_new']['size'];
            $file_tmp = $_FILES['image_category_new']['tmp_name'];
            $file_type = $_FILES['image_category_new']['type'];
            $file_parts = explode('.', $_FILES['image_category_new']['name']);
            $file_ext = strtolower(end($file_parts));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
            }
            if ($file_size > 2097152) {
                $errors[] = 'Kích thước file không được lớn hơn 2MB';
            }
            $image_category = $_FILES['image_category_new']['name'];
            $target = "../assets/img/category/" . basename($image_category);
    
            move_uploaded_file($_FILES['image_category_new']['tmp_name'], $target);
        } else {
            $image_category = $_POST['anh_sp_cu'];
        }
        include '../model/category.php';
        $result = category_update($id, $name_category, $image_category);
        ?>
        <script>
            location.href = 'index.php?action=list_category';
        </script>
        <?php
        break;
    case 'delete':
        $id = $_GET['id'];
        include '../model/category.php';
        if(category_delete($id)){
            echo '<script language="javascript">alert("Xóa thành công!");</script>';
        }else{
            echo '<script language="javascript">alert("Xóa không thành công, Loại hàng đang tồn tại sản phẩm!");</script>';
        };
        ?>
        <script>
            location.href = 'index.php?action=list_category';
        </script>
        <?php
        break;
        //+====================================================== controller sản phẩm
    case 'add_product':
        include '../model/category.php';
        $result = category_index();
        include './product/add.php';
        break;
    case 'store_product':
        $staff_id = $_POST['staff_id'];
        $name_product = $_POST['name_product'];
        $image_product = $_FILES['image_product'];

        $errors = array();
        $file_name = $_FILES['image_product']['name'];
        $file_size = $_FILES['image_product']['size'];
        $file_tmp = $_FILES['image_product']['tmp_name'];
        $file_type = $_FILES['image_product']['type'];
        $file_parts = explode('.', $_FILES['image_product']['name']);
        $file_ext = strtolower(end($file_parts));
        $expensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $image_product = $_FILES['image_product']['name'];
        $target = "../assets/img/product/" . basename($image_product);

        move_uploaded_file($_FILES['image_product']['tmp_name'], $target);
        $describe = $_POST['describe'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        include '../model/product.php';
        // product_store($name_product, $path_file, $describe, $price, $category_id);
        product_store($staff_id, $name_product, $image_product, $describe, $price, $category_id);
        ?>
        <script>
            location.href = 'index.php?action=list_product';
        </script>
        <?php
        break;
    case 'list_product':
        include '../model/product.php';
        $result = product_index();
        include './product/index.php';
        break;
    case 'delete_product':
        $id = $_GET['id'];
        include '../model/product.php';
        ;
        if(product_delete($id)){
            echo '<script language="javascript">alert("Xóa thành công!");</script>';
        }else{
            echo '<script language="javascript">alert("Xóa không thành công, sản phẩm có dữ liệu bên bản khác!");</script>';
        };
        ?>
        <script>
            location.href = 'index.php?action=list_product';
        </script>
        <?php
        break;
    case 'edit_product':
        $id = $_GET['id'];
        include '../model/product.php';
        $each = product_edit($id);
        include 'product/update.php';
        break;
    case 'update_product':
        $id = $_POST['id'];
        $staff_id = $_POST['staff_id'];
        $name_product = $_POST['name_product'];
        $image_product = $_FILES['image_product_new'];
        if ($image_product['size'] > 0) {
            $errors = array();
            $file_name = $_FILES['image_product_new']['name'];
            $file_size = $_FILES['image_product_new']['size'];
            $file_tmp = $_FILES['image_product_new']['tmp_name'];
            $file_type = $_FILES['image_product_new']['type'];
            $file_parts = explode('.', $_FILES['image_product_new']['name']);
            $file_ext = strtolower(end($file_parts));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
            }
            if ($file_size > 2097152) {
                $errors[] = 'Kích thước file không được lớn hơn 2MB';
            }
            $image_product = $_FILES['image_product_new']['name'];
            $target = "../assets/img/product/" . basename($image_product);
    
            move_uploaded_file($_FILES['image_product_new']['tmp_name'], $target);
        } else {
            $image_product = $_POST['anh_sp_cu'];
        }
        $describe = $_POST['describe'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        include '../model/product.php';
        product_update($id, $staff_id, $name_product, $image_product, $describe, $price, $category_id);
        ?>
        <script>
            location.href = 'index.php?action=list_product';
        </script>
        <?php
        break;
        // =================================customers===========================

    case 'add_customer':
        // include './model/customer.php';
        include '../model/staff.php';
        $staff = staff_index();
        include './customer/add.php';
        break;
    case 'store_customer':
        $user_name = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        


        $table = 'customers';
        $conn = connect();
        $data = checkSignup($table, $conn, $user_name);

        if ($data == 0) {
            include '../model/customer.php';
            customer_store($user_name, $full_name, $hash_password, $email, $address, $phone);
            ?>
            <script>
                location.href = 'index.php?action=list_customer';
            </script>
            <?php
        } else {
            echo '<script language="javascript">alert("tài khoản đã được đăng ký!");</script>';
            ?>
            <script>
                location.href = 'index.php?action=add_customer';
            </script>
            <?php
        }
        break;
    case 'list_customer':
        include '../model/customer.php';
        $result = customer_index();
        include './customer/index.php';
        break;
    case 'edit_customer':
        $id = $_GET['id'];
        include '../model/customer.php';
        $each = customer_edit($id);
        include './customer/update.php';
        break;
    case 'update_customer':
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
     
        include '../model/customer.php';
        customer_update($id, $user_name, $full_name, $hash_password, $email, $address, $phone);
        ?>
        <script>
            location.href = 'index.php?action=list_customer';
        </script>
        <?php
       
        break;
    case 'delete_customer':
        $id = $_GET['id'];
        include '../model/customer.php';
        
        if(customer_delete($id)){
            echo '<script language="javascript">alert("Xóa thành công!");</script>';
        }else{
            echo '<script language="javascript">alert("Xóa không thành công, khách hàng này đang tồn tại ở bản khác!");</script>';
        };
        ?>
        <script>
            location.href = 'index.php?action=list_customer';
        </script>
        <?php
        break;
        //*********************************************************************************************** */
    case 'add_staff':
        include '../model/staff.php';
        $table_roles = 'roles';
        $data_roles = getAllData($table_roles,$conn);
        include './staff/add.php';
        break;
    case 'store_staff':
        $user_name = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $card = $_POST['card'];
        $day_activated = $_POST['day_activated'];
        $role = $_POST['role'];

        $table = 'staffs';
        $conn = connect();
        $data = checkSignup($table, $conn, $user_name);     

        if ($data == 0) {
            include '../model/staff.php';
            staff_store($user_name, $full_name, $hash_password,$address,$phone,$email,$card,$day_activated,$role,$role);
            ?>
            <script>
                location.href = 'index.php?action=list_staff';
            </script>
            <?php
        } else {
            echo '<script language="javascript">alert("tài khoản đã được đăng ký!");</script>';
            ?>
            <script>
                location.href = 'index.php?action=add_staff';
            </script>
            <?php
        }
   
        break;
    case 'list_staff':
        // staff_all();
        include '../model/staff.php';
        $result = staff_index();
        include './staff/index.php';
        break;
    case 'edit_staff':
        $id = $_GET['id'];
        $table_roles = 'roles';
        $data_roles = getAllData($table_roles,$conn);
        include '../model/staff.php';
        
        $each = staff_edit($id);
        include './staff/update.php';
        break;
    case 'update_staff':
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $full_name = $_POST['full_name'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $card = $_POST['card'];
        $day_activated = $_POST['day_activated'];
        $role = $_POST['role'];

        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        
        include '../model/staff.php';
        staff_update($id, $user_name, $full_name, $hash_password,$address,$phone,$email,$card,$day_activated,$role);
            ?>
            <script>
                location.href = 'index.php?action=list_staff';
            </script>
            <?php
               
        break;
    case 'delete_staff':
        $id = $_GET['id'];
        include '../model/staff.php';
        
       
        if( staff_delete($id)){
            echo '<script language="javascript">alert("Xóa thành công!");</script>';
        }else{
            echo '<script language="javascript">alert("Xóa không thành công, Nhân viên đang tồn tại ở bản khác!");</script>';
        };
        ?>
        <script>
            location.href = 'index.php?action=list_staff';
        </script>
        <?php
        break;
    default:
        // echo "<script> alert ('nhập sai rồi')</script>";
        ?>
        <script>
            location.href = 'index.php?action=list_product';
        </script>
        <?php
}
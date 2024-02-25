<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'add_cart': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            // session_destroy();
            // die();

            if (isset($_GET["action_cart"])) {
                $action_cart = $_GET["action_cart"];
            } else if (isset($_POST['action_cart'])) {
                $action_cart = $_POST['action_cart'];
            } else {
                $action_cart = "";
            }


            $table_product = 'products';
            $data_product_id = getDataProductID($table_product, $id, $conn);


            $quantity = (isset($_POST['quantity'])) ? $_POST['quantity'] : 1;

            if ($quantity <= 0) {
                $quantity = 1;
            }
            $item = [
                'id' => $data_product_id['id'],
                'name' => $data_product_id['name_product'],
                'image' => $data_product_id['image_product'],
                'price' => $data_product_id['price'],
                'quantity' => $quantity
            ];


            if ($action_cart == 'add') {
                if (isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['quantity'] += $quantity;
                } else {
                    $_SESSION['cart'][$id] = $item;
                }
            }
            if ($action_cart == 'minus') {
                if ($_SESSION['cart'][$id]['quantity'] > 1) {
                    $_SESSION['cart'][$id]['quantity']--;
                } else {
                    unset($_SESSION['cart'][$id]);
                }
                header("location: " . $_SERVER['HTTP_REFERER']);
            }
            if ($action_cart == 'plus') {
                $_SESSION['cart'][$id]['quantity']++;
                header("location: " . $_SERVER['HTTP_REFERER']);
            }

            if ($action_cart == 'delete') {
                unset($_SESSION['cart'][$id]);
                header("location: " . $_SERVER['HTTP_REFERER']);
            }

            if (isset($_POST['checkout'])) {
                $_SESSION['cart'][$id] = $item;
?>
                <script>
                    location.href = 'index.php?page_layout=checkout&controller=add_cart&action=checkout';
                </script>
                <?php
            }
            break;
        }

    case 'checkout': {
            if (empty($_SESSION['cart'])) {
                header('location: ./index.php');
            }
            if (isset($_SESSION['username'])) {
                $table_customer = 'customers';
                $username = $_SESSION['username'];
                $data_customer = getDataUser($table_customer, $username, $conn);

                $id_customer = $data_customer['id'];
            } else {
                $data_customer = [];
            }

            $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
            $total_item = totalItem($cart);
            $total_price = totalPrice($cart);
            $buying_date = date("Y-m-d");

            if (isset($_POST['checkout'])) {
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $status = "Chưa xử lý";

                if (isset($_SESSION['username'])) {
                    $query = insertCart($id_customer, $total_price, $total_item, $buying_date, $full_name, $address, $phone, $email, $status, $conn);
                } else {
                    $query = insertCartNotCustomer($total_price, $total_item, $buying_date, $full_name, $address, $phone, $email, $status, $conn);
                }

                if ($query) {
                    $order_id = mysqli_insert_id($conn);
                    foreach ($cart as $value) {
                        $product_id = $value['id'];
                        $quantity = $value['quantity'];
                        $price = $value['price'];

                        $queryCart = insertCartDetail($order_id, $product_id, $quantity, $price, $conn);
                    }
                    if ($queryCart) {
                        echo '<script language="javascript">alert("Đặt hàng thành công!");</script>';
                        unset($_SESSION['cart']);
                ?>
                        <script>
                            location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
                        </script>
                    <?php

                    } else {
                        echo '<script language="javascript">alert("Đặt hàng thất bại!");</script>';
                    }
                }
            }
            break;
        }
    case 'view_bill': {
            if (empty($_SESSION['username'])) {
                header('location: ./index.php');
            } else {
                $username = $_SESSION['username'];
            }
            $table_customer = 'customers';
            $table_order = 'orders';
            $data_customer = getDataUser($table_customer, $username, $conn);
            $customer_id = $data_customer['id'];

            $data_cart = getCustomerCart($table_order, $customer_id, $conn);

            if (isset($_POST['update_bill'])) {
                $full_name = $_POST['full_name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $id = $_POST['id'];

                if (updateCartCustomer($table_order, $full_name, $address, $phone, $email, $id, $conn)) {
                    echo '<script language="javascript">alert("Đã cập nhật đơn hàng");</script>';
                    ?>
                    <script>
                        location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Cập nhật thất bại");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
                    </script>
                <?php
                };
            }
            break;
        }
    case 'delete_cart': {
            $table_order = 'orders';
            $id_order = $_GET['id'];
            if (deleteData($table_order, $id_order, $conn)) {
                echo '<script language="javascript">alert("Đã xóa đơn hàng");</script>';
                ?>
                <script>
                    location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
                </script>
            <?php
            } else {
                echo '<script language="javascript">alert("Xóa thất bại");</script>';
            ?>
                <script>
                    location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
                </script>
            <?php
            };
        }
    case 'list_cart': {

            $table_order = 'orders';
            $data_order = getAllCart($table_order, $conn);
            break;
        }
    case 'get_bill': {
        if(isset($_GET['get_bill'])){
            $id_order = $_GET['id'];
            $table_order = 'orders';
            $status = $_GET['status'];
            $staff_id = $user['id'];
            
            if (updateCart($table_order,$staff_id,$status,$id_order,$conn)) {
                echo '<script language="javascript">alert("Bạn đã cập nhật đơn hàng!");</script>';
            ?>
                <script>
                    location.href = 'index.php?page_layout=list_cart&controller=cart&action=list_cart';
                </script>
                <?php
            }else{
                echo '<script language="javascript">alert("Lỗi!");</script>';

            };
        }
        break;
        }
    case 'update_cart':{
        $table_order = 'orders';
        $id_order = $_GET['id'];
        $status = "Đã giao thành công";
        ;
        if (updateCartCus($table_order,$status,$id_order,$conn)) {
            echo '<script language="javascript">alert("Bạn đã cập nhật đơn hàng!");</script>';
        ?>
            <script>
                location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
            </script>
            <?php
        }else{
            echo '<script language="javascript">alert("Lỗi!");</script>';
            ?>
            <script>
                location.href = 'index.php?page_layout=bill&controller=add_cart&action=view_bill';
            </script>
            <?php
        };
    }
    case 'cart_detail': {
            $id_order = $_GET['id'];
            $table_order_detail = 'order_details';
            $data_cart_detail = getIDCart($table_order_detail, $id_order, $conn);
            break;
        }

    case 'add_cart_admin': {
            $table_product = 'products';
            $data_products = getAllProduct($table_product, $conn);

            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // session_destroy();
                // die();

                if (isset($_GET["action_cart"])) {
                    $action_cart = $_GET["action_cart"];
                } else if (isset($_POST['action_cart'])) {
                    $action_cart = $_POST['action_cart'];
                } else {
                    $action_cart = "";
                }


                $data_product_id = getDataProductID($table_product, $id, $conn);


                $quantity = (isset($_POST['quantity'])) ? $_POST['quantity'] : 1;

                if ($quantity <= 0) {
                    $quantity = 1;
                }
                $item = [
                    'id' => $data_product_id['id'],
                    'name' => $data_product_id['name_product'],
                    'image' => $data_product_id['image_product'],
                    'price' => $data_product_id['price'],
                    'quantity' => $quantity
                ];


                if ($action_cart == 'add') {
                    if (isset($_SESSION['cart_admin'][$id])) {
                        $_SESSION['cart_admin'][$id]['quantity'] += $quantity;
                    } else {
                        $_SESSION['cart_admin'][$id] = $item;
                    }
                }
                if ($action_cart == 'minus') {
                    if ($_SESSION['cart_admin'][$id]['quantity'] > 1) {
                        $_SESSION['cart_admin'][$id]['quantity']--;
                    } else {
                        unset($_SESSION['cart_admin'][$id]);
                    }
                    header("location: " . $_SERVER['HTTP_REFERER']);
                }
                if ($action_cart == 'plus') {
                    $_SESSION['cart_admin'][$id]['quantity']++;
                    header("location: " . $_SERVER['HTTP_REFERER']);
                }

                if ($action_cart == 'delete') {
                    unset($_SESSION['cart_admin'][$id]);
                    header("location: " . $_SERVER['HTTP_REFERER']);
                }

                ?>
                <script>
                    location.href = 'index.php?page_layout=add_cart&controller=cart&action=add_cart_admin';
                </script>
                <?php
            }
            $cart = (isset($_SESSION['cart_admin'])) ? $_SESSION['cart_admin'] : [];
            $total_item = totalItem($cart);
            $total_price = totalPrice($cart);
            $buying_date = date("Y-m-d");

            if (isset($_POST['checkout'])) {
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $status = "Đã giao hàng thành công";

                $query = insertCartNotCustomer($total_price, $total_item, $buying_date, $full_name, $address, $phone, $email, $status, $conn);

                if ($query) {
                    $order_id = mysqli_insert_id($conn);
                    foreach ($cart as $value) {
                        $product_id = $value['id'];
                        $quantity = $value['quantity'];
                        $price = $value['price'];

                        $queryCart = insertCartDetail($order_id, $product_id, $quantity, $price, $conn);
                    }
                    if ($queryCart) {
                        echo '<script language="javascript">alert("Đặt hàng thành công!");</script>';
                        unset($_SESSION['cart_admin']);
                ?>
                        <script>
                            location.href = 'index.php?page_layout=list_cart&controller=cart&action=list_cart';
                        </script>
                <?php

                    } else {
                        echo '<script language="javascript">alert("Đặt hàng thất bại!");</script>';
                    }
                }
            }
            break;
        }
    case 'delete_cart_admin': {
            $table_order = 'orders';
            $id_order = $_GET['id'];
            if (deleteData($table_order, $id_order, $conn)) {
                echo '<script language="javascript">alert("Đã xóa đơn hàng");</script>';
                ?>
                <script>
                    location.href = 'index.php?page_layout=list_cart&controller=cart&action=list_cart';
                </script>
            <?php
            } else {
                echo '<script language="javascript">alert("Xóa thất bại");</script>';
            ?>
                <script>
                    location.href = 'index.php?page_layout=list_cart&controller=cart&action=list_cart';
                </script>
<?php
            };
        }

    default: {
            require_once "./index.php";
        }
}
?>
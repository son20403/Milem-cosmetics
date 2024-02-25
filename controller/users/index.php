<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case '': {
            require_once "./index.php";
            break;
        }

    case 'signin': {
            if (isset($_SESSION['username'])) {
                header('location: ./index.php');
            } else {
                if (isset($_POST['signin'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];


                    $table = 'customers';
                    $data = checkSignin($table, $conn, $username);
                    if ($data == 0) {
                        echo '<script language="javascript">alert("Sai tài khoản!");</script>';
                    } else {
                        $verify_password = password_verify($password, $data['password']);
                        if ($verify_password) {
                            $_SESSION['username'] = $username;
                            echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
?>
                            <script>
                                location.href = 'index.php?page_layout=index';
                            </script>
                            <?php
                        } else {
                            echo '<script language="javascript">alert("Sai mật khẩu!");</script>';
                        }
                    }
                }
            }
            break;
        }
    case 'signup': {
            if (isset($_SESSION['username'])) {
                header('location: ./index.php');
            } else {
                if (isset($_POST['signup'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $password_again = $_POST['password_again'];
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    if ($password === $password_again) {

                        //Mã hóa mật khẩu
                        $hash_password = password_hash($password, PASSWORD_DEFAULT);

                        $table = 'customers';
                        $data = checkSignup($table, $conn, $username);
                        if ($data > 0) {
                            echo '<script language="javascript">alert("tài khoản đã tồn tại");</script>';
                        } else {
                            if (insertData($table, $username, $fullname, $hash_password, $email, $address, $phone, $conn)) {
                                echo '<script language="javascript">alert("Đăng ký thành công!");</script>';
                            ?>
                                <script>
                                    location.href = 'index.php?page_layout=index';
                                </script>
                        <?php
                            } else {
                                echo '<script language="javascript">alert("Đăng ký thất bại!");</script>';
                            }
                        }
                    } else {
                        echo '<script language="javascript">alert("Mật khẩu không khớp!");</script>';
                    }
                }
            }
        }
        break;

    case 'update_user': {
            $table = 'customers';
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $data_customers = getDataUser($table, $username, $conn);
                $id = $data_customers['id'];

                if (isset($_POST['update_user'])) {

                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];


                    if (updateUser($table, $fullname, $email, $phone, $address, $id, $conn)) {
                        echo '<script language="javascript">alert("Cập nhật thành công!");</script>';
                        ?>
                        <script>
                            location.href = 'index.php?page_layout=index';
                        </script>
                    <?php
                    } else {
                        echo '<script language="javascript">alert("Cập nhật thất bại!");</script>';
                    ?>
                        <script>
                            location.href = 'index.php?page_layout=update_user&controller=users&action=update_user';
                        </script>
                <?php
                    }
                }
            } else {
                ?>
                <script>
                    location.href = 'index.php?page_layout=index';
                </script>
                <?php
            }
            break;
        }
    case 'change_password': {
            $table = 'customers';
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $data_customers = getDataUser($table, $username, $conn);
                $id = $data_customers['id'];

                if (isset($_POST['change_password'])) {

                    $password_old = $_POST['password_old'];
                    $password_new = $_POST['password_new'];
                    $password_again = $_POST['password_again'];

                    $verify_password = password_verify($password_old, $data_customers['password']);

                    if ($verify_password) {
                        if ($password_new === $password_again) {
                            $hash_password = password_hash($password_new, PASSWORD_DEFAULT);
                            if (changePassword($table, $hash_password, $id, $conn)) {
                                echo '<script language="javascript">alert("Đổi mật khẩu thành công!");</script>';
                ?>
                                <script>
                                    location.href = 'index.php?page_layout=index';
                                </script>
                            <?php
                            } else {
                                echo '<script language="javascript">alert("Đổi mật khẩu thất bại!");</script>';
                            ?>
                                <script>
                                    location.href = 'index.php?page_layout=change_password&controller=users&action=change_password';
                                </script>
<?php
                            }
                        } else {
                            echo '<script language="javascript">alert("Mật khẩu không khớp!");</script>';
                        }
                    } else {
                        echo '<script language="javascript">alert("Mật khẩu củ không đúng!");</script>';
                    }
                }
            } else {
                header('location: ./index.php');
            }
            break;
        }
    case 'forgot': {
            if (isset($_POST['forgot'])) {
                $table = 'customers';
                $email = $_POST['email'];
                $username = $_POST['user_name'];
                $data = getDataUser($table, $username, $conn);


                if ($data > 0) {
                    $data_username = $data['user_name'];
                    if ($email === $data['email']) {
                        $newpassword = rand(1000, 9999);

                        $hash_password = password_hash($newpassword, PASSWORD_DEFAULT);

                        if (updatePassword($table, $hash_password, $data_username, $conn)) {
                            echo '<script language="javascript">alert("Yêu cầu lấy mật khẩu thành công!");</script>';
                            newPassWord($email, $data_username, $newpassword);
                        } else {
                            echo '<script language="javascript">alert("Yêu cầu lấy mật khẩu thất bại!");</script>';
                        };
                    } else {
                        echo '<script language="javascript">alert("Email không đúng!");</script>';
                    }
                } else {
                    echo '<script language="javascript">alert("Tài khoản không đúng!");</script>';
                }
            }
            break;
        }
    case 'logout': {
            if (isset($_SESSION['username'])) {
                unset($_SESSION['username']);
                unset($_SESSION['cart']);
                header("location: " . $_SERVER['HTTP_REFERER']);
            }
            break;
        }
    default: {
            require_once "./index.php";
        }
}

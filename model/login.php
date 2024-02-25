<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "du_an_1");

if (isset($_POST['username'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM staffs WHERE user_name = '$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $checkStaff = mysqli_num_rows($result);
    if ($checkStaff == 1) {
        # code...
        // $checkPass = $password;
        $checkPass = password_verify($password, $data['password']);
        if ($checkPass) {
            # code...
            $_SESSION['user'] = $data;
            header('location: ../admin/index.php');
        } else {
            echo "sai mật khẩu";
            header('location: ../admin/login.php?err_pass');
        }
    } else {
        echo 'tài khoản không tồn tại';
        header('location: ../admin/login.php?err');
    }
}
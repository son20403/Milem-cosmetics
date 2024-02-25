<?php
// lấy kiểm tra đăng nhập bản user:
function checkSignin($table, $conn, $username)
{
    $sql = "SELECT * FROM $table WHERE user_name = '$username'";
    $query = execute($conn, $sql);
    if (num_rows($query) == 0) {
        $data = 0;
    } else {
        $data = getData($query);
    }
    return $data;
}

// kiểm tra đăng ký bản user:
function checkSignup($table, $conn, $username)
{
    $sql = "SELECT * FROM $table WHERE user_name = '$username'";
    $query = execute($conn, $sql);
    if (num_rows($query) == 0) {
        $data = 0;
    } else {
        while ($datas = getData($query)) {
            $data[] =  $datas;
        }
    }
    return $data;
}

// lấy user qua session:
function getDataUser($table, $username, $conn)
{
    $sql = "SELECT * FROM $table WHERE user_name = '$username'";
    $query = execute($conn, $sql);
    if (num_rows($query) == 0) {
        $data = 0;
    } else {
        $data = getData($query);
    }
    return $data;
}
// quên mật khẩu:
function getDataEmail($table, $email, $user_name, $conn)
{
    $sql = "SELECT * FROM $table WHERE email = '$email' AND user_name = '$user_name'";
    $query = execute($conn, $sql);
    if (num_rows($query) == 0) {
        $data = 0;
    } else {
        $data = getData($query);
    }
    return $data;
}

function updatePassword($table, $newpassword, $username, $conn)
{
    $sql = "UPDATE $table SET password = '$newpassword' WHERE user_name = '$username'";
    return execute($conn, $sql);
}
function newPassWord($email, $username, $newpassword)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'sonntpd05961@fpt.edu.vn'; // SMTP username
        $mail->Password = 'ckneghlnnnzunxhv';   // SMTP password
        $mail->SMTPSecure = 'tls';  // encryption TLS/SSL 
        $mail->Port = 587;  // port to connect to                
        $mail->setFrom('sonntpd05961@fpt.edu.vn', 'Nguyễn Trường Sơn');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Mật Khẩu Mới';
        $content = "
            Bạn nhận được mật khẩu mới do bạn hoặc người khác đã yêu cầu từ website MILEM SHOP cho tài khoản <b style = 'color: red;'>{$username}</b>
            <br>
                   <b style = 'color: red;'>
                   Mật khẩu mới là: {$newpassword}
                   </b>
                    <br>
                    <b style = 'color: green;'>Cảm ơn bạn đã đồng hành cùng chúng tôi!</b>
                    ";
        $mail->Body = $content;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo '<script language="javascript">alert("Đã gửi email thành công, bạn vui lòng check email để lấy mật khẩu mới!");</script>';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}

function updateUser($table, $full_name, $email, $address, $phone, $id, $conn)
{
    $sql = "UPDATE $table SET full_name = '$full_name',  email = '$email', address = '$address', phone = '$phone' WHERE id = '$id'";
    return execute($conn, $sql);
}
function changePassword($table, $password, $id, $conn)
{
    $sql = "UPDATE $table SET password = '$password' WHERE id = '$id'";
    return execute($conn, $sql);
}

// thêm dữ liệu:

function insertData($table, $username, $fullname, $password, $email, $address, $phone, $conn)
{
    $sql = "INSERT INTO $table VALUES (null,'$username','$fullname','$password','$email','$address','$phone')";
    return execute($conn, $sql);
}

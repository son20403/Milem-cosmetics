<?php
// include 'connect.php';
function customer_index()
{
    $conn = connect();
    $sql = "SELECT * FROM `customers`";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function customer_store($user_name, $full_name, $password, $email, $address, $phone)
{
    $conn = connect();
    $sql = "INSERT INTO `customers` VALUES (null,'$user_name','$full_name','$password','$email','$address','$phone')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function customer_edit($id)
{
    $conn = connect();
    $sql = "SELECT * FROM  `customers` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $each;
}
function customer_update($id, $user_name, $full_name, $password, $email, $address, $phone)
{
    $conn = connect();
    $sql = "UPDATE `customers` SET `user_name`='$user_name',`full_name`='$full_name',`password`='$password',`email`='$email',`address`='$address',`phone`='$phone' WHERE `id` =  '$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function customer_delete($id)
{
    try {
        $conn = connect();
        $sql = "DELETE FROM `customers` WHERE `id` = '$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        return true;
    } catch (Exception $e) {
        return false;
    }
    
}

// switch ($action) {
//     case '':
//         $sql = "SELECT * FROM `customers`";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'list_customer':
//         $sql = "SELECT * FROM `customers`";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'store_customer':
//         $sql = "INSERT INTO `customers` VALUES (null,'$user_name','$full_name','$password','$email','$address','$phone')";
//         mysqli_query($connect, $sql);
//         break;
//     case 'edit_customer':
//         $sql = "SELECT * FROM `customers` WHERE id = '$id'";
//         $result = mysqli_query($connect, $sql);
//         $each = mysqli_fetch_array($result);
//         break;
//     case 'update_customer':
//         $sql = "UPDATE `customers` SET `user_name`='$user_name',`full_name`='$full_name',`password`='$password',`email`='$email',`address`='$address',`phone`='$phone' WHERE `id` =  '$id'";
//         mysqli_query($connect, $sql);
//         break;
//     case 'delete_customer':
//         $sql = "DELETE FROM `customers` WHERE `id` = '$id'";
//         mysqli_query($connect, $sql);
//         break;
// }
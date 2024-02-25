<?php

// include 'connect.php';
function staff_index()
{
    $conn = connect();
    $sql = "SELECT * FROM `staffs` INNER JOIN `roles` ON staffs.role = roles.id_role";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function staff_store($user_name, $full_name, $password,$address,$phone,$email,$card,$day_activated,$role)
{
    $conn = connect();
    $sql = "INSERT INTO `staffs` VALUES (NULL,'$user_name','$full_name','$password','$address','$phone','$email','$card','$day_activated','$role')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function staff_edit($id)
{
    $conn = connect();
    $sql = "SELECT * FROM  `staffs`  WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $each;
}
function staff_update($id, $user_name, $full_name, $password,$address,$phone,$email,$card,$day_activated,$role)
{
    $conn = connect();
    $sql = "UPDATE `staffs` SET `user_name`='$user_name',`full_name`='$full_name',`password`='$password',`address`='$address',`phone`='$phone',`email`='$email',`card`='$card',`day_activated`='$day_activated',`role`='$role' WHERE `id` =  '$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function staff_delete($id)
{
    $conn = connect();
    $sql = "DELETE FROM `staffs` WHERE `id` = '$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
// switch ($action) {
//     case '':
//         $sql = "SELECT * FROM `staffs`";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'list_staff':

//         $sql = "SELECT * FROM `staffs`";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'store_staff':
//         $sql = "INSERT INTO `staffs`(`id`, `user_name`, `full_name`,`password`) VALUES (NULL,'$user_name','$full_name','$password')";
//         mysqli_query($connect, $sql);
//         break;
//     case 'edit_staff':
//         $sql = "SELECT * FROM  `staffs` WHERE id = '$id'";
//         $result = mysqli_query($connect, $sql);
//         $each = mysqli_fetch_array($result);
//         break;
//     case 'update_staff':
//         $sql = "UPDATE `staffs` SET `user_name`='$user_name',`full_name`='$full_name',`password`='$password' WHERE `id` =  '$id'";
//         mysqli_query($connect, $sql);
//         break;
//     case 'delete_staff':
//         $sql = "DELETE FROM `staffs` WHERE `id` = '$id'";
//         mysqli_query($connect, $sql);
//         break;
// }
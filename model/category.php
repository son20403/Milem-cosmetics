<?php
// include 'connect.php';
function category_index()
{
    $conn = connect();
    $sql = "SELECT * FROM `categorys`";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function category_store($staff_id, $name_category, $path_file)
{
    $conn = connect();
    $sql = "INSERT INTO `categorys` (`staff_id`,`name_category`,`image_category`) VALUES ('$staff_id','$name_category','$path_file')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function category_edit($id)
{
    $conn = connect();
    $sql = "SELECT * FROM  `categorys` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $each;
}
function category_update($id, $name_category, $path_file)
{
    $conn = connect();
    $sql = "UPDATE `categorys` SET `name_category`='$name_category',`image_category` ='$path_file' WHERE `id` = '$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function category_delete($id)

{
    try {
        $conn = connect();
        $sql = "DELETE FROM `categorys` WHERE `id` = '$id'";
        $kq = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return true;
    } catch (Exception $e) {
        return false;
    }
   
}

// switch ($action) {
//     case '':
//         $sql = "SELECT * FROM `categorys`";
//         $result = mysqli_query($conn, $sql);
//         break;
//     case 'list_category':
//         $sql = "SELECT * FROM `categorys`";
//         $result = mysqli_query($conn, $sql);
//         break;
//     case 'store':
//         $sql = "INSERT INTO `categorys` (`staff_id`,`name_category`,`image_category`) VALUES ('$staff_id','$name_category','$path_file')";
//         mysqli_query($conn, $sql);
//         break;
//     case 'edit':
//         $sql = "SELECT * FROM  `categorys` WHERE id = '$id'";
//         $result = mysqli_query($conn, $sql);
//         $each = mysqli_fetch_array($result);
//         break;
//     case 'update':
//         // UPDATE `category` SET `name_category` = 'nxnx ndnd', `image_category` = ' xn xdm' WHERE `category`.`id` = 20;
//         $sql = "UPDATE `categorys` SET `name_category`='$name_category',`image_category` ='$path_file' WHERE `id` = '$id'";
//         mysqli_query($conn, $sql);
//         break;
//     case 'delete':
//         $sql = "DELETE FROM `categorys` WHERE `id` = '$id'";
//         mysqli_query($conn, $sql);
//         break;
// }
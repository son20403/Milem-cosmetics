<?php
// include 'connect.php';


function  product_index()
{
    $conn = connect();
    $sql = "SELECT `products`.*,
        categorys.name_category as name_loai
        FROM `products`
        JOIN `categorys` 
         ON `products`.category_id = `categorys`.`id` ORDER BY products.id DESC";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function  product_store($staff_id, $name_product, $path_file, $describe, $price, $category_id)
{
    $conn = connect();
    $sql = "INSERT INTO `products` VALUES (NULL,'$staff_id','$name_product','$path_file','$describe','$price','$category_id',NUll)";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function  product_edit($id)
{
    $conn = connect();
    $sql = "SELECT * FROM `products` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $each;
}
function  product_update($id, $staff_id, $name_product, $path_file, $describe, $price, $category_id)
{
    $conn = connect();
    $sql = "UPDATE `products` SET `staff_id` = '$staff_id', `name_product`='$name_product',`image_product`='$path_file',`describe`='$describe',`price`='$price',`category_id`='$category_id' WHERE `id` =  '$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function  product_delete($id)
{   
    try {
        $conn = connect();
        $sql = "DELETE FROM products WHERE `id` = '$id'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// switch ($action) {
//     case '':
//         $sql = "SELECT * FROM `products`";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'list_product':
//         // $sql = "SELECT * FROM `products`";
//         $sql = "SELECT `products`.*,
//         categorys.name_category as name_loai
//         FROM `products`
//         JOIN `categorys` 
//          ON `products`.category_id = `categorys`.`id`";
//         // $sql = " SELECT category.name_category as name_loai
//         //         FROM products
//         //         INNER JOIN category
//         //         ON products.category_id = category.id";
//         $result = mysqli_query($connect, $sql);
//         break;
//     case 'store_product':
//         $sql = "INSERT INTO `products` (`id`, `name_product`, `image_product`, `describe`, `price`, `category_id`) VALUES (NULL,'$name_product','$path_file','$describe','$price','$category_id')";
//         mysqli_query($connect, $sql);
//         break;
//     case 'edit_product':
//         $sql = "SELECT * FROM  `products` WHERE id = '$id'";
//         $result = mysqli_query($connect, $sql);
//         $each = mysqli_fetch_array($result);
//         break;
//     case 'update_product':
//         // $sql = "UPDATE `products` SET `name_product`= '$name_product' WHERE `id` =  '$id' ";
//         $sql = "UPDATE `products` SET `name_product`='$name_product',`image_product`='$path_file',`describe`='$describe',`price`='$price',`category_id`='$category_id' WHERE `id` =  '$id'";
//         mysqli_query($connect, $sql);
//         break;
//     case 'delete_product':
//         $sql = "DELETE FROM `products` WHERE `id` = '$id'";
//         mysqli_query($connect, $sql);
//         break;
// }
<?php 
function products($conn){
    $sql = "SELECT * FROM `products` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function comments($conn){
    $sql = "SELECT * FROM `comments` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function news($conn){
    $sql = "SELECT *  FROM `news` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function orders($conn){
    $sql = "SELECT *  FROM `orders` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function customers($conn){
    $sql = "SELECT *  FROM `customers` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function staffs($conn){
    $sql = "SELECT * FROM `staffs` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function categorys($conn){
    $sql = "SELECT * FROM `categorys` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function roles($conn){
    $sql = "SELECT * FROM `roles` WHERE 1";
    $query = execute($conn,$sql);
    $data = mysqli_num_rows($query);;          

    return $data;
}
function chartProduct($conn){
    $sql = "SELECT `categorys`.*,COUNT(`products`.`category_id`) AS 'number_category' 
    FROM `products` INNER JOIN `categorys` ON `products`.`category_id` = `categorys`.`id` GROUP BY `products`.`category_id`";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
        while($datas = getData($query)){
            $data[] =  $datas;
        }
    }
    return $data;
}
?>
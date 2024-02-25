<?php 
    // lấy dữ liệu bản products: 
function getDataProduct($table,$id,$conn){
    $sql = "SELECT *,products.id FROM $table INNER JOIN categorys ON $table.category_id = categorys.id WHERE $table.id = '$id'";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}
    // lấy tat ca dữ liệu bản products: 

function getAllProduct($table,$conn){
    $sql = "SELECT *,$table.id FROM $table INNER JOIN categorys ON $table.category_id = categorys.id ORDER BY $table.category_id ASC";
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

// lấy dữ liệu product theo category:
function getProductsCategory($table,$id_category,$conn){
    $sql = "SELECT * FROM $table WHERE category_id = $id_category";
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
// lấy dữ liệu product theo category:
function getNameCategory($table,$id_category,$conn){
    $sql = "SELECT * FROM $table WHERE id = $id_category";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
        $data = getData($query);
    }
    return $data;
}
// lấy dữ liệu product theo category:
function getProductsCategorySimilar($table,$id_category,$conn){
    $sql = "SELECT * FROM $table WHERE category_id = $id_category limit 0,4";
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
function getDataTop($table,$conn){
    $sql = "SELECT * FROM $table ORDER BY id DESC";
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
function getDataView($table,$conn){
    $sql = "SELECT * FROM $table ORDER BY view DESC";
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
function getDataPriceUp($table,$conn){
    $sql = "SELECT * FROM $table ORDER BY price DESC";
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
function getDataPriceDown($table,$conn){
    $sql = "SELECT * FROM $table ORDER BY price ASC";
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
function getDataPrice($table,$price1,$price2,$conn){
    $sql = "SELECT * FROM $table WHERE price > $price1 AND price < $price2";
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
function getDataSearch($table,$keys,$conn){
    $sql = "SELECT * FROM $table WHERE name_product LIKE '%" .$keys . "%'";
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

// update view products
function updateView($table,$view,$id,$conn){
    $sql = "UPDATE $table SET view = '$view' WHERE id = '$id'";
    return execute($conn,$sql);
}

?>
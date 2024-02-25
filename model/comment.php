<?php
function insertComment($table,$products_id,$customers_id,$title_comment,$comment,$comment_date,$conn){
    $sql = "INSERT INTO $table VALUES (NULL,'$products_id','$customers_id','$title_comment','$comment','$comment_date')";
    return execute($conn,$sql);
}
function  getComments($products_id,$conn){
    $sql = "SELECT * FROM customers
    JOIN comments ON customers.id = comments.customer_id 
    JOIN products ON comments.product_id = products.id WHERE comments.product_id = $products_id ORDER BY comments.comment_date DESC";
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
function getIdComment($table,$id,$conn){
    $sql = "SELECT * FROM $table 
    JOIN products ON $table.product_id = products.id
    JOIN customers ON $table.customer_id = customers.id
    WHERE $table.id = $id";

    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}

function updateComment($table,$title_comment,$comment,$id,$conn){
    $sql = "UPDATE $table SET `title_comment`='$title_comment',`comment`='$comment' WHERE id = '$id'";
    return execute($conn,$sql);
}
?>
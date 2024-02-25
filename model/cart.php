<?php 

function getDataProductID($table,$id,$conn){
    $sql = "SELECT * FROM $table WHERE $table.id = '$id'";
    $query = execute($conn,$sql);
    if(num_rows($query) == 0){
        $data = 0;
    }else{
       $data = getData($query);
    }
    return $data;
}
function totalPrice($cart){
    $total_price = 0;

    foreach($cart as $value){
        $total_price += $value['quantity'] * $value['price'];
    }
    return $total_price;
}
function totalItem($cart){
    $total_item = 0;

    foreach($cart as $value){
        $total_item += $value['quantity'];
    }
    return $total_item;
}

function insertCart($customer_id,$total_price,$total_item,$buying_date,$full_name,$address,$phone,$email,$status,$conn){
   $sql = "INSERT INTO orders(`id`, `customer_id`, `total_money`, `total_item`, `buying_date`, `full_name`, `address`, `phone`, `email`, `status`)
    VALUES (NULL, '$customer_id', '$total_price', '$total_item', '$buying_date', '$full_name', '$address', '$phone', '$email','$status')";
    return execute($conn,$sql);
}
function insertCartNotCustomer($total_price,$total_item,$buying_date,$full_name,$address,$phone,$email,$status,$conn){
    $sql = "INSERT INTO orders(`id`, `total_money`, `total_item`, `buying_date`, `full_name`, `address`, `phone`, `email`, `status`) 
    VALUES (NULL, '$total_price', '$total_item', '$buying_date', '$full_name', '$address', '$phone', '$email','$status')";
     return execute($conn,$sql);
 }

function insertCartDetail($order_id,$product_id,$quantity,$price,$conn){
    $sql = "INSERT INTO order_details VALUES (NULL,'$order_id','$product_id','$quantity','$price')";
    return execute($conn,$sql);
}

function getAllCart($table,$conn){
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

    function getCustomerCart($table,$customer_id,$conn){
        $sql = "SELECT *,$table.id FROM $table 
        -- JOIN order_details ON $table.id = order_details.order_id
        -- JOIN customers ON customers.id = $table.customer_id
        WHERE customer_id = $customer_id ORDER BY id DESC";
    
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
    function updateCartCustomer($table,$full_name,$address,$phone,$email,$id,$conn){
        $sql = "UPDATE $table SET `full_name`='$full_name',`address`='$address',`phone`='$phone',`email`='$email' WHERE id = '$id'";
        return execute($conn,$sql);
    }
    function updateCart($table,$staff_id,$status,$id,$conn){
        $sql = "UPDATE $table SET `staff_id`='$staff_id',`status`='$status' WHERE id = '$id'";
        return execute($conn,$sql);
    }
    function updateCartCus($table,$status,$id,$conn){
        $sql = "UPDATE $table SET `status`='$status' WHERE id = '$id'";
        return execute($conn,$sql);
    }


    function getIDCart($table,$order_id,$conn){
        $sql = "SELECT * FROM $table
        JOIN products ON $table.product_id = products.id
        WHERE order_id = '$order_id'";
    
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
<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'view_all': {
            $table = 'products';
            $data_products = getAllData($table, $conn);

            $table_category = 'categorys';
            $dataAll_category = getAllData($table_category, $conn);
            break;
        }

    case 'view_category': {
            if (isset($_GET['id_category'])) {
                $id_category = $_GET['id_category'];
                $table = 'products';
                $data_category = getProductsCategory($table, $id_category, $conn);
            }
            $table_category = 'categorys';
            $data_name_category = getNameCategory($table_category,$id_category,$conn);
            $dataAll_category = getAllData($table_category, $conn);
            break;
        }
    case 'category': {
        $table_category = 'categorys';
        $dataAll_category = getAllData($table_category, $conn);
        break;
    }
    case 'keys': {
        if (isset($_GET['keys'])) {
            $keys = $_GET['keys'];
        }elseif (isset($_POST['search'])) {
            $keys = $_POST['keys'];
        }else{
            $keys = '';
        }
        $table = 'products';
        $data_keys = getDataSearch($table,$keys,$conn);
        $table_category = 'categorys';
        $dataAll_category = getAllData($table_category, $conn);

        break;
    }
    case 'type': {
        $table_category = 'categorys';
        $dataAll_category = getAllData($table_category, $conn);

        if (isset($_GET['price1']) && isset($_GET['price2'])) {
            $price1 = $_GET['price1'];
            $price2 = $_GET['price2'];
        }

        if (isset($_GET['type'])) {
            $type = $_GET['type'];
        }else{
            $type = '';
        }
        $table = 'products';
        if($type == ''){
            $data_products = getAllData($table,$conn);
        }elseif($type == 'top'){
            $data_products = getDataTop($table,$conn);
        }elseif($type == 'view'){
            $data_products = getDataView($table,$conn);
        }elseif($type == 'priceup'){
            $data_products = getDataPriceUp($table,$conn);
        }elseif($type == 'pricedown'){
            $data_products = getDataPriceDown($table,$conn);
        }elseif($type == 'price'){
            $data_products = getDataPrice($table,$price1,$price2,$conn);
        }else{
            $data_products = getAllData($table,$conn);
        }

        

        break;
    }
    default: {
            require_once "./index.php";
        }
}

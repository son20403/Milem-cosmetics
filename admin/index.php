<?php
session_start();
include "../model/connect.php";
$conn = connect();
include "../model/users.php";
include "../model/products.php";
include "../model/comment.php";
include "../model/cart.php";
include "../model/news.php";
include "../model/roles.php";
include "../model/statistical.php";


if (empty($_SESSION['user'])) {
    header('location: ./login.php?err_login');
} else {
    $user = $_SESSION['user'];
}

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case 'add_comment':{
        require_once "../controller/comment/index.php";
        break;
    }
    case 'cart':{
        require_once "../controller/cart/index.php";
        break;
    }
    case 'news':{
        require_once "../controller/news/index.php";
        break;
    }
    case 'statistical':{
        require_once "../controller/statistical/index.php";
        break;
    }
    case 'roles':{
        require_once "../controller/roles/index.php";
        break;
    }
    default:
        break; 
}
include 'header.php';
if(isset($_GET['page_layout'])){
    $page_layout = $_GET['page_layout'];
}else{
    $page_layout = '';
}
switch ($page_layout){
    case '':
        include '../controller/admin/index.php';
        break;
    case 'add_comment':
        include './comment/add.php';
        break;
    case 'list_comment':
        include './comment/index.php';
        break;
    case 'update_comment':
        include './comment/update.php';
        break;
    case 'list_cart':
        include './cart/index.php';
        break;
    case 'update_cart':
        include './cart/update.php';
        break;
    case 'add_cart':
        include './cart/add.php';
        break;
    case 'cart_detail':
        include './cart/cart_detail.php';
        break;
    case 'add_news':
        include './news/add.php';
        break;
    case 'view_news':
        include './news/index.php';
        break;
    case 'update_news':
        include './news/update.php';
        break;
    case 'statistical':
        include './statistical/index.php';
        break;
    case 'chart':
        include './statistical/chart.php';
        break;
    case 'add_role':
        include './roles/add.php';
        break;
    case 'update_role':
        include './roles/update.php';
        break;
    case 'view_role':
        include './roles/index.php';
        break;
        
    default:       
        break; 
}
include 'footer.php';

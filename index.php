<?php 
session_start();
include "./model/connect.php";
include "./model/users.php";
include "./model/products.php";
include "./model/comment.php";
include "./model/cart.php";
include "./model/news.php";
include "./model/roles.php";
$conn = connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case '':{
        $table = 'products';
        $data = getAllData($table, $conn);

        $data_top = getDataTop($table,$conn);
        $data_view = getDataView($table,$conn);

        $table1 = 'categorys';
        $data1 = getAllData($table1, $conn);

        $table_news = 'news';
        $data_news = getNews($table_news,$conn);
        break;
    }
    case 'users':{
        require_once "./controller/users/index.php";
        break;
    }
    case 'products':{
        require_once "./controller/products/index.php";
        break;
    }
    case 'products_detail':{
        require_once "./controller/products_detail/index.php";
        break;
    }
    case 'add_cart':{
        require_once "./controller/cart/index.php";
        break;
    }
    case 'news':{
        require_once "./controller/news/index.php";
        break;
    }
    case 'roles':{
        require_once "./controller/roles/index.php";
        break;
    }
}


include "./view/header.php";

if(isset($_GET['page_layout'])){
    $page_layout = $_GET['page_layout'];
}else{
    $page_layout = '';
}
    switch ($page_layout){
        case '':
            include "./view/slider.php";
            include "./view/section.php";
            break;
        case 'index':
            include "./view/slider.php";
            include "./view/section.php";
            break;           
        case 'products':
            include "./view/products/index.php";
            break; 
        case 'products_detail':
            include "./view/products/products_detail.php";
            break;
        case 'forgot':
            include "./view/users/forgot.php";
            break; 
        case 'update_user':
            include "./view/users/update_user.php";
            break;
        case 'change_password':
            include "./view/users/change_password.php";
            break; 
        case 'signin':
            include "./view/users/signin.php";
            break; 
        case 'signup':
            include "./view/users/signup.php";
            break;
        case 'cart_view':
            include "./view/cart/cart_view.php";
            break;
        case 'checkout':
            include "./view/cart/checkout.php";
            break;
        case 'bill':
            include "./view/cart/bill.php";
            break;
        case 'introduce':
            include "./view/introduce.php";
            break;
        case 'contact':
            include "./view/contact.php";
            break;
         case 'news':
            include "./view/news/news.php";
            break;
        case 'news_detail':
            include "./view/news/news_detail.php";
            break;
        default:
            include "./view/slider.php";
            include "./view/section.php";
        break; 
    }


include "./view/footer.php";
?>
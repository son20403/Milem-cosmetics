<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'view': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $table = 'products';
                $data = getDataProduct($table, $id, $conn);
    
                $view = $data['view'];
                $view += 1;
                updateView($table, $view, $id, $conn);
    
                $id_category = $data['category_id'];
                $data_category = getProductsCategorySimilar($table, $id_category, $conn);
    
                $data_comment = getComments($id,$conn);
            }
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];

                if (isset($_POST['comment'])) {
                    $title_comment = $_POST['title_comment'];
                    $content_comment = $_POST['content_comment'];

                    $comment_date = date("Y-m-d");
                    $product_id = $_GET['id'];

                    $table_customer = 'customers';
                    $table_comment = 'comments';

                    $data = getDataUser($table_customer,$username,$conn);
                    $customers_id = $data['id'];
                    
                    if(insertComment($table_comment,$product_id,$customers_id,$title_comment,$content_comment,$comment_date,$conn)){
                        header("location: " . $_SERVER['HTTP_REFERER']);
                    }else{
                        echo '<script language="javascript">alert("Lỗi khi bình luận");</script>';
                    }
                   
                }
            }
        }
        break;
    default: {
            require_once "./index.php";
        }
}

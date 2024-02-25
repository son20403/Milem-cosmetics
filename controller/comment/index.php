<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
        case 'add_comment': {
            $table_customer = 'customers';
            $data_customer = getAllData($table_customer,$conn);

            $table_product = 'products';
            $data_product = getAllData($table_product,$conn);


            if (isset($_POST['add_comment'])) {
                $title_comment = $_POST['title_comment'];
                $content_comment = $_POST['comment'];
                $comment_date = date("Y-m-d");
                $product_id = $_POST['product_id'];
                $customers_id = $_POST['customer_id'];
                $table_comment = 'comments';
                
                if(insertComment($table_comment,$product_id,$customers_id,$title_comment,$content_comment,$comment_date,$conn)){
                    // header("location: " . $_SERVER['HTTP_REFERER']);
                    echo '<script language="javascript">alert("Thêm thành công!");</script>';
                        ?>
                        <script>
                            location.href = 'index.php?page_layout=list_comment&controller=add_comment&action=list_comment';
                        </script>
                        <?php
                }else{
                    echo '<script language="javascript">alert("Lỗi khi bình luận");</script>';
                }
               
            }
            break;
        }

        case 'list_comment': {
            $table_comment = 'comments';
            $data_comment = getAllData($table_comment,$conn);
            break;
        }
        case 'update_comment': {
            $table_comment = 'comments';
            $id_comment = $_GET['id'];
            $data_comment = getIdComment($table_comment,$id_comment,$conn);
            
            if (isset($_POST['update_comment'])) {
                $title_comment = $_POST['title_comment'];
                $content_comment = $_POST['comment'];
                
                if(updateComment($table_comment,$title_comment,$content_comment,$id_comment,$conn)){
                    echo '<script language="javascript">alert("Đã update thành công!");</script>';
                        ?>
                        <script>
                            location.href = 'index.php?page_layout=list_comment&controller=add_comment&action=list_comment';
                        </script>
                        <?php
                }else{
                    echo '<script language="javascript">alert("Lỗi khi Update");</script>';
                }
               
            }
            break;
        }
        case 'delete_comment':{

            $table = 'comments';
            $id = $_GET['id'];
            if(deleteData($table,$id,$conn)){
            echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                ?>
                <script>
                    location.href = 'index.php?page_layout=list_comment&controller=add_comment&action=list_comment';
                </script>
                <?php
            }else{
            echo '<script language="javascript">alert("Lỗi khi Xóa");</script>';
            }
        break;
        }

    default: {
            require_once "./index.php";
        }
}

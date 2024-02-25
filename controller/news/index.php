<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'add_news': {
            if (isset($_POST['add'])) {
                $staff_id = $_POST['staff_id'];
                $title = $_POST['title'];
                $image_news = $_FILES['image_news'];

                $errors = array();
                $file_name = $_FILES['image_news']['name'];
                $file_size = $_FILES['image_news']['size'];
                $file_tmp = $_FILES['image_news']['tmp_name'];
                $file_type = $_FILES['image_news']['type'];
                $file_parts = explode('.', $_FILES['image_news']['name']);
                $file_ext = strtolower(end($file_parts));
                $expensions = array("jpeg", "jpg", "png");
                if (in_array($file_ext, $expensions) === false) {
                    $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                }
                if ($file_size > 2097152) {
                    $errors[] = 'Kích thước file không được lớn hơn 2MB';
                }
                $image_news = $_FILES['image_news']['name'];
                $target = "../assets/img/news/" . basename($image_news);

                move_uploaded_file($_FILES['image_news']['tmp_name'], $target);

                $content = $_POST['content'];
                $news_date = date("Y-m-d");
                $view_news = 0;
                $table_news = 'news';

                if (addNews($table_news, $staff_id, $title, $image_news, $content, $news_date, $view_news, $conn)) {
                    echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
?>
                    <script>
                        location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Đã thêm thất bại!");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                    </script>
                <?php
                }
            }
            break;
        }
    case 'view_news': {
            $table_news = 'news';
            $data_news = getAllData($table_news, $conn);
            break;
        }
    case 'update_news': {
            if (isset($_GET['id'])) {
                $id_news = $_GET['id'];
            }
            $table_news = 'news';
            $data_news = getDataNews($table_news, $id_news, $conn);
            if (isset($_POST['update'])) {
                $staff_id = $_POST['staff_id'];
                $title = $_POST['title'];
                $image_news = $_FILES['image_news_new'];
                if ($image_news['size'] > 0) {
                    $errors = array();
                    $file_name = $_FILES['image_news_new']['name'];
                    $file_size = $_FILES['image_news_new']['size'];
                    $file_tmp = $_FILES['image_news_new']['tmp_name'];
                    $file_type = $_FILES['image_news_new']['type'];
                    $file_parts = explode('.', $_FILES['image_news_new']['name']);
                    $file_ext = strtolower(end($file_parts));
                    $expensions = array("jpeg", "jpg", "png");
                    if (in_array($file_ext, $expensions) === false) {
                        $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                    }
                    if ($file_size > 2097152) {
                        $errors[] = 'Kích thước file không được lớn hơn 2MB';
                    }
                    $image_news = $_FILES['image_news_new']['name'];
                    $target = "../assets/img/news/" . basename($image_news);

                    move_uploaded_file($_FILES['image_news_new']['tmp_name'], $target);
                } else {
                    $image_news = $_POST['image_news_old'];
                }
                $content = $_POST['content'];
                $news_date = date("Y-m-d");

                if (updateNews($table_news, $staff_id, $title, $image_news, $content, $news_date, $id_news, $conn)) {
                    echo '<script language="javascript">alert("Đã update thành công!");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Đã update thất bại!");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                    </script>
                <?php
                }
            }

            break;
        }
    case 'delete_news': {
            if (isset($_GET['id'])) {
                $id_news = $_GET['id'];
            }
            $table_news = 'news';

            if (deleteData($table_news, $id_news, $conn)) {
                echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                ?>
                <script>
                    location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                </script>
            <?php
            } else {
                echo '<script language="javascript">alert("Đã xóa thất bại!");</script>';
            ?>
                <script>
                    location.href = 'index.php?page_layout=view_news&controller=news&action=view_news';
                </script>
<?php
            }
            break;
        }
    case 'news_detail': {
            if (isset($_GET['id'])) {
                $id_news = $_GET['id'];
            }
            $table_news = 'news';
            $data_news = getDataNews($table_news, $id_news, $conn);
            $view = $data_news['view_news'] += 1;
            updateViewNews($table_news, $view, $id_news, $conn);
            $data_news_list = getAllData($table_news, $conn);
            break;
        }
}
?>
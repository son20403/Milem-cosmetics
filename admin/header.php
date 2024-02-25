<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milem | ADMIN</title>
    <link rel="icon" href="../assets/img/icon_milem.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- icon -->
    <script src="tinymce/tinymce.min.js"></script>
    <script src="../assets/js/textarea.js"></script>
    <!-- edit -->

    <link rel="stylesheet" href="../assets/css/css.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <section id="sidebar" class="">
        <a href="index.php" class="brand"><i class="bx bxs-smile icon"></i><img style="margin-top: 20px;" width="120px" src="../assets/img/logo_milem.png" alt=""></a>


        <ul class="side-menu">
            <?php
            if ($user['role'] == 1) { ?>
                <li><a href="index.php?action=list_product" class="active"><i class="bx bxs-cart icon"></i> Xem sản phẩm</a>
                </li>
                <li><a href="index.php?action=list_category" class="active"><i class="bx bxs- icon"></i>Xem loại hàng</a>
                </li>
                <li><a href="index.php?action=list_customer" class="active"><i class="bx bxs- icon"></i> Xem khách hàng</a>
                </li>
                <li><a href="index.php?action=list_staff" class="active"><i class="bx bxs- icon"></i>Xem nhân viên</a>
                </li>
                <li><a href="index.php?page_layout=view_role&controller=roles&action=view_role" class="active"><i class="bx bxs- icon"></i>Xem vai trò</a>
                </li>
                <li><a href="index.php?page_layout=list_comment&controller=add_comment&action=list_comment" class="active"><i class="bx bxs- icon"></i>Xem bình luận</a>
                </li>
                <li><a href="index.php?page_layout=list_cart&controller=cart&action=list_cart" class="active"><i class="bx bxs- icon"></i>Xem đơn hàng</a>
                </li>
                <li><a href="index.php?page_layout=view_news&controller=news&action=view_news" class="active"><i class="bx bxs- icon"></i>Xem bài viết</a>
                </li>
                <li><a href="index.php?page_layout=statistical&controller=statistical&action=statistical" class="active"><i class="bx bxs- icon"></i>Thống kê</a>
                </li>
            <?php  } elseif ($user['role'] == 2) { ?>
                <li><a href="index.php?page_layout=list_cart&controller=cart&action=list_cart" class="active"><i class="bx bxs- icon"></i>Xem đơn hàng</a>
                </li>
            <?php  } elseif ($user['role'] == 3) { ?>
                <li><a href="index.php?action=list_product" class="active"><i class="bx bxs-cart icon"></i> Xem sản phẩm</a>
                </li>
                <li><a href="index.php?action=list_category" class="active"><i class="bx bxs- icon"></i>Xem loại hàng</a>
                </li>
            <?php  } elseif ($user['role'] == 4) { ?>
                <li><a href="index.php?page_layout=view_news&controller=news&action=view_news" class="active"><i class="bx bxs- icon"></i>Xem bài viết</a>
                </li>
            <?php  } elseif ($user['role'] == 5) { ?>
                <li><a href="index.php?action=list_customer" class="active"><i class="bx bxs- icon"></i> Xem khách hàng</a>
                </li>
            <?php  } elseif ($user['role'] == 6) { ?>
                <li><a href="index.php?page_layout=list_comment&controller=add_comment&action=list_comment" class="active"><i class="bx bxs- icon"></i>Xem bình luận</a>
                </li>
            <?php  }
            ?>
        </ul>

    </section>
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class="bx bx-menu toggle-sidebar"></i>
            <form action="#">
                <!-- <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class="bx bx-search icon"></i>
                </div> -->
            </form>
            <span class="divider"></span>

            <p class="text-center">Chào <b><?php echo $user['full_name'] ?></b></p>
            <ul class="profile-link">

                <li><a href="../model/logout.php"><i class="bx bxs-log-out-circle"></i> Log out</a></li>
            </ul>

        </nav>
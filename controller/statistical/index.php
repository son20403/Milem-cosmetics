<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
switch ($action) {
    case 'statistical': {
            $data_products = products($conn);
            $data_categorys = categorys($conn);
            $data_comments = comments($conn);
            $data_news = news($conn);
            $data_orders = orders($conn);
            $data_staff = staffs($conn);
            $data_customers = customers($conn);
            $data_roles = roles($conn);
            break;
        }
    case 'chart': {
            $data_chartProduct = chartProduct($conn);
            break;
        }
    default: {
            require_once "./index.php";
            break;
        }
}

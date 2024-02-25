<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
$table_roles = 'roles';
switch ($action) {
    case 'add_role': {
            if (isset($_POST['add'])) {
                $name_role = $_POST['name_role'];
                if (addRole($name_role, $conn)) {
                    echo '<script language="javascript">alert("Thêm vai trò thành công!");</script>';
?>
                    <script>
                        location.href = 'index.php?page_layout=view_role&controller=roles&action=view_role';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Thêm vai trò thất bại!");</script>';
                }
            } else {
                return;
            }
            break;
        }
    case 'view_role': {
            $data_roles = getAllData($table_roles, $conn);
            break;
        }
    case 'update_role': {
            $id_role = $_GET['id'];
            $data_roles = getDataRole($table_roles, $id_role, $conn);

            if (isset($_POST['update'])) {
                $name_role = $_POST['name_role'];
                if (updateRoles($name_role, $id_role, $conn)) {
                    echo '<script language="javascript">alert("Sửa vai trò thành công!");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=view_role&controller=roles&action=view_role';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Sửa vai trò thất bại!");</script>';
                }
            } else {
                return;
            }
            break;
        }
    case 'delete_role': {
            if (isset($_GET['id'])) {
                $id_role = $_GET['id'];
                if (deleteRole($table_roles, $id_role, $conn)) {
                    echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                    ?>
                    <script>
                        location.href = 'index.php?page_layout=view_role&controller=roles&action=view_role';
                    </script>
                <?php
                } else {
                    echo '<script language="javascript">alert("Vai trò này đang có hiệu lực, Không thể xóa!");</script>';
                ?>
                    <script>
                        location.href = 'index.php?page_layout=view_role&controller=roles&action=view_role';
                    </script>
                <?php
                }
            }else{
                return;
            }
            break;
        }

    default: {
            require_once "./index.php";
            break;
        }
}

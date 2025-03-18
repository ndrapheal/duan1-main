<?php
include_once 'model/user.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'list':
            $dsdm = user_getAll();
            include_once 'view/header.php';
            include_once 'view/user.php';
            break;
        case 'add':
            if (isset($btn_addUser)) {
                user_add($id, $username, $password, $name, $email, $address, $role, $image, $phone, $diemtichluy);
                header('location: ?mod=user&act=list');
            }
            include_once 'view/header.php';
            include_once 'view/user_add.php';

            break;
        case 'edit':
            $dsdm = user_getAll();
            $dm =  user_getOne($id);
            if (isset($btn_editUser)) {
                if ($_FILES['img']['name'] == null) {
                    user_edit($id, $username, $password, $name, $email, $address, $role, $dm['img'], $phone, $diemtichluy);
                } else {
                    user_edit($id, $username, $password, $name, $email, $address, $role, $_FILES['img']['name'], $phone, $diemtichluy);
                    move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
                    header('location: ?mod=user&act=list');
                }
            } elseif (isset($btnCancel)) {
                header('location: ?mod=user&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/user_edit.php';
            break;
        case 'search':
            if (isset($_GET['btn_search'])) {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    // Thực hiện hàm tìm kiếm người dùng theo ID
                    $user = user_getOne($id);
                    if ($user) {
                        include_once 'view/header.php';
                        include_once 'view/search_user.php';
                        break;
                        // Nếu tìm thấy người dùng, chuyển hướng đến trang hiển thị thông tin chi tiết của người dùng
                        // header("Location: mod=user&act=search&id=$id");
                    } else {
                        // Nếu không tìm thấy người dùng, thông báo người dùng không tồn tại
                        echo "Không tồn tại người dùng có id = $id.";
                    }
                } else {
                    // Nếu không có ID được cung cấp, thông báo yêu cầu nhập ID
                    echo "Nhập user ID.";
                }
            }
            break;
        case 'delete':
            user_delete($id);
            header('location: ?mod=user&act=list');
            break;
    }
}

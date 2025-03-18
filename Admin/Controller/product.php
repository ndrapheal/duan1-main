<?php
include_once 'Model/product.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'list':
            $dssp = product_getAll();
            include_once 'view/header.php';
            include_once 'view/book.php';
            break;
        case 'add':
            if (isset($btn_addProduct)) {
                $image = $_FILES['image']['name']; // Lấy tên tệp ảnh
                $temp_image = $_FILES['image']['tmp_name']; // Lấy đường dẫn tạm thời của tệp ảnh
                $upload_folder = '../Admin/image/'; // Thư mục lưu trữ ảnh
                // Di chuyển tệp ảnh vào thư mục lưu trữ
                move_uploaded_file($temp_image, $upload_folder . $image);
                // Thêm sách vào cơ sở dữ liệu
                book_add($id, $name, $price, $idloaisach, $id_nxb, $image, $moi, $giamgia, $view, $ngonngu, $sotrang, $hinhthuc, $namxb, $idtacgia, $mota, $motangan);
                header('location: ?mod=product&act=list');
            }elseif (isset($btnCancel)) {
                header('location: ?mod=product&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/book_add.php';
            break;
        case 'edit':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            $sp =  product_getOne($id);
            if (isset($btn_editProduct)) {
                $image = $_FILES['image']['name']; // Lấy tên tệp ảnh
                $temp_image = $_FILES['image']['tmp_name']; // Lấy đường dẫn tạm thời của tệp ảnh
                $upload_folder = 'image/'; // Thư mục lưu trữ ảnh
                // Di chuyển tệp ảnh vào thư mục lưu trữ
                move_uploaded_file($temp_image, $upload_folder . $image);
                // Sửa thông tin sách trong cơ sở dữ liệu
                book_edit($id, $name, $price, $idloaisach, $id_nxb, $image, $moi, $giamgia, $view, $ngonngu, $sotrang, $hinhthuc, $namxb, $idtacgia, $mota, $motangan);
                header('location: ?mod=product&act=list');
            } elseif (isset($btnCancel)) {
                header('location: ?mod=product&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/book_edit.php';
            break;
        case 'delete':
            book_delete($id);
            header('location: ?mod=product&act=list');
            break;
    }
}

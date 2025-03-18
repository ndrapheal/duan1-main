<?php
include_once 'Model/order.php';
extract($_REQUEST);
if(isset($act)){
    switch($act){
        case 'list':
            $dsdm = order_getAll();
            include_once 'view/header.php';
            include_once 'view/order.php';
               
            break;
        case 'delete':
            order_delete($id);
            header('location: ?mod=order&act=list');
            break;
        // case 'add':
        //     if (isset($btn_addorder)) {
        //         order_add($id, $userID, $status, $method, $date, $discount_id);
        //         header('location: ?mod=order&act=list');
        //     } else if (isset($btn_addorder)) {
        //         order_add($id, $userID, $status, $method, $date, $discount_id);
        //         header('location: ?mod=order&act=list');
        //     }
        //     include_once 'view/header.php';
        //     include_once 'view/order_add.php';
               
        //     break;
        case 'edit':
            if (isset($btn_editorder)) {
                order_edit($id, $userID, $ten, $status, $method, $date);
                header('location: ?mod=order&act=list');
            } else if (isset($btn_editorder)) {
                order_edit($id, $userID, $ten, $status, $method, $date);
                header('location: ?mod=order&act=list');
            }  elseif (isset($btnCancel)) {
                header('location: ?mod=product&act=list');
                exit(); // Chắc chắn dừng việc thực thi các lệnh phía dưới
            }
            include_once 'view/header.php';
            include_once 'view/order_edit.php';
               
            break;
    }
}
?>